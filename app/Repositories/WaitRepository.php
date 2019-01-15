<?php


namespace App\Repositories;
use App\User;
use App\Wait;

class WaitRepository
{
    public function forUser(User $user)
    {
        return Wait::where('user_id', $user->id)
            ->orderBy('created_at', 'asc')
            ->get();
    }
}