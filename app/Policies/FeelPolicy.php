<?php

namespace App\Policies;

use App\Models\Feels\Feel;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class FeelPolicy
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

    public function view(User $user, Feel $feel): bool
    {
        //
    }

    public function create(User $user): bool
    {
        //
    }

    public function update(User $user, Feel $feel): bool
    {
        //
    }

    public function delete(User $user, Feel $feel): bool
    {
        //
    }

    public function restore(User $user, Feel $feel): bool
    {
        //
    }

    public function forceDelete(User $user, Feel $feel): bool
    {
        //
    }
}
