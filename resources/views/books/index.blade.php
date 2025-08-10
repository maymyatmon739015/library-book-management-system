@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h1>Books</h1>
    <a href="{{ route('books.create') }}" class="btn btn-primary">Add Book</a>
</div>

@if(session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Title</th>
            <th>Author</th>
            <th>Publish Year</th>
            <th>Genre</th>
            <th>availability Status</th>
            <th width="200px">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($books as $book)
        <tr>
            <td>{{ $book->title }}</td>
            <td>{{ $book->author }}</td>
            <td>{{ $book->publish_year }}</td>
            <td>{{ $book->genre }}</td>
            <td>{{ $book->availability_status == 1 ? 'Available' : 'Borrowed' }}</td>
            <td>
                <a href="{{ route('books.show', $book) }}" class="btn btn-info btn-sm">View</a>
                <a href="{{ route('books.edit', $book) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('books.destroy', $book) }}" method="POST" style="display:inline;">
                    @csrf @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm"
                        onclick="return confirm('Are you sure?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
