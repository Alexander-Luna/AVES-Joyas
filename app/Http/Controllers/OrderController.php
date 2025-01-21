<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function checkout(Request $request, $productId)
    {
        $request->validate([
            'quantity' => 'required|integer|min:1',
        ]);

        $product = Product::findOrFail($productId);
        $remainingQuantity = $request->quantity;
        $totalPrice = 0;

        $inventory = Inventory::where('product_id', $productId)->orderBy('created_at')->get();

        foreach ($inventory as $entry) {
            if ($remainingQuantity <= 0) break;

            if ($entry->quantity <= $remainingQuantity) {
                $totalPrice += $entry->quantity * $entry->price_per_unit;
                $remainingQuantity -= $entry->quantity;
                $entry->delete();
            } else {
                $totalPrice += $remainingQuantity * $entry->price_per_unit;
                $entry->quantity -= $remainingQuantity;
                $entry->save();
                $remainingQuantity = 0;
            }
        }

        if ($remainingQuantity > 0) {
            return back()->withErrors(['error' => 'No hay suficiente inventario para completar la orden.']);
        }

        Order::create([
            'product_id' => $productId,
            'quantity' => $request->quantity,
            'total_price' => $totalPrice,
        ]);

        return redirect()->route('products.index')->with('success', 'Compra realizada con éxito.');
    }
}
