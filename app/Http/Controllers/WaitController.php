<?php

namespace App\Http\Controllers;

use App\Wait;
use Illuminate\Http\Request;

class WaitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wenxins = Wait::orderby('user_id')->get();
        $total = $wenxins->count('user_id');
        $data=['total' => $total];
        return view('wait',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('insertwait');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Wait  $wait
     * @return \Illuminate\Http\Response
     */
    public function show(Wait $wait)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Wait  $wait
     * @return \Illuminate\Http\Response
     */
    public function edit(Wait $wait)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Wait  $wait
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Wait $wait)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Wait  $wait
     * @return \Illuminate\Http\Response
     */
    public function destroy(Wait $wait)
    {
        //
    }
}