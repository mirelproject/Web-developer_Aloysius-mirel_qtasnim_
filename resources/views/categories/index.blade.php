@extends('layouts.app')

@section('title', 'Categories')

@section('content')
<div class="d-flex justify-content-between mb-3">
    <h2>Categories</h2>
    <a href="{{ route('categories.create') }}" class="btn btn-primary">Add Category</a>
</div>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Name</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @forelse($categories as $category)
            <tr>
                <td>{{ $category->name }}</td>
                <td>
                    <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="2">No categories found.</td>
            </tr>
        @endforelse
    </tbody>
</table>
@endsection
