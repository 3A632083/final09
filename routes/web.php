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

Route::get('/reservations', 'ReservationController@index');
Route::post('/reservation', 'ReservationController@store');
Route::get('/searchreservation', 'ReservationController@index');
Route::delete('/reservation/{reservation}', 'ReservationController@destroy');
Route::get('reservation', ['as' => 'reservation.index',   'uses' => 'ReservationController@index']);
Route::get('searchreservation',  ['as' => 'searchreservation.show',    'uses' => 'SearchReservationController@show']);


Route::get('welcome',  ['as' => 'welcome.index',    'uses' => 'WelcomeController@index']);
Route::get('reservation',  ['as' => 'reservation.index',    'uses' => 'ReservationController@index']);
Route::get('reservationok',  ['as' => 'reservation.show',    'uses' => 'ReservationController@show']);
Route::get('wait',  ['as' => 'wait.index',    'uses' => 'WaitController@index']);
Route::get('/insertwait/{id}', 'WaitController@create');
Route::post('/success/{id}', 'WaitController@store');
Route::get('searchwait',  ['as' => 'searchwait.index',    'uses' => 'SearchwaitController@index']);
Route::delete('/wait/{wait}', 'WaitController@destroy');
Route::get('/admin', 'AdminController@index');
Route::get('count',  ['as' => 'admin.index',    'uses' => 'AdminController@index']);
Route::get('/allreservation', 'AllReservationController@index');
Route::get('allreservation',  ['as' => 'allreservation.index',    'uses' => 'AllReservationController@index']);
Route::patch('/reservation/status/{id}', 'AllReservationController@status');
Route::get('allwait',  ['as' => 'allwait.index',    'uses' => 'AllwaitController@index']);
Route::get('/allwait/{id}', 'AllwaitController@index');
Route::patch('/wait/status/{id}', 'AllWaitController@status');
Route::post('/wait/inline', 'AllwaitController@inline');
Route::patch('/num/{id}', 'AdminController@num');
Route::patch('/time/{id}', 'AdminController@time');
Route::get('seat', ['as' => 'reservation.seat',   'uses' => 'ReservationController@seat']);
Route::patch('/section1/{id}', 'ReservationController@seat');
Route::post('/reservationok', 'ReservationController@show');

Route::get('/stepone', 'ReservationController@stepone');
Route::get('stepone', ['as' => 'stepone.stepone',   'uses' => 'ReservationController@stepone']);
Route::post('/step2/{id}', 'ReservationController@time');
Route::patch('/reservationcheck/{reservationcheck}', 'ReservationController@index2');
Route::patch('/section2/{id}', 'ReservationController@section2');
Route::patch('/reservationcheck2/{reservationcheck2}', 'ReservationController@index3');
Route::patch('/section3/{id}', 'ReservationController@section3');
Route::patch('/reservationcheck3/{reservationcheck3}', 'ReservationController@index4');

Route::post('/stepnew/{id}', 'ReservationController@timenew');
Route::patch('/sectionnew/{id}', 'ReservationController@sectionnew');
Route::patch('/sectionnew2/{id}', 'ReservationController@sectionnew2');
Route::patch('/sectionnew3/{id}', 'ReservationController@sectionnew3');
Route::patch('/reservationchecknew/{reservationchecknew}', 'ReservationController@index5');
Route::patch('/reservationchecknew2/{reservationchecknew}', 'ReservationController@index6');
Route::patch('/reservationchecknew3/{reservationchecknew}', 'ReservationController@index7');


