<?php

return [
    'defaults' => ['guard' => 'user', 'passwords' => 'users'],

    'guards' => [
        'user'    => ['driver' => 'session', 'provider' => 'users'],
        'apiUser' => ['driver' => 'token', 'provider' => 'users', 'hash' => false],
    ],

    'providers' => [
        'users' => ['driver' => 'eloquent', 'model' => App\Models\User::class],
    ],

    'passwords' => [
        'users' => ['provider' => 'users', 'table' => 'password_user_resets', 'expire' => 60, 'throttle' => 60],
    ],

    'password_timeout' => 10800,
];
