<?php

return [

    'driver' => env('MAIL_DRIVER', 'smtp'),

    'host' => env('MAIL_HOST', 'smtp.gmail.com'),

    'port' => env('MAIL_PORT', 587),

    'from' => [
        'address' => env('MAIL_FROM_ADDRESS', 'dkinslert@gmail.com'),
        'name' => env('MAIL_FROM_NAME', 'Rentyn Test Fron Mail Class'),
    ],
 
    'encryption' => env('MAIL_ENCRYPTION', 'tls'),

    'username' => env('dkinslert@gmail.com'),

    'password' => env('/#D1d4d9b9'),

    'sendmail' => 'C:\laragon\bin\sendmail -bs'

   /* 'markdown' => [
        'theme' => 'default',

        'paths' => [
            resource_path('views/vendor/mail'),
        ],
    ],*/

];
