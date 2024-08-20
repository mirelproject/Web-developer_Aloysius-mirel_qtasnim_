@extends('layouts.app')

@section('title', 'Add Sale')

@section('content')
<h2>Add Sale</h2>

<form method="POST" action="{{ route('sales.store') }}">
    @csrf
    <div class="form-group">
        <label for="product_id">Product</label>
        <select name="product_id" class="form-control" required>
            @foreach($products as $product)
                <option value="{{ $product->id }}">{{ $product->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="quantity_sold">Quantity Sold</label>
        <input type="number" name="quantity_sold" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="transaction_date">Transaction Date</label>
        <input type="date" name="transaction_date" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-success">Add</button>
    <a href="{{ route('sales.index') }}" class="btn btn-secondary">Back</a>
</form>
@endsection
