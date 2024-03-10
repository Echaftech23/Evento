<?php

namespace App\Policies;

use App\Models\Establishment;
use App\Models\User;

class EstablishmentPolicy
{

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        $organizer = $user->organizer;

        return optional($organizer)->establishment_id === null;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Establishment $establishment): bool
    {
        return $user->id === $establishment->organizer->user_id;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Establishment $establishment): bool
    {
        return $user->id === $establishment->organizer->user_id;
    }

}
