@extends('layouts.app')

@section('title', 'Edit Product')

@section('content')
<h2>Edit Product</h2>

<form method="POST" action="{{ route('products.update', $product->id) }}">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="name">Product Name</label>
        <input type="text" name="name" class="form-control" value="{{ $product->name }}" required>
    </div>
    <div class="form-group">
        <label for="stock">Stock</label>
        <input type="number" name="stock" class="form-control" value="{{ $product->stock }}" required>
    </div>
    <div class="form-group">
        <label for="category_id">Category</label>
        <select name="category_id" class="form-control" required>
            @foreach($categories as $category)
                <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-success">Update</button>
    <a href="{{ route('products.index') }}" class="btn btn-secondary">Back</a>
</form>
@endsection
