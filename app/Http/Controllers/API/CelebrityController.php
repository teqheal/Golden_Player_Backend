<?php

namespace App\Http\Controllers\API;

use App\Celebrity;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Http\Resources\Celebrity as CelebrityResource;

class CelebrityController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getCelebs()
    {
        $celebs = Celebrity::all();
        return $this->sendResponse(CelebrityResource::collection($celebs), 'Get celebrities successfully.');
    }
}
