<?php

namespace App\Policies;

use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Auth\Access\Response;

class RolePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->can('view-any Role');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Role $Role): bool
    {
        return $user->can('view Role');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->can('create Role');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Role $Role): bool
    {
        return $user->can('update Role');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Role $Role): bool
    {
        return $user->can('delete Role');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Role $Role): bool
    {
        return $user->can('restore Role');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Role $Role): bool
    {
        return $user->can('force-delete Role');
    }
}
