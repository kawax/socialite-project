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
        'key'    => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model'  => App\User::class,
        'key'    => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'chatwork' => [
        'client_id'     => env('CHATWORK_CLIENT_ID'),
        'client_secret' => env('CHATWORK_CLIENT_SECRET'),
        'redirect'      => env('CHATWORK_REDIRECT'),
    ],

    'amazon' => [
        'client_id'     => env('AMAZON_LOGIN_ID'),
        'client_secret' => env('AMAZON_LOGIN_SECRET'),
        'redirect'      => env('AMAZON_LOGIN_REDIRECT'),
    ],

    'qiita' => [
        'client_id'     => env('QIITA_CLIENT_ID'),
        'client_secret' => env('QIITA_CLIENT_SECRET'),
        'redirect'      => env('QIITA_REDIRECT'),
    ],

    'discord' => [
        'client_id'     => env('DISCORD_CLIENT_ID'),
        'client_secret' => env('DISCORD_CLIENT_SECRET'),
        'redirect'      => env('DISCORD_REDIRECT'),
    ],

    'wordpress' => [
        // Endpoint for WordPress.com
        'host'   => env('WORDPRESS_HOST', 'https://public-api.wordpress.com/oauth2'),
        'api_me' => env('WORDPRESS_API_ME', 'https://public-api.wordpress.com/rest/v1.1/me'),

        // Endpoint for Self-hosted WordPress
        //        'host'   => env('WORDPRESS_HOST'),
        //        'api_me' => env('WORDPRESS_API_ME', env('WORDPRESS_HOST') . '/me/'),

        'client_id'     => env('WORDPRESS_CLIENT_ID'),
        'client_secret' => env('WORDPRESS_CLIENT_SECRET'),
        'redirect'      => env('WORDPRESS_REDIRECT'),
    ],
];
