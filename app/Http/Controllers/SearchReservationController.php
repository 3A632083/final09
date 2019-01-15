<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reservation;
class SearchReservationController extends Controller
{
    public function show(Request $request)
    {
        $reservations = Reservation::where('user_id', $request->user()->id)->get();
        $data=['reservations' => $reservations];
        return view('searchreservation',$data);
    }
}
