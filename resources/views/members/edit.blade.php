@extends('layouts.app')

@section('content')
<h2>Edit Member</h2>

@if ($errors->any())
<div class="alert alert-danger">
    <ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
</div>
@endif

<form action="{{ route('members.update', $member) }}" method="POST">
    @csrf @method('PUT')
    @include('members.form')
    <button class="btn btn-success">Update</button>
    <a href="{{ route('members.index') }}" class="btn btn-secondary">Cancel</a>
</form>
@endsection
