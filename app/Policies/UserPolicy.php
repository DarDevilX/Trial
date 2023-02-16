<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function isAdmin(User $user, $id)
    {

        $result = $user->role_id === $id;
        return $result;
    }

    public function isOwner(User $user)
    {

        $result = $user->role_id === 2 ;
        return $result;
    }
}
