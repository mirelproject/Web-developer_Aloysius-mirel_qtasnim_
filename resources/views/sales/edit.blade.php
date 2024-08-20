@extends('layouts.app')

@section('title', 'Edit Sale')

@section('content')
<h2>Edit Sale</h2>

<form method="POST" action="{{ route('sales.update', $sale->id) }}">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="product_id">Product</label>
        <select name="product_id" class="form-control" required>
            @foreach($products as $product)
                <option value="{{ $product->id }}" {{ $sale->product_id == $product->id ? 'selected' : '' }}>
                    {{ $product->name }}
                </option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="quantity_sold">Quantity Sold</label>
        <input type="number" name="quantity_sold" class="form-control" value="{{ $sale->quantity_sold }}" required>
    </div>
    <div class="form-group">
        <label for="transaction_date">Transaction Date</label>
        <input type="date" name="transaction_date" class="form-control" value="{{ $sale->transaction_date }}" required>
    </div>
    <button type="submit" class="btn btn-success">Update</button>
    <a href="{{ route('sales.index') }}" class="btn btn-secondary">Back</a>
</form>
@endsection
