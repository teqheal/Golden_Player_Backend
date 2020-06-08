<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Team as TeamResource;
use Illuminate\Support\Facades\Auth;

class Match extends JsonResource
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
            'home_team' =>  new TeamResource($this->homeTeam),
            'away_team' => new TeamResource($this->awayTeam),
            'start_datetime' => $this->start_datetime,
            'end_datetime' => $this->end_datetime,
            'bets_for' => $this->userBet->bets_for
        ];
    }
}
