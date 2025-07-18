<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Check if the user is admin or super admin.
     *
     * @param User $user
     * @return bool
     */
    protected function isAdminOrSuperAdmin(User $user): bool
    {
        return $user->isAdmin() || $user->isSuperAdmin();
    }

    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool|Response
    {
        return $this->isAdminOrSuperAdmin($user);
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, User $model): bool|Response
    {
        return $this->isAdminOrSuperAdmin($user);
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool|Response
    {
        return $this->isAdminOrSuperAdmin($user);
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, User $model): bool|Response
    {
        return $this->isAdminOrSuperAdmin($user);
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, User $model): bool|Response
    {
        return $this->isAdminOrSuperAdmin($user);
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, User $model): bool|Response
    {
        return false;  // deny by default
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, User $model): bool|Response
    {
        return false;  // deny by default
    }
}
