<?php

namespace App\Http\Controllers;

use Darryldecode\Cart\Facades\CartFacade as Cart;

use App\Jobs\SendAppointmentConfirmationMailJob;
use App\Models\Appointment;
use Illuminate\Support\Facades\DB;
use Ramsey\Collection\Collection;
//use App\Models\Cart;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\CartItem;


class CartController extends Controller
{
    public function index()
    {
        // get the cart of the user that is not paid
        $cart = auth()->user()->cart()
            ->where('is_paid', operator: false)
            ->first();

        return view('web.cart', compact('cart'));
    }

    public function removeItem($cart_service_id)
    {
        // Get the cart of the user that is not paid
        $cart = auth()->user()->carts()->where('is_paid', false)->first();

        // If the cart is not found, redirect back
        if (!$cart) {
            return redirect()->back();
        }

        // get the cart_service with id = cart service id Raw query
        $cart_service = DB::table('cart_service')->where('id', $cart_service_id)->where('cart_id', $cart->id)->get();

        // If the cart service is not found, redirect back
        if (!$cart_service) {
            return redirect()->back();
        }


        // Delete the cart service
        DB::table('cart_service')->where('id', $cart_service_id)->where('cart_id', $cart->id)->delete();

        // Update the total
        $cart->total = $cart->services()->sum('cart_service.price');
        $cart->save();

        return redirect()->back();
    }


    

public function store(Request $request)
{

    $product = Product::findOrFail($request->input('product_id'));

    Cart::add([
        'id' => $product->id,
        'name' => $product->name,
        'price' => $product->price,
        'quantity' => 1,
    ]);
}



   public function checkout()
{
    // Get the unpaid cart for the authenticated user
    $cart = auth()->user()->cart()->where('is_paid', false)->first();

    if (!$cart) {
        return redirect()->back()->with('error', 'No items in the cart.');
    }

    DB::transaction(function () use ($cart) {
        // Process services and create appointments
        foreach ($cart->services as $service) {
            Appointment::create([
                'cart_id' => $cart->id,
                'user_id' => $cart->user_id,
                'service_id' => $service->id,
                'time_slot_id' => $service->pivot->time_slot_id,
                'date' => $service->pivot->date,
                'start_time' => $service->pivot->start_time,
                'end_time' => $service->pivot->end_time,
                'location_id' => $service->pivot->location_id,
                'total' => $service->pivot->price,
            ]);
        }

        // Mark the cart as paid
        $cart->is_paid = true;
        $cart->save();
    });

    return redirect()->route('dashboard')->with('success', 'Checkout completed successfully!');
}

}