<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DisplayStore extends Controller
{
    public function index()
    {
        // Dummy data for products
        $products = [
            ['id' => 1, 'name' => 'Product A', 'price' => 20.99, 'image' => 'placeholder-a.jpg'],
            ['id' => 2, 'name' => 'Product B', 'price' => 15.49, 'image' => 'placeholder-b.jpg'],
            ['id' => 3, 'name' => 'Product C', 'price' => 30.00, 'image' => 'placeholder-c.jpg'],
        ];

        return view('store.index', compact('store'));
    }
}