@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h1>Members</h1>
    <a href="{{ route('members.create') }}" class="btn btn-primary">Add Member</a>
</div>

@if(session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table table-bordered">
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Address</th>
        <th>Actions</th>
    </tr>
    @foreach ($members as $member)
    <tr>
        <td>{{ $member->name }}</td>
        <td>{{ $member->email }}</td>
        <td>{{ $member->phone }}</td>
        <td>{{ $member->address }}</td>
        <td>
            <a href="{{ route('members.edit', $member) }}" class="btn btn-warning btn-sm">Edit</a>
            <form action="{{ route('members.destroy', $member) }}" method="POST" style="display:inline;">
                @csrf @method('DELETE')
                <button class="btn btn-danger btn-sm">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection
