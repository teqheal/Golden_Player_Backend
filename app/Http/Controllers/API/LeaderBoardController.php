<?php
namespace App\Http\Controllers\API;

use Illuminate\Support\Facades\DB;
use App\Http\Resources\LeaderBoard as LeaderboardResource;

class LeaderBoardController extends BaseController
{
    /**
     * Get Leader Board
     *
     * @return \Illuminate\Http\Response
     */
    public function getLeaderBoard()
    {
        try {
            $players = DB::select("SELECT p.id, p.name, p.profile_pic, SUM(pb.points_earned) AS total_points FROM player_bets AS pb JOIN players as p ON p.id = pb.player_id WHERE match_id IN(SELECT id FROM matches WHERE golden_game_id IN (SELECT id FROM golden_games WHERE MONTH(start_date) = MONTH(CURRENT_DATE))) GROUP BY player_id ORDER BY total_points DESC");
            return $this->sendResponse(LeaderboardResource::collection($players), 'Get leader board successfully.');
        } catch (\Exception $e) {
            return $this->sendError($e->getMessage(), 500);
        }
    }
}
