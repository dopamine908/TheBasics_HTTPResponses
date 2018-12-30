<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResponsesController extends Controller
{
    /**
     * return response 基本範例
     * @return $this
     */
    public function return_response() {
        return response('Hello', 200)
            ->header('Content-Type', 'text/plain');
    }

    /**
     * return response 附加一個header上去
     *
     * @return $this
     */
    public function addResponseHeader() {
        return response('Hello')->header('Content-Type', 'text/plain');

        //附加多個
//        return response($content)
//            ->header('Content-Type', $type)
//            ->header('X-Header-One', 'Header Value')
//            ->header('X-Header-Two', 'Header Value');
    }

    /**
     * return response 設定header
     *
     * @return $this
     */
    public function setResponseHeader() {
        return response('Hello')->withHeaders([
            'Content-Type' => 'text/plain'
        ]);

        //設定header
//        return response($content)
//            ->withHeaders([
//                'Content-Type' => $type,
//                'X-Header-One' => 'Header Value',
//                'X-Header-Two' => 'Header Value',
//            ]);
    }

    /**
     * return response 附加cookie
     *
     * @return $this
     */
    public function setResponseCookie() {
        return response('Hello')->cookie('name', 'value');
    }
}
