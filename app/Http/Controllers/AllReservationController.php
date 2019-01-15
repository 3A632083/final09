<?php

namespace App\Http\Controllers;

use App\Reservation;
use Illuminate\Http\Request;

class AllReservationController extends Controller
{
    public function index(Request $request)
    {
        $reservations = Reservation::orderBy('created_at','ASC', $request->user()->id)->get();
        $data=['reservations' => $reservations];
        return view('allreservation',$data);
    }

    public function status(Request $request, $id)
    {
        $reservation=Reservation::find($id);
        $reservation->update([
            'status' => $request->status,
        ]);
        return redirect('/allreservation');
    }}
