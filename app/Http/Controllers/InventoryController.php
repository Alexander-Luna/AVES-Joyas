<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function addInventory(Request $request, $productId)
    {
        $request->validate([
            'quantity' => 'required|integer',
            'price_per_unit' => 'required|numeric',
        ]);

        Inventory::create([
            'product_id' => $productId,
            'quantity' => $request->quantity,
            'price_per_unit' => $request->price_per_unit,
        ]);

        return back()->with('success', 'Inventario añadido con éxito.');
    }
}
