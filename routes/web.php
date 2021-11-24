<?php

use App\Http\Controllers\FileController;
use App\Http\Controllers\ScientificWorkController;
use App\Http\Controllers\FileIndexController;
use App\Http\Controllers\SheetsController;
use App\Http\Middleware\LocaleSettings;
use App\Http\Middleware\Localize;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => '/{locale}',
    'middleware' => [
        'auth',
        'role:employee',
        'locale'
    ]
], function () {
    Route::resources([
        'sheets' => SheetsController::class
    ]);

    Route::resources([
        'scientific_works' => ScientificWorkController::class
    ], [
        'except' => [
            'destroy'
        ]
    ]);
});

Route::get('login', function () {
    return view('auth.login');
});

Route::get('/{locale}', function () {
    return view('page');
#})->middleware([Localize::class, LocaleSettings::class]);
})->middleware("locale");

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
