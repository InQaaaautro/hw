<?php

namespace App\Policies;

use App\Models\User;
use App\Services\Auth\AuthService;

abstract class BasePolicy
{

    /**
     * @var AuthService
     */
    protected $authService;

    public function __construct(
        AuthService $authService
    )
    {
        $this->authService = $authService;
    }

    public function before(User $user)
    {
        if ($user->isAdmin()) {
            return true;
        }
        if (!$user->isModerator()) {
            return false;
        }
    }
}
