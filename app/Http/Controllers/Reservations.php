<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Reservations extends Controller
{
    public function index()
    {
        return view('reservation');
    }

    public function show()
    {
        return view('reservationok');
    }
}
