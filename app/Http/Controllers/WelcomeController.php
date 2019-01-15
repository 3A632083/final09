<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class WelcomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function type()

    {

        $type=Auth::user()->type;

        if($type == 1){
            return redirect('/admin');
        }

        else{

            return redirect('/home');

        }

    }
}
