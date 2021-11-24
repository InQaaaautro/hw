<?php
namespace App\Services\Auth\Handlers;

use Illuminate\Auth\Events\Authenticated;

class AuthEventHandler
{

    public function handle(Authenticated $event): void
    {
        \Log::info(__CLASS__, [
            json_encode($event->user->id),
        ]);
    }
}
