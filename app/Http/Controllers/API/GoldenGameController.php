<?php

namespace App\Http\Controllers\API;

use App\GoldenGame;
use App\Http\Resources\GoldenGame as GoldenGameResource;
use App\Http\Controllers\API\BaseController;
use Illuminate\Http\Request;

class GoldenGameController extends BaseController
{
    /**
     * Golden Game
     *
     * @return \Illuminate\Http\Response
     */
    public function getGoldenGame()
    {
        $goldenGames = GoldenGame::whereRaw('MONTH(start_date) = MONTH(CURRENT_DATE)')->first();
        return $this->sendResponse(new GoldenGameResource($goldenGames), 'Get golden game successfully.');
    }
}
