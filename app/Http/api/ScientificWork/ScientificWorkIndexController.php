<?php

namespace App\Http\api\ScientificWork;

use App\Http\api\ScientificWork\Resources\ScientificWorkResource;

use App\Http\api\ScientificWork\Resources\ScientificWorksResource;
use App\Models\ScientificWork;
use App\Services\Traits\HasRolesAndPermissions;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ScientificWorkIndexController
{


    public function __invoke(Request $request): Responsable
    {
        if (!$request->user()->hasRole('admin')) {
            abort(403);
        } else {
            return new ScientificWorksResource(ScientificWork::all());
        }
    }
}
