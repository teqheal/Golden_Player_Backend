<?php

namespace App\Http\Controllers\API;

use App\Celebrity;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Http\Resources\Celebrity as CelebrityResource;

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
}
