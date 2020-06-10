<?php

namespace App\Http\Controllers\API;

use App\PlayerBet;
use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use Carbon\Carbon;

class PlayerBetController extends BaseController
{
    /**
     * Add new bet
     *
     * @bodyParam bets array required Match id to place bet for. Example: [{"player_id": 1,"match_id" : 1,"bets_for": "Home","is_used_joker": 0},{"player_id": 1,"match_id" : 1,"bets_for": "Away","is_used_joker": 0}]
     *
     * @return \Illuminate\Http\Response
     */
    public function addbet(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'bets' => 'required',
        ]);

        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }
        $data = $request->bets;
        $insertData = [];
        foreach ($data as $val) {
            $val['created_at'] = Carbon::now();
            $insertData[] = $val;
        }
        if (sizeof($insertData) > 0) {
            $bet = PlayerBet::insert($insertData);
            return $this->sendResponse($bet, 'Bets placed successfully.');
        }
        return $this->sendError('Somthing went wrong.');
    }
}
