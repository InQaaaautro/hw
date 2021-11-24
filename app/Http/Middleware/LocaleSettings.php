<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Psr\Http\Client\ClientInterface;
use View;

class LocaleSettings
{
    public function handle(Request $request, Closure $next)
    {
        View::share(
            [
                'locale' => App::getLocale(),
            ]
        );
        return $next($request);
    }
}
