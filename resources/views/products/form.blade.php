@extends('layouts.app')

@section('title', isset($product) ? 'Edit Product' : 'Add Product')

@section('content')
<h2>{{ isset($product) ? 'Edit Product' : 'Add Product' }}</h2>

<form method="POST" action="{{ isset($product) ? route('products.update', $product->id) : route('products.store') }}">
    @csrf
    @if(isset($product))
        @method('PUT')
    @endif

    <div class="form-group">
        <label for="name">Product Name</label>
        <input type="text" name="name" class="form-control" value="{{ old('name', $product->name ?? '') }}" required>
    </div>

    <div class="form-group">
        <label for="stock">Stock</label>
        <input type="number" name="stock" class="form-control" value="{{ old('stock', $product->stock ?? '') }}" required>
    </div>

    <div class="form-group">
        <label for="category_id">Category</label>
        <select name="category_id" class="form-control" required>
            @foreach($categories as $category)
                <option value="{{ $category->id }}" {{ isset($product) && $product->category_id == $category->id ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-success">{{ isset($product) ? 'Update' : 'Add' }}</button>
    <a href="{{ route('products.index') }}" class="btn btn-secondary">Back</a>
</form>
@endsection
