<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Cart;
use Illuminate\Http\Request;

class ProductCartController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $cart = auth()->user()->productCart()->where('is_paid', false)->first();
        return view('products.cart', compact('products', 'cart'));
    }

    public function addToCart(Request $request)
    {
        $product = Product::findOrFail($request->product_id);
        $cart = auth()->user()->productCart()->firstOrCreate([
            'is_paid' => false
        ]);

        $existingCartProduct = $cart->products()->where('product_id', $product->id)->first();
        
        if ($existingCartProduct) {
            $cart->products()->updateExistingPivot($product->id, [
                'quantity' => $existingCartProduct->pivot->quantity + 1
            ]);
        } else {
            $cart->products()->attach($product->id, [
                'quantity' => 1,
                'price' => $product->price
            ]);
        }

        return redirect()->back()->with('success', 'Product added to cart');
    }

    public function viewCart()
    {
        $cart = auth()->user()->productCart()->where('is_paid', false)->first();
        return view('products.cart', compact('cart'));
    }

    public function removeFromCart(Request $request)
    {
        $cart = auth()->user()->productCart()->where('is_paid', false)->first();
        $cart->products()->detach($request->product_id);

        return redirect()->back()->with('success', 'Product removed from cart');
    }
}