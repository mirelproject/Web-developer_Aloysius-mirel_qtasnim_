@extends('layouts.app')

@section('title', 'Add Category')

@section('content')
<h2>Add Category</h2>

<form method="POST" action="{{ route('categories.store') }}">
    @csrf
    <div class="form-group">
        <label for="name">Category Name</label>
        <input type="text" name="name" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-success">Add</button>
    <a href="{{ route('categories.index') }}" class="btn btn-secondary">Back</a>
</form>
@endsection
