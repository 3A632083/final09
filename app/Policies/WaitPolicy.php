<?php
/**
 * Created by PhpStorm.
 * User: Luxge
 * Date: 2019/1/15
 * Time: 下午 10:46
 */

namespace App\Policies;
use App\User;
use App\Wait;
use Illuminate\Auth\Access\HandlesAuthorization;


class WaitPolicy
{

    use HandlesAuthorization;

    public function destroy(User $user, Wait $wait)
    {
        return $user->id === $wait->user_id;
    }
}