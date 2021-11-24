<?php

namespace App\Http\api\ScientificWork;

use App\Http\api\ScientificWork\Resources\ScientificWorkResource;
use App\Models\ScientificWork;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ScientificWorkShowController
{
    public function __invoke(Request $request, ScientificWork $ScientificWork)
    {
        if (!$request->user()->hasRole('admin')) {
            abort(403);
        } else {
            return new ScientificWorkResource($ScientificWork);
        }
    }
}
