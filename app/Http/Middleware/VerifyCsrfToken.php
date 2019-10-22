<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as BaseVerifier;

class VerifyCsrfToken extends BaseVerifier
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        '/pricing/*',
        '/calculate-shipping',
        '/schedule-pickup/asana-tracking',
        '/country-specific',
        '/shipping/payment/*',
        '/shopper/payment/*',
        '/shopper/self/order/payment/*',
        '/locker/generate/payment/*',
        'locker/generate/shopper/payment/axis/*',
        '/direct/payment/axis/*',
        '/login/*',
        'mailchimp/subscribe',
        '/admin/schedule-pickup/asana-tracking',
        'admin/reviews/delete',
        '/customer/login/submit',
        '/member/axis/response',
        '/member/paytm/response',
        '/schedule-pickup/submit',
        '/seller',
        '/mailtrain/subscribe',
        '/customer/register',
        '/customer-search',
    ];
}
