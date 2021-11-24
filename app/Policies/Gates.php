<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Contracts\Auth\Access\Gate;

abstract class Gates
{
    const EMPLOYEE='EMPLOYEE';

    public static $gates = [
        self::EMPLOYEE
    ];
}

