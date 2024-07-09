<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
        'scheme' => 'https',
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
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

    'mastodon' => [
        'domain'        => env('MASTODON_DOMAIN'),
        'client_id'     => env('MASTODON_ID'),
        'client_secret' => env('MASTODON_SECRET'),
        'redirect'      => env('MASTODON_REDIRECT'),
        //'read', 'write', 'follow'
        'scope'         => ['read'],
    ],

];
