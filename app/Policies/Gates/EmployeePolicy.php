<?php

namespace App\Policies\Gates;

use App\Models\User;
use App\Policies\Gates;
use App\Services\Auth\AuthService;

abstract class Employee
{

    /**
     * @var AuthService
     */
    private $authService;

    public function __construct(
        AuthService $authService
    )
    {
        $this->authService = $authService;
    }

    public function view(User $user)
    {
        $this->authService->hasUserPermission(
            $user,
            Gates::EMPLOYEE
        );
    }
}
