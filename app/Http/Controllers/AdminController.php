<?php

namespace App\Http\Controllers;


use App\Admin;
use Illuminate\Http\Request;
use App\Wait;
use App\Reservation;

class AdminController extends Controller
{
    public function index()
    {
        $waits = Wait::orderby('user_id')->get();
        $total = $waits->count('user_id');
        $reservations = Reservation::orderby('user_id')->get();
        $total2 = $reservations->count('user_id');
        $data=['total' => $total,'total2' => $total2];
        return view('count',$data);
    }

    public function num(Request $request)
    {
        $request->user()->admin()->update([
            'num' => $request->num,
        ]);
        return redirect('/allwait');
    }

    public function time(Request $request)
    {
        $request->user()->admin()->update([
            'time' => $request->time,
        ]);
        return redirect('/allwait');
    }

}
