<?php

namespace app\Policies;

use app\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserProfilePolicy
{
    use HandlesAuthorization;


    public function myprofile(User $user, User $model)
    {
        return $user->id == $model->id;
    }

}
