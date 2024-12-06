<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use Darryldecode\Cart\Facades\CartFacade as Cart;

class StoreSection extends Component
{
    public $products = [];
    public $cart = [];

    public function mount()
    {
        $this->products = Product::all();
        $this->cart = Cart::getContent()->toArray();
    }

    public function addToCart($productId)
    {
        $product = Product::find($productId);

        if ($product) {
            Cart::add([
                'id' => $product->id,
                'name' => $product->name,
                'price' => $product->price,
                'quantity' => 1,
            ]);

            $this->cart = Cart::getContent()->toArray(); // Refresh the cart
        }
    }

    public function removeFromCart($itemId)
    {
        Cart::remove($itemId);
        $this->cart = Cart::getContent()->toArray(); // Refresh the cart
    }

    public function render()
    {
        return view('livewire.store-section', [
            'products' => $this->products,
            'cart' => $this->cart,
        ]);
    }
}


