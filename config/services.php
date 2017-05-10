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

    'recaptcha' => [
        
        'sitekey' => '6LdeYhoUAAAAAL6Bi1vVWyfw_HwpEhTmG9-OQ5b8',
        'secret' => env('STRIPE_SECRET'),
    ],


    'google' => [
    'client_id' => '740800395730-bdcr5pce89eketo31l5e9ncvstshhq39.apps.googleusercontent.com',
    'client_secret' => 'o3WuwfNMeTxs7Rn0NZxzx2ur',
    'redirect' => 'http://localhost:8000/auth/google/callback',
     ],

    'facebook' => [
    'client_id' => '1893831637562084',
    'client_secret' => 'ff90e9b28c4fb804d8062d38c24cd590',
    'redirect' => 'http://localhost:8000/auth/facebook/callback',
     ],
];
