<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Celebrity extends JsonResource
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
            'name' => $this->name,
            'description' => $this->description,
            'birth_date' => $this->birth_date->format('d/m/Y'),
            'meet_start' => $this->meet_start->format('d/m/Y'),
            'meet_end' => $this->meet_end->format('d/m/Y'),
            'images' => $this->images
        ];
    }
}
