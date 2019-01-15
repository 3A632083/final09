<?php

namespace App\Http\Controllers;

use App\Reservation;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Repositories\ReservationRepository;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $reservations;

    public function index()
    {
        $reservations = Reservation::orderby('user_id')->get();
        $total = $reservations->count('user_id');
        $data=['total' => $total];
        return view('reservation',$data);
    }

    public function __construct(ReservationRepository $reservations)
    {
        $this->middleware('auth');
        $this->reservations = $reservations;
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->user()->reservations()->create([
            'name' => $request->name,
            'people' => $request->people,
            'phone' => $request->phone,

            'date' => $request->date,
            'time' => $request->time,
        ]);

        return redirect('reservationok');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('reservationok');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reservation $reservation)
    {
        //
    }

    public function destroy(Reservation $reservation)
    {
        $this->authorize('destroy', $reservation);

        $reservation->delete();

        return redirect('/searchreservation');
    }
}
