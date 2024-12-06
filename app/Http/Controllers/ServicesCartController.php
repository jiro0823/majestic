<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Cart;
use Illuminate\Http\Request;

class ServicesCartController extends Controller
{
    public function index()
    {
        $services = Service::all();
        $cart = auth()->user()->serviceCart()->where('is_paid', false)->first();
        return view('services.cart', compact('services', 'cart'));
    }

    public function addToCart(Request $request)
    {
        $service = Service::findOrFail($request->service_id);
        $cart = auth()->user()->serviceCart()->firstOrCreate([
            'is_paid' => false
        ]);

        $cart->services()->attach($service->id, [
            'time_slot_id' => $request->time_slot_id,
            'date' => $request->date,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
            'location_id' => $request->location_id,
            'price' => $service->price
        ]);

        return redirect()->back()->with('success', 'Service added to cart');
    }

    public function viewCart()
    {
        $cart = auth()->user()->serviceCart()->where('is_paid', false)->first();
        return view('services.cart', compact('cart'));
    }

    public function removeFromCart(Request $request)
    {
        $cart = auth()->user()->serviceCart()->where('is_paid', false)->first();
        $cart->services()->detach($request->service_id);

        return redirect()->back()->with('success', 'Service removed from cart');
    }
}