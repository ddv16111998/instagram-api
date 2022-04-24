<?php

namespace App\Policies;

use App\Models\Acts\Act;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ActPolicy
{
    use HandlesAuthorization;

    public function __construct()
    {
        //
    }

    public function viewAny(User $user): bool
    {
        //
    }

    public function view(User $user, Act $act): bool
    {
        //
    }

    public function create(User $user): bool
    {
        //
    }

    public function update(User $user, Act $act): bool
    {
        //
    }

    public function delete(User $user, Act $act): bool
    {
        //
    }

    public function restore(User $user, Act $act): bool
    {
        //
    }

    public function forceDelete(User $user, Act $act): bool
    {
        //
    }
}
