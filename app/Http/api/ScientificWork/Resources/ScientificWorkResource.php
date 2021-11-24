<?php

namespace App\Http\api\ScientificWork\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @mixin \App\Models\ScientificWork
 */
class ScientificWorkResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $this->load('user');
        return [
            'id' => $this->id,
            'summary' => $this->summary,
            'user'=> [
                "firstname" => $this->user->firstname,
                "lastname" => $this->user->lastname,
                "middlename" => $this->user->middlename,
            ]

        ];
    }
}
