<?php
namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Resources\LeaderBoard as LeaderboardResource;

class LeaderBoardController extends BaseController
{
    /**
     * Get Leader Board
     *
     * @return \Illuminate\Http\Response
     */
    public function getLeaderBoard(Request $request)
    {
        try {
            $perPage = $request->has('per_page') ? $request->per_page : 10;
            $players = DB::table('player_bets as pb')
            ->join('players as p', 'p.id', '=', 'pb.player_id')
            ->whereRaw("pb.match_id IN(SELECT id FROM matches WHERE golden_game_id IN (SELECT id FROM golden_games WHERE MONTH(start_date) = MONTH(CURRENT_DATE)))")
            ->selectRaw("p.id, p.name, p.profile_pic, SUM(pb.points_earned) AS total_points")
            ->groupBy('player_id')
            ->orderBy('total_points', 'desc')
            ->paginate($perPage);
            return $this->sendResponse(LeaderboardResource::collection($players)->appends(null), 'Get leader board successfully.');
        } catch (\Exception $e) {
            return $this->sendError($e->getMessage(), 500);
        }
    }
}
