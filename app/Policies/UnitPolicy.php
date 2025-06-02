<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\Unit;
use App\Models\User;

class UnitPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user)
    {
        // return $user->can('view-any Unit');
        if ($user->hasPermissionTo('view Unit')) {
            return Response::allow();
        }
        return Response::deny('You do not have permission to view Unit.');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Unit $unit)
    {
        // return $user->can('view Unit');
        if ($user->hasPermissionTo('view Unit')) {
            return Response::allow();
        }
        return Response::deny('You do not have permission to view this Unit.');

    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user)
    {
        // return $user->can('create Unit');
        if ($user->hasPermissionTo('create Unit')) {
            return Response::allow();
        }
        return Response::deny('You do not have permission to create Unit.');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Unit $unit)
    {
        // return $user->can('update Unit');
        if ($user->hasPermissionTo('update Unit')) {
            return Response::allow();
        }
        return Response::deny('You do not have permission to update this Unit.');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Unit $unit)
    {
        // return $user->can('delete Unit');
        if ($user->hasPermissionTo('delete Unit')) {
            return Response::allow();
        }
        return Response::deny('You do not have permission to delete this Unit.');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Unit $unit)
    {
        // return $user->can('restore Unit');
        if ($user->hasPermissionTo('restore Unit')) {
            return Response::allow();
        }
        return Response::deny('You do not have permission to restore this Unit.');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Unit $unit)
    {
        // return $user->can('force-delete Unit');
        if ($user->hasPermissionTo('force-delete Unit')) {
            return Response::allow();
        }
        return Response::deny('You do not have permission to permanently delete this Unit.');
    }
}
