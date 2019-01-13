<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::auth();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home.home');
});

Route::get('welcome',  ['as' => 'welcome.index',    'uses' => 'WelcomeController@index']);
Route::get('reservation',  ['as' => 'reservation.index',    'uses' => 'ReservationController@index']);
Route::get('reservationok',  ['as' => 'reservation.show',    'uses' => 'ReservationController@show']);
Route::get('wait',  ['as' => 'wait.index',    'uses' => 'WaitController@index']);