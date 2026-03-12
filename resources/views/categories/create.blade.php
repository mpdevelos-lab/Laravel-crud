@extends('layouts.app')

@section('content')

<h2>Add Category</h2>

<form action="{{ route('categories.store') }}" method="POST">

@csrf

<div class="mb-3">
<label>Name</label>
<input type="text" name="name" class="form-control">
</div>

<div class="mb-3">
<label>Description</label>
<textarea name="description" class="form-control"></textarea>
</div>

<button class="btn btn-primary">Save</button>

</form>

@endsection
