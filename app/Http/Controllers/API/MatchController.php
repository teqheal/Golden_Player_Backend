<?php

namespace App\Http\Controllers\API;

use App\Match;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Http\Resources\Match as MatchResource;
use Carbon\Carbon;

class MatchController extends BaseController
{
    /**
     * Get All Games
     *
     * @return \Illuminate\Http\Response
     */
    public function matches()
    {
        $matches = Match::where('start_datetime','>', Carbon::now())->where('is_active', 1)->get();
        return $this->sendResponse(MatchResource::collection($matches), 'Get matches successfully.');
    }
}
