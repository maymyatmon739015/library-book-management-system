@extends('layouts.app')

@section('content')
<h1>{{ $book->title }}</h1>
<p><strong>Author:</strong> {{ $book->author }}</p>
<p><strong>Publish Year:</strong> {{ $book->publish_year }}</p>
<p><strong>Genre:</strong> {{ $book->genre }}</p>
<p><strong>Availability Status:</strong> {{ $book->availability_status == 1 ? 'Available' : 'Borrowed' }}</p>
<a href="{{ route('books.index') }}" class="btn btn-secondary">Back</a>
@endsection
