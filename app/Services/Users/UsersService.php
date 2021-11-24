<?php

namespace App\Services\Users;

use App\Models\User;
use App\Services\Users\Handlers\GivePermissionHandler;
use App\Services\Users\Repositories\UserRepository;

class UsersService
{
    private GivePermissionHandler $givePermissionHanderl;
    private UserRepository $userRepository;

    public function __construct(
        GivePermissionHandler $givePermissionHandler,
        UserRepository        $userRepository
    )
    {
        $this->userRepository = $userRepository;
        $this->givePermissionHanderl = $givePermissionHandler;
    }

    public function findUser(int $id): ?User
    {
        return $this->userRepository->findUser($id);
    }

    public function handle(User $user, array $permission): void
    {
        $this->givePermissionHanderl->handler($user, $permission);
    }
}
