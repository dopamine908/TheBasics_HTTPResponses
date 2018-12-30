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

    public function redirectTarget($val = null) {
        dump($val);
        return view('form');
    }

    /**
     * redirect 各種基本用法
     * 
     * @return $this|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function return_redirect() {
        /**
         * redirect route
         */
        return redirect('form');

        /**
         * redirect 上一頁 把舊的input帶上
         */
        return back()->withInput();

        /**
         * redirect to name route
         */
        return redirect()->route('redirectTarget');

        /**
         * redirect to name route + 變數
         */
        return redirect()->route('redirectTarget', ['val' => 123]);

        /**
         * redirect to controller@function + 變數
         */
        return redirect()->action('ResponsesController@redirectTarget', ['val' => 123]);

        /**
         * return to route 附加 seesion
         */
        return redirect('form')->with('add_value', 'this is add_value');
    }
}
