@extends('layouts.app')

@section('title', 'Edit Category')

@section('content')
<h2>Edit Category</h2>

<form method="POST" action="{{ route('categories.update', $category->id) }}">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="name">Category Name</label>
        <input type="text" name="name" class="form-control" value="{{ $category->name }}" required>
    </div>
    <button type="submit" class="btn btn-success">Update</button>
    <a href="{{ route('categories.index') }}" class="btn btn-secondary">Back</a>
</form>
@endsection
