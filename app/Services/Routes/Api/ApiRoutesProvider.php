<?php

namespace App\Services\Routes\Api;

use App\Http\api\ScientificWork\ScientificWorkIndexController;
use App\Http\api\ScientificWork\ScientificWorkShowController;
use App\Http\api\ScientificWork\ScientificWorkStoreController;
use App\Http\api\ScientificWork\ScientificWorkUpdateController;
use Illuminate\Support\Facades\Route;

class ApiRoutesProvider
{
    public function registerRoutes(): void
    {

        $this->registerScientificWorkRoutes();

    }

    public function registerScientificWorkRoutes(): void
    {
        Route::group([
            'middleware' => 'auth:api'
        ], function () {
            Route::get('scientific_work', ScientificWorkIndexController::class)
                ->name(ApiRoutes::SCIENTIFICWORK_INDEX);
            Route::get('scientific_work/{scientific_work}', ScientificWorkShowController::class)
                ->name(ApiRoutes::SCIENTIFICWORK_SHOW)
                ->where('scientific_work', '\d+');
            Route::post('scientific_work', ScientificWorkStoreController::class)
                ->name(ApiRoutes::SCIENTIFICWORK_STORE);
            Route::put('scientific_work/{scientific_work}', ScientificWorkUpdateController::class)
                ->name(ApiRoutes::SCIENTIFICWORK_UPDATE)
                ->where('scientific_work', '\d+');
        });
    }
}
