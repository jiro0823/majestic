<?php

namespace App\Http\Controllers;
use App\Models\Product;


use Illuminate\Http\Request;

class MiniCartContorller extends Controller
{
  public function index(){
    $product = Product::all();
  }
}
