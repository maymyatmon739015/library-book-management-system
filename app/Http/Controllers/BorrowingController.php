<?php

namespace App\Http\Controllers;

use App\Models\Borrowing;
use App\Models\Book;
use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;

class BorrowingController extends Controller
{
    CONST STATUS_BORROWED = 'borrowed';
    CONST STATUS_RETURNED = 'returned';

    public function index()
    {
        $borrowings = Borrowing::with(['user', 'book'])->get();
        return view('borrowings.index', compact('borrowings'));
    }

    public function create()
    {
        $memberRole = Role::where('name', 'member')->first();
        $members = User::where('role_id', $memberRole->id)->get();
        $books = Book::where('availability_status', 1)->get(); // Only available books
        return view('borrowings.create', compact('members', 'books'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'member_id' => 'required|exists:users,id',
            'book_id' => 'required|exists:books,id',
        ]);

        $book = Book::findOrFail($request->book_id);

        if ($book->availability_status == 0) {
            return back()->with('error', 'Book is not available.');
        }

        Borrowing::create([
            'user_id' => $request->member_id,
            'book_id' => $request->book_id,
            'borrowed_at' => now(),
            'due_date' => now()->addDays(14),
            'status' => self::STATUS_BORROWED,
        ]);

        $book->update(['availability_status' => 0]);

        return redirect()->route('borrowings.index')->with('success', 'Book borrowed successfully.');
    }

    public function returnBook($id)
    {
        $borrowing = Borrowing::findOrFail($id);

        if ($borrowing->status === 'returned') {
            return back()->with('error', 'Book already returned.');
        }

        $borrowing->update([
            'returned_at' => now(),
            'status' => 'returned',
        ]);

        $borrowing->book->update(['availability_status' => 1]);

        return redirect()->route('borrowings.index')->with('success', 'Book returned successfully.');
    }
}
