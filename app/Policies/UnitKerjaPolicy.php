<?php

namespace App\Policies;

use App\Models\UnitKerja;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class UnitKerjaPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user)
    {
        if ($user->hasPermissionTo('view UnitKerja')) {
            return Response::allow();
        }
        return Response::deny('You do not have permission to view Unit Kerja.');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, UnitKerja $unitKerja)
    {
        if ($user->hasPermissionTo('view UnitKerja')) {
            return Response::allow();
        }
        return Response::deny('You do not have permission to view this Unit Kerja.');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user)
    {
        if ($user->hasPermissionTo('create UnitKerja')) {
            return Response::allow();
        }
        return Response::deny('You do not have permission to create Unit Kerja.');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, UnitKerja $unitKerja)
    {
        if ($user->hasPermissionTo('update UnitKerja')) {
            return Response::allow();
        }
        return Response::deny('You do not have permission to update Unit Kerja.');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, UnitKerja $unitKerja)
    {
        if ($user->hasPermissionTo('delete UnitKerja')) {
            return Response::allow();
        }
        return Response::deny('You do not have permission to delete Unit Kerja.');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, UnitKerja $unitKerja)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, UnitKerja $unitKerja)
    {
        //
    }
}
