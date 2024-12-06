<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */
    protected $except = [
        '/request/searchbylocation',
        '/request/listroom',
        '/request/hotelinfo',
        '/request/roominfo',
        '/request/booking',
        '/request/updatepayment',
        '/post/booking',
    ];
}
