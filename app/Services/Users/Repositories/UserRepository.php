<?php

namespace App\Services\Users\Repositories;

use App\Models\User;

interface UserRepository
{
    public function givePermission(User $user, array $permission):void;

    public function findUser(int $id): ?User;
}
