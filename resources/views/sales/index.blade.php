@extends('layouts.app')

@section('title', 'Sales')

@section('content')
<div class="d-flex justify-content-between mb-3">
    <h2>Sales</h2>
    <a href="{{ route('sales.create') }}" class="btn btn-primary">Add Sale</a>
</div>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Product</th>
            <th>Quantity Sold</th>
            <th>Date</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @forelse($sales as $sale)
            <tr>
                <td>{{ $sale->product->name }}</td>
                <td>{{ $sale->quantity_sold }}</td>
                <td>{{ $sale->transaction_date }}</td>
                <td>
                    <a href="{{ route('sales.edit', $sale->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('sales.destroy', $sale->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="4">No sales found.</td>
            </tr>
        @endforelse
    </tbody>
</table>
@endsection
