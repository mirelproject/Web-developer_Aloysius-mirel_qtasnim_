@extends('layouts.app')

@section('title', 'Compare Sales')

@section('content')
<h2>Compare Sales</h2>

<form method="GET" action="{{ route('products.compare') }}" class="form-inline mb-3">
    <input type="date" name="start_date" class="form-control mr-2" value="{{ request()->start_date }}">
    <input type="date" name="end_date" class="form-control mr-2" value="{{ request()->end_date }}">
    <button type="submit" class="btn btn-primary">Filter</button>
</form>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Product Name</th>
            <th>Total Sold</th>
        </tr>
    </thead>
    <tbody>
        @foreach($salesComparison as $sale)
            <tr>
                <td>{{ $sale->name }}</td>
                <td>{{ $sale->total_sold }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
