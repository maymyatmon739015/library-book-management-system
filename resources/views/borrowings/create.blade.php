@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Borrow a Book</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
    </div>
    @endif

    <form action="{{ route('borrowings.store') }}" method="POST">
        @csrf

        <div class="form-group mb-3">
            <label>Member</label>
            <select name="member_id" class="form-control" required>
                <option value="">Select Member</option>
                @foreach($members as $member)
                    <option value="{{ $member->id }}">{{ $member->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group mb-3">
            <label>Book</label>
            <select name="book_id" class="form-control" required>
                <option value="">Select Book</option>
                @foreach($books as $book)
                    <option value="{{ $book->id }}">{{ $book->title }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Borrow</button>
    </form>
</div>
@endsection
