@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                <h4>Dashboard</h4>
            </div>
            <div class="card-body">
                <p>Welcome, {{ Auth::user()->name }}!</p>
                <div class="row">
                    <div class="col-md-4">
                        <a href="{{ route('books.index') }}" class="btn btn-outline-primary w-100">📚 Manage Books</a>
                    </div>
                    <div class="col-md-4">
                        <a href="{{ route('members.index') }}" class="btn btn-outline-success w-100">👥 Manage Members</a>
                    </div>
                    <div class="col-md-4">
                        <a href="{{ route('borrowings.index') }}" class="btn btn-outline-warning w-100">📖 Borrowing</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
