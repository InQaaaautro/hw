<?php

namespace App\Services\Users\Repositories;

use App\Models\User;

class EloquentUserRepository implements UserRepository
{
    public function givePermission(User $user, array $permission): void
    {
        $user->givePermissionsTo($permission);
    }

    public function findUser(int $id): ?User
    {
        return User::find($id);
    }
}
