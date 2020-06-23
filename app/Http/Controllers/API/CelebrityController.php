<?php

namespace App\Http\Controllers\API;

use App\Celebrity;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Http\Resources\Celebrity as CelebrityResource;
use App\MeetCelebRequest;
use Illuminate\Support\Facades\Auth;

class CelebrityController extends BaseController
{
    /**
     * Get Celebrities
     *
     * @return \Illuminate\Http\Response
     */
    public function getCelebs()
    {
        try {
            $celebs = Celebrity::where('is_active', 0)->get();
            return $this->sendResponse(CelebrityResource::collection($celebs), 'Get celebrities successfully.');
        } catch (\Exception $e) {
            return $this->sendError($e->getMessage(), 500);
        }
    }
    
    /**
     * Meet Celebrity
     *
     * @bodyParam celebrity_id integer required Id of the celebrity. Example: 1
     *
     * @return \Illuminate\Http\Response
     */
    public function meetCeleb(Request $request)
    {
        try {
            $meetCelebs = new MeetCelebRequest();
            $meetCelebs->player_id = Auth::guard('player')->user()->id;
            $meetCelebs->celebrity_id = $request->celebrity_id;
            $meetCelebs->payment_id = 1;
            $meetCelebs->save();
            return $this->sendResponse(null, 'Request added successfully.');
        } catch (\Exception $e) {
            return $this->sendError($e->getMessage(), 500);
        }
    }
}
