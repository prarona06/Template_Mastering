<?php

return [
    'guards' =>[
        'web'=>[
            'driver'=>'session',
            'provider'=>'users',
        ],
        'admin' =>[
            'driver'=>'session',
            'provider'=>'admins',
        ],
    ],




    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' =>env('AUTH_MODEL',App\Models\User::class),
        ],
          'admins' => [
            'driver' => 'eloquent',
            'model' =>env('AUTH_MODEL',App\Models\Admin::class),
        ],
    ],






];
