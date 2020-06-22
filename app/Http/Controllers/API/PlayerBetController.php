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
     * @bodyParam bets array required Match id to place bet for. Example: [{"player_id": 1,"match_id" : 1,"bets_for": "Home","is_used_joker": 0},{"player_id": 1,"match_id" : 1,"bets_for": "Away","is_used_joker": 0}]
     *
     * @return \Illuminate\Http\Response
     */
    public function addbet(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'bets' => 'required',
            ]);

            if ($validator->fails()) {
                return $this->sendError($validator->errors()->first(), 422);
            }
            foreach ($request->bets as $bet) {
                if ($bet['id'] && $bet['id'] != null) {
                    PlayerBet::where('id', $bet['id'])->update(['bets_for' => $bet['bets_for'], 'is_used_joker' => $bet['is_used_joker']]);
                } else {
                    PlayerBet::create(['player_id' => Auth::guard('player')->user()->id, 'match_id' => $bet['match_id'], 'bets_for' => $bet['bets_for'], 'is_used_joker' => $bet['is_used_joker']]);
                }
            }
            return $this->sendResponse(null, 'Bets placed successfully.');
        } catch (\Exception $e) {
            return $this->sendError($e->getMessage(), 500);
        }
    }
}
