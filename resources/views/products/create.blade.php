@extends('layouts.app')

@section('title', 'Add Product')

@section('content')
<h2>Add Product</h2>

<form method="POST" action="{{ route('products.store') }}">
    @csrf
    <div class="form-group">
        <label for="name">Product Name</label>
        <input type="text" name="name" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="stock">Stock</label>
        <input type="number" name="stock" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="sold">Sold</label>
        <input type="number" name="sold" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="transaction_date">Transaction Date</label>
        <input type="date" name="transaction_date" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="category_id">Category</label>
        <select name="category_id" class="form-control" required>
            @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-success">Add</button>
    <a href="{{ route('products.index') }}" class="btn btn-secondary">Back</a>
</form>
@endsection
