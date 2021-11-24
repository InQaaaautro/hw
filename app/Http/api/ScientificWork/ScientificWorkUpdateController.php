<?php

namespace App\Http\api\ScientificWork;

use App\Models\ScientificWork;
use App\Services\ScientificWorks\ScientificWorksService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ScientificWorkUpdateController
{
    private ScientificWorksService $scientificWorksService;

    public function __construct(
        ScientificWorksService $scientificWorksService
    )
    {
        $this->scientificWorksService = $scientificWorksService;
    }

    public function __invoke(ScientificWork $scientificWork, Request $request): JsonResponse
    {
        if (!$request->user()->hasRole('admin')) {
            abort(403);
        } else {
            $result = $this->scientificWorksService
                ->updateScientificWorks($scientificWork, $request->toArray());
            return response()->json($result);
        }
    }
}
