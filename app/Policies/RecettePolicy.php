<?php

namespace App\Policies;

use App\Enums\Role;
use App\Models\Recette;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class RecettePolicy {
    public function before(User $user, string $ability): bool|null {
        if ($user->role === Role::ADMIN) {
            return true;
        }

        return null;
    }
// ...
    function update(User $user, Recette $recette) {
        return $user->id === $recette->user_id;
    }

    function delete(User $user, Recette $recette) {
        return $user->id === $recette->user_id;
    }

    function create(User $user) {
        return true;
    }
}
