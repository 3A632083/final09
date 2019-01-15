<?php

namespace App\Http\Controllers;

use App\Wait;
use Illuminate\Http\Request;

class AllWaitController extends Controller
{
    public function index(Request $request)
    {
        $waits = Wait::orderBy('created_at','ASC', $request->user()->id)->get();
        $data=['waits' => $waits];
        return view('allwait',$data);
    }

    public function status(Request $request, $id)
    {
        $wait=Wait::find($id);
        $wait->update([
            'status' => $request->status,
        ]);
        return redirect('/allwait');
    }
}
