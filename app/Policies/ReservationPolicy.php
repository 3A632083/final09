<?php

namespace App\Policies;
use App\User;
use App\Reservation;
use Illuminate\Auth\Access\HandlesAuthorization;

class ReservationPolicy
{
    use HandlesAuthorization;

    public function destroy(User $user, Reservation $reservation)
    {
        return $user->id === $reservation->user_id;
    }
}
