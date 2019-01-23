<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email','phone', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function waits()
    {
        return $this->hasOne(Wait::class);
    }

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }

    public function admin()
    {
        return $this->hasOne(Admin::class);
    }
    public function seat()
    {
        return $this->hasOne(Seat::class);
    }
    public function datetime()
    {
        return $this->hasMany(Datetime::class);
    }
    public function section1()
    {
        return $this->hasMany(Section1::class);
    }
    public function section2()
    {
        return $this->hasMany(Section2::class);
    }

    public function section3()
    {
        return $this->hasMany(Section3::class);
    }
    public function sectionnew()
    {
        return $this->hasMany(Sectionnew::class);
    }
    public function sectionnew2()
    {
        return $this->hasMany(Sectionnew2::class);
    }
    public function sectionnew3()
    {
        return $this->hasMany(Sectionnew3::class);
    }
}
