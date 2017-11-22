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
        'region' => 'us-east-1',
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
        'client_id' => '1003526071106-te950m8onqqas7ugevb4jh55adt0hneu.apps.googleusercontent.com',
        'client_secret' => '8rHIEq3pOu3pNNyDQPlxjU5p',
        'redirect' => env('APP_URL').'/social/callback/google',
    ],

    'facebook' => [
        'client_id' => '1366672926789123',
        'client_secret' => 'dd42ae107d8502a58e2b0c4e3c45f270',
        'redirect' => env('APP_URL').'/social/callback/facebook',
    ],

];
