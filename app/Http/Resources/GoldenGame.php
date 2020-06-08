<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Celebrity as CelebrityResource;
use App\Http\Resources\Match as MatchResource;

class GoldenGame extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
            'celebrity' => new CelebrityResource($this->celebrity),
            'matches' => MatchResource::collection($this->matches),
        ];
    }
}
