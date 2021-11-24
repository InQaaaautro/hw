<?php

namespace App\Services\Users\Handlers;

use App\Models\User;
use App\Services\Users\Repositories\UserRepository;

class GivePermissionHandler
{
    private UserRepository $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function handler(User $user, array $permission): void
    {
        $this->userRepository->givePermission($user, $permission);
    }
}
