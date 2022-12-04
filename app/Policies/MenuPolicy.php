<?php

namespace App\Policies;

use App\Models\User;
use io3x1\FilamentMenus\Models\Menu;
use Illuminate\Auth\Access\HandlesAuthorization;

class MenuPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        return $user->can('view_any_menu');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \io3x1\FilamentMenus\Models\Menu  $menu
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Menu $menu)
    {
        return $user->can('view_menu');
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return $user->can('create_menu');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \io3x1\FilamentMenus\Models\Menu  $menu
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Menu $menu)
    {
        return $user->can('update_menu');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \io3x1\FilamentMenus\Models\Menu  $menu
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Menu $menu)
    {
        return $user->can('delete_menu');
    }

    /**
     * Determine whether the user can bulk delete.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function deleteAny(User $user)
    {
        return $user->can('delete_any_menu');
    }

    /**
     * Determine whether the user can permanently delete.
     *
     * @param  \App\Models\User  $user
     * @param  \io3x1\FilamentMenus\Models\Menu  $menu
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Menu $menu)
    {
        return $user->can('force_delete_menu');
    }

    /**
     * Determine whether the user can permanently bulk delete.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDeleteAny(User $user)
    {
        return $user->can('force_delete_any_menu');
    }

    /**
     * Determine whether the user can restore.
     *
     * @param  \App\Models\User  $user
     * @param  \io3x1\FilamentMenus\Models\Menu  $menu
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Menu $menu)
    {
        return $user->can('restore_menu');
    }

    /**
     * Determine whether the user can bulk restore.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restoreAny(User $user)
    {
        return $user->can('restore_any_menu');
    }

    /**
     * Determine whether the user can replicate.
     *
     * @param  \App\Models\User  $user
     * @param  \io3x1\FilamentMenus\Models\Menu  $menu
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function replicate(User $user, Menu $menu)
    {
        return $user->can('replicate_menu');
    }

    /**
     * Determine whether the user can reorder.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function reorder(User $user)
    {
        return $user->can('reorder_menu');
    }

}
