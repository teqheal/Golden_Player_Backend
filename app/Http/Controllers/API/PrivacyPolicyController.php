<?php

namespace App\Http\Controllers\API;

use App\PrivacyPolicy;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Http\Resources\PrivacyPolicy as PrivacyPolicyResource;

class PrivacyPolicyController extends BaseController
{
    /**
     * Privacy Policy
     *
     * @return \Illuminate\Http\Response
     */
    public function privacypolicy()
    {
        try {
            $celebs = PrivacyPolicy::first();
            return $this->sendResponse(new PrivacyPolicyResource($celebs), 'Get privacy policy successfully.');
        } catch (\Exception $e) {
            return $this->sendError($e->getMessage(), 500);
        }
    }
}
