<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => env('SES_REGION'),
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'google' => [
        'client_id' => '256563167024-d4dcpoa2k5a6tv5qg821abglpfq0up4a.apps.googleusercontent.com',
        'client_secret' => 'MLy-dVmIkUYmsbKoyuX90BnF',
        'redirect' => env('APP_URL').'/social/callback/google',
    ],

    'facebook' => [
        'client_id' => '651881328327888',
        'client_secret' => 'fb95c9b1ba41edb4320a3a59a6a1de6a',
        'redirect' => env('APP_URL').'/social/callback/facebook',
    ],

];
