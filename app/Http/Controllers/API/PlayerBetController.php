<?php

namespace App\Http\Controllers\API;

use App\PlayerBet;
use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
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
            'match_id' => 'required',
            'bets_for' => 'required',
            'is_used_joker' => 'required'
        ]);

        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }

        $input = $request->all();
        $input['player_id'] = Auth::guard('player')->user()->id;
        $bet = PlayerBet::create($input);

        return $this->sendResponse($bet, 'Player register successfully.');
    }
}
