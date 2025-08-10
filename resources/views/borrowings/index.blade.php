@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Borrowings</h1>
        <a href="{{ route('borrowings.create') }}" class="btn btn-primary mb-3">Borrow a Book</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @elseif(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Member</th>
                <th>Book</th>
                <th>Borrow Date</th>
                <th>Due Date</th>
                <th>Return Date</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($borrowings as $borrowing)
                <tr>
                    <td>{{ $borrowing->user->name }}</td>
                    <td>{{ $borrowing->book->title }}</td>
                    <td>{{ $borrowing->borrowed_at }}</td>
                    <td>{{ $borrowing->due_date }}</td>
                    <td>{{ $borrowing->returned_at ?? '-' }}</td>
                    <td>{{ ucfirst($borrowing->status) }}</td>
                    <td>
                        @if($borrowing->status === 'borrowed')
                            <form action="{{ route('borrowings.return', $borrowing->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-success btn-sm">Return</button>
                            </form>
                        @else
                            <span class="text-muted">Returned</span>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
