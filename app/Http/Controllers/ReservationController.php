<?php

namespace App\Http\Controllers;

use App\Datetime;
use App\Reservation;
use App\Http\Requests;
use App\Seat;
use App\Section1;
use App\Section2;
use App\Section3;
use App\Sectionnew;
use App\Sectionnew2;
use App\Sectionnew3;
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
            'phone' => $request->phone,
            'people' => $request->people,
            'date' => $request->date,
            'time' => $request->time,
            'seat' => $request->seat,
        ]);

        return view('reservationok');
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

    public function seat(Request $request)
    {
        $request->user()->section1()->update([
            'time' => $request->time,
        ]);
        $datetime = Section1::orderby('id')->get();
        $seats2 = Seat::orderby('id')->get();
        $data=['seats2' => $seats2,'datetime' => $datetime];
        return view('seat2', $data);
    }

    public function stepone()
    {
        $date = Datetime::orderby('id','ASC')->get();
        $data=['date' => $date];
        return view('stepone', $data);
    }

    public function time(Request $request)
    {
        $request->user()->datetime()->create([
            'people' => $request->people,
            'date' => $request->date,
        ]);
        $section1 = Section1::orderby('id')->get();
        $section2 = Section2::orderby('id')->get();
        $section3 = Section3::orderby('id')->get();
        $null1 = Section1::orderby('id')->get();
        $null2 = Section2::orderby('id')->get();
        $null3 = Section3::orderby('id')->get();
        $total1 = $section1->count('seat');
        $total2 = $section2->count('seat');
        $total3 = $section3->count('seat');
        $data=['total1' => $total1,'total2' => $total2,'total3' => $total3,'null1' => $null1,'null2' => $null2,'null3' => $null3];
        return view('steptwo',$data);
    }

    public function steptwo()
    {
        return view('stepone');

    }
    public function index2(Request $request)
    {
        $request->user()->section1()->create([
            'seat' => $request->seat,
        ]);
        $seat = Section1::orderby('id','DESC')->get();
        $seat2 = Datetime::orderby('id','DESC')->get();
        $seat3 = Section1::orderby('id','ASC')->get();
        $data=['seat' => $seat,'seat2' => $seat2,'seat3' => $seat3];
        return view('reservation',$data);
    }
    public function section2(Request $request)
    {
        $request->user()->section2()->create([
            'time' => $request->time,
        ]);
        $datetime = Section2::orderby('id')->get();
        $seats2 = Seat::orderby('id')->get();
        $data=['seats2' => $seats2,'datetime' => $datetime];
        return view('section2', $data);
    }
    public function section3(Request $request)
    {
        $request->user()->section3()->create([
            'time' => $request->time,
        ]);
        $datetime = Section3::orderby('id','DESC')->get();
        $seats2 = Seat::orderby('id')->get();
        $data=['seats2' => $seats2,'datetime' => $datetime];
        return view('section3', $data);
    }

    public function index3(Request $request)
    {
        $request->user()->section2()->create([
            'seat' => $request->seat,
        ]);
        $seat = Section2::orderby('id','DESC')->get();
        $seat2 = Datetime::orderby('id','DESC')->get();
        $seat3 = Section2::orderby('id','ASC')->get();
        $data=['seat' => $seat,'seat2' => $seat2,'seat3' => $seat3];
        return view('reservation2',$data);
    }

    public function index4(Request $request)
    {
        $request->user()->section3()->create([
            'seat' => $request->seat,
        ]);
        $seat = Section3::orderby('id','DESC')->get();
        $seat2 = Datetime::orderby('id','DESC')->get();
        $seat3 = Section3::orderby('id','ASC')->get();
        $data=['seat' => $seat,'seat2' => $seat2,'seat3' => $seat3];
        return view('reservation3',$data);
    }

    public function sectionnew(Request $request)
    {
        $request->user()->sectionnew()->create([
            'time' => $request->time,
        ]);
        $datetime = Sectionnew::orderby('id')->get();
        $seats2 = Seat::orderby('id')->get();
        $data=['seats2' => $seats2,'datetime' => $datetime];
        return view('sectionnew', $data);
    }
    public function sectionnew2(Request $request)
    {
        $request->user()->sectionnew2()->create([
            'time' => $request->time,
        ]);
        $datetime = Sectionnew2::orderby('id')->get();
        $seats2 = Seat::orderby('id')->get();
        $data=['seats2' => $seats2,'datetime' => $datetime];
        return view('sectionnew2', $data);
    }
    public function sectionnew3(Request $request)
    {
        $request->user()->sectionnew3()->create([
            'time' => $request->time,
        ]);
        $datetime = Sectionnew3::orderby('id')->get();
        $seats2 = Seat::orderby('id')->get();
        $data=['seats2' => $seats2,'datetime' => $datetime];
        return view('sectionnew3', $data);
    }
    public function index5(Request $request)
    {
        $request->user()->sectionnew()->create([
            'seat' => $request->seat,
        ]);
        $seat = Sectionnew::orderby('id','DESC')->get();
        $seat2 = Datetime::orderby('id','DESC')->get();
        $seat3 = Sectionnew::orderby('id','ASC')->get();
        $data=['seat' => $seat,'seat2' => $seat2,'seat3' => $seat3];
        return view('reservationnew',$data);
    }
    public function index6(Request $request)
    {
        $request->user()->sectionnew2()->create([
            'seat' => $request->seat,
        ]);
        $seat = Sectionnew2::orderby('id','DESC')->get();
        $seat2 = Datetime::orderby('id','DESC')->get();
        $seat3 = Sectionnew2::orderby('id','ASC')->get();
        $data=['seat' => $seat,'seat2' => $seat2,'seat3' => $seat3];
        return view('reservationnew2',$data);
    }
    public function index7(Request $request)
    {
        $request->user()->sectionnew3()->create([
            'seat' => $request->seat,
        ]);
        $seat = Sectionnew3::orderby('id','DESC')->get();
        $seat2 = Datetime::orderby('id','DESC')->get();
        $seat3 = Sectionnew3::orderby('id','ASC')->get();
        $data=['seat' => $seat,'seat2' => $seat2,'seat3' => $seat3];
        return view('reservationnew3',$data);
    }

    public function timenew(Request $request)
    {
        $request->user()->datetime()->create([
            'people' => $request->people,
            'date' => $request->date,
        ]);
        $section1 = Sectionnew::orderby('id')->get();
        $section2 = Sectionnew2::orderby('id')->get();
        $section3 = Sectionnew3::orderby('id')->get();
        $null1 = Sectionnew::orderby('id')->get();
        $null2 = Sectionnew2::orderby('id')->get();
        $null3 = Sectionnew3::orderby('id')->get();
        $total1 = $section1->count('seat');
        $total2 = $section2->count('seat');
        $total3 = $section3->count('seat');
        $data=['total1' => $total1,'total2' => $total2,'total3' => $total3,'null1' => $null1,'null2' => $null2,'null3' => $null3];
        return view('stepnew',$data);
    }
}
