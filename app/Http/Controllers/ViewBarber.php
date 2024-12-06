<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barber;

class ViewBarber extends Controller
{
    $barbers = Barber::where('slug', $slug)->firstOrFail();
    return view('barber.view', compact('barber'));
}
