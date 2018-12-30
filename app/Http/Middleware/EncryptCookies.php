<?php

namespace App\Http\Middleware;

use Illuminate\Cookie\Middleware\EncryptCookies as Middleware;

class EncryptCookies extends Middleware
{
    /**
     * The names of the cookies that should not be encrypted.
     * 被列出名稱的 Cookie，都不會被加密。
     * 
     * @var array
     */
    protected $except = [
        'name'
    ];
}
