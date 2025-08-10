@extends('layouts.app')

@section('content')
<h2>Add Member</h2>

@if ($errors->any())
<div class="alert alert-danger">
    <ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
</div>
@endif

<form action="{{ route('members.store') }}" method="POST">
    @csrf
    @include('members.form')
    <button class="btn btn-primary">Save</button>
</form>
@endsection
