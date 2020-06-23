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
        $betsFor = $betId =  "";
        if (isset($this->userBet)) {
            $betId = $this->userBet->id;
            if ($this->userBet->is_used_joker == 1) {
                $betsFor = "Joker";
            } else {
                $betsFor = $this->userBet->bets_for;
            }
        }
        return [
            'id' => $this->id,
            'home_team' =>  new TeamResource($this->homeTeam),
            'away_team' => new TeamResource($this->awayTeam),
            'start_datetime' => $this->start_datetime,
            'end_datetime' => $this->end_datetime,
            'bets_for' => $betsFor,
            'bet_id' => $betId
        ];
    }
}
