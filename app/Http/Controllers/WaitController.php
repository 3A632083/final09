<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Wait;
use Illuminate\Http\Request;
use App\Repositories\WaitRepository;

class WaitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $waits = Wait::orderby('user_id')->get();
        $total = $waits->count('user_id');
        $admins= Admin::where('user_id', $request->user()->id)->get();
        $data=['total' => $total,'admins' => $admins];
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
        $request->user()->waits()->create([
            'name' => $request->name,
            'phone' => $request->phone,
            'people' => $request->people,
        ]);
        $waits = Wait::orderby('user_id')->get();
        $total = $waits->count('user_id');
        $data=['total' => $total];
        return view('success',$data);
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
        $this->authorize('destroy', $wait);

        $wait->delete();

        return redirect('/searchwait');
    }

    public function __construct(WaitRepository $waits)
    {
        $this->middleware('auth');
        $this->waits = $waits;
    }

}
