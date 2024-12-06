<?php

namespace App\Http\Controllers;
use App\Models\barber;
use Illuminate\Http\Request;

class BarberController extends Controller
{
    public function index() {
        $barbers = Barber::all(); // Example: Fetch data from the Barber model
        return view('barbers.index', compact('barbers'));
    }
}