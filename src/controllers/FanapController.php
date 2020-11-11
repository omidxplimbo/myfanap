<?php

namespace Dev\Fanap\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class FanapController extends Controller
{
    /**
     * show custom posts lists
     */
    public function lists()
    {
        $result = Http::withHeaders(
            [
                '_token_' => config('myfanap.api_token'),
                '_token_issuer_' => config('myfanap.token_issuer')
            ]
        )->get(config('myfanap.base_url') . 'nzh/customPostList/', [
            'businessId' => config('myfanap.business_id'),
            'offset' => 10,
            'size' => 5
        ]);
        dd(json_decode($result->body()));
    }
}
