<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Sale;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    public function index()
    {
        return response()->json(Sale::with('product')->get(), 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity_sold' => 'required|integer',
            'transaction_date' => 'required|date',
        ]);

        $sale = Sale::create($request->all());

        return response()->json($sale, 201);
    }

    public function show($id)
    {
        $sale = Sale::with('product')->find($id);

        if (!$sale) {
            return response()->json(['message' => 'Sale not found'], 404);
        }

        return response()->json($sale, 200);
    }

    public function update(Request $request, $id)
    {
        $sale = Sale::find($id);

        if (!$sale) {
            return response()->json(['message' => 'Sale not found'], 404);
        }

        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity_sold' => 'required|integer',
            'transaction_date' => 'required|date',
        ]);

        $sale->update($request->all());

        return response()->json($sale, 200);
    }

    public function destroy($id)
    {
        $sale = Sale::find($id);

        if (!$sale) {
            return response()->json(['message' => 'Sale not found'], 404);
        }

        $sale->delete();

        return response()->json(null, 204);
    }
}
