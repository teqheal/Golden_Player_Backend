<?php

namespace App\Http\Controllers\API;

use App\Faq;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Http\Resources\Faq as FaqResource;

class FaqController extends BaseController
{
    /**
     * Faq
     *
     * @return \Illuminate\Http\Response
     */
    public function faq()
    {
        try {
            $faqs = Faq::all();
            return $this->sendResponse(FaqResource::collection($faqs), 'Get faqs successfully.');
        } catch (\Exception $e) {
            return $this->sendError($e->getMessage(), 500);
        }
    }
}
