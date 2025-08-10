<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $books = [
            ['title' => 'The Great Gatsby', 'author' => 'F. Scott Fitzgerald', 'publish_year' => 1925, 'genre' => 'Fiction', 'availability_status' => true],
            ['title' => 'To Kill a Mockingbird', 'author' => 'Harper Lee', 'publish_year' => 1960, 'genre' => 'Fiction', 'availability_status' => true],
            ['title' => '1984', 'author' => 'George Orwell', 'publish_year' => 1949, 'genre' => 'Fiction', 'availability_status' => true],
        ];

        foreach ($books as $book) {
            Book::updateOrCreate($book);
        }
    }
}
