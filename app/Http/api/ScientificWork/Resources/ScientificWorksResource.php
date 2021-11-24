<?php

namespace App\Http\api\ScientificWork\Resources;

use App\Models\ScientificWork;
use Illuminate\Http\Resources\Json\ResourceCollection;

/**
 * @mixin ScientificWork
 */
class ScientificWorksResource extends ResourceCollection
{

    public function toArray($request)
    {
        return [
            'data' => $this->collection->map(function ($row) use ($request) {
                return (new ScientificWorkResource($row))->toArray($request);
            })
        ];
    }
}
