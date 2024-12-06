<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Display a listing of all products
    public function index()
    {
        // Get all products from the database
        $products = Product::all();

        // Return a view (product.index) and pass products data to it
        return view('products.index', compact('products'));
    }
}