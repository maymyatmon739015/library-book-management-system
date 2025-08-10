@extends('layouts.app')

@section('content')
<h1>Edit Book</h1>

@if ($errors->any())
<div class="alert alert-danger">
    <ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
</div>
@endif

<form action="{{ route('books.update', $book) }}" method="POST">
    @csrf @method('PUT')
    <div class="mb-3">
        <label>Title</label>
        <input type="text" name="title" class="form-control" value="{{ $book->title }}">
    </div>
    <div class="mb-3">
        <label>Author</label>
        <input type="text" name="author" class="form-control" value="{{ $book->author }}">
    </div>
    <div class="mb-3">
        <label>Publish Year</label>
        <input type="text" name="publish_year" class="form-control" value="{{ $book->publish_year }}">
    </div>
    <div class="mb-3">
        <label>Genre</label>
        <input type="text" name="genre" class="form-control" value="{{ $book->genre }}">
    </div>
    <div class="mb-3">
        <label>Availability Status</label>
        <select name="availability_status" class="form-control">
            <option value="1" {{ $book->availability_status == 1 ? 'selected' : '' }}>Available</option>
            <option value="0" {{ $book->availability_status == 0 ? 'selected' : '' }}>Borrowed</option>
        </select>
    </div>
    <button type="submit" class="btn btn-success">Update</button>
    <a href="{{ route('books.index') }}" class="btn btn-secondary">Cancel</a>
</form>
@endsection
