@extends('layouts.app')

@section('title', 'Products')

@section('content')
<div class="d-flex justify-content-between mb-3">
    <h2>Products</h2>
    <a href="{{ route('products.create') }}" class="btn btn-primary">Add Product</a>
</div>

<form method="GET" action="{{ route('products.index') }}" class="form-inline mb-3">
    <input type="text" name="search" class="form-control mr-2" placeholder="Search by name" value="{{ request()->search }}">
    <select name="sort_by" class="form-control mr-2">
        <option value="name" {{ request()->sort_by == 'name' ? 'selected' : '' }}>Name</option>
        <option value="transaction_date" {{ request()->sort_by == 'transaction_date' ? 'selected' : '' }}>Transaction Date</option>
    </select>
    <select name="sort_order" class="form-control mr-2">
        <option value="asc" {{ request()->sort_order == 'asc' ? 'selected' : '' }}>Ascending</option>
        <option value="desc" {{ request()->sort_order == 'desc' ? 'selected' : '' }}>Descending</option>
    </select>
    <button type="submit" class="btn btn-secondary">Sort</button>
</form>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Name</th>
            <th>Stock</th>
            <th>Sold</th>
            <th>Transaction Date</th>
            <th>Category</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @forelse($products as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>{{ $product->stock }}</td>
                <td>{{ $product->sold }}</td>
                <td>{{ $product->transaction_date }}</td>
                <td>{{ $product->category->name }}</td>
                <td>
                    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="6">No products found.</td>
            </tr>
        @endforelse
    </tbody>
</table>

{{ $products->appends(request()->query())->links() }}
@endsection
