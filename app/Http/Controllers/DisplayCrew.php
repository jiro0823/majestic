<?php

namespace App\Http\Controllers;
use App\Models\Deal;
use Illuminate\Http\Request;
use App\Models\Crew;

class DisplayCrew extends Controller
{
    public function index()
    {
        $crew = Crew::all();
        // Pass crew or barber data if needed
        return view('web.Crew', compact('crew')); // Ensure the 'crew/index.blade.php' view exists
    }
}
