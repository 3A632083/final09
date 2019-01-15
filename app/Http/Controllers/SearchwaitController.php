<?php

namespace App\Http\Controllers;

use App\Wait;
use Illuminate\Http\Request;

class SearchwaitController extends Controller
{
    public function index(Request $request)
    {
        $waits = Wait::where('user_id', $request->user()->id)->get();
        $data=['waits' => $waits];
        return view('searchwait',$data);
    }
}
