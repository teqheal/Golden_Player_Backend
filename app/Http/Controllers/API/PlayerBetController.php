<?php

namespace App\Http\Controllers\API;

use App\PlayerBet;
use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class PlayerBetController extends BaseController
{
    /**
     * Add new bet
     *
     * @bodyParam match_id integer required Match id to place bet for. Example: 1
     * @bodyParam bets_for string required selected option (home team id OR away team id OR DRAW). Example: 1
     * @bodyParam is_used_joker integer required Is used joker or not 1 = used, 0 = not used. Example: 1
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
