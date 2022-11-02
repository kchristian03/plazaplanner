<?php

namespace App\Policies;

use App\Models\testimony;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class testimonyPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {

    }

    public function view(User $user, testimony $testimony): bool
    {
    }

    public function create(User $user): bool
    {
    }

    public function update(User $user, testimony $testimony): bool
    {
    }

    public function delete(User $user, testimony $testimony): bool
    {
    }

    public function restore(User $user, testimony $testimony): bool
    {
    }

    public function forceDelete(User $user, testimony $testimony): bool
    {
    }
}
