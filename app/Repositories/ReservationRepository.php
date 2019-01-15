<?php
/**
 * Created by PhpStorm.
 * User: Luxge
 * Date: 2019/1/15
 * Time: 下午 11:25
 */

namespace App\Repositories;
use App\User;
use App\Reservation;

class ReservationRepository
{
    public function forUser(User $user)
    {
        return Reservation::where('user_id', $user->id)
            ->orderBy('created_at', 'asc')
            ->get();
    }
}