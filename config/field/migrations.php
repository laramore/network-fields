<?php

namespace Laramore\Fields;


return [

    /*
    |--------------------------------------------------------------------------
    | Default text fields
    |--------------------------------------------------------------------------
    |
    | This option defines the default text fields.
    |
    */

    Ip::class => [
        'type' => 'char',
        'property_keys' => [
            'length', 'nullable', 'default',
        ],
    ],
    Ipv4::class => [
        'type' => 'char',
        'property_keys' => [
            'length', 'nullable', 'default',
        ],
    ],
    Ipv6::class => [
        'type' => 'char',
        'property_keys' => [
            'length', 'nullable', 'default',
        ],
    ],
    MacAddress::class => [
        'type' => 'char',
        'property_keys' => [
            'length', 'nullable', 'default',
        ],
    ],
    Url::class => [
        'type' => 'char',
        'property_keys' => [
            'length', 'nullable', 'default',
        ],
    ],
    Http::class => [
        'type' => 'char',
        'property_keys' => [
            'length', 'nullable', 'default',
        ],
    ],
    Https::class => [
        'type' => 'char',
        'property_keys' => [
            'length', 'nullable', 'default',
        ],
    ],
    Ftp::class => [
        'type' => 'char',
        'property_keys' => [
            'length', 'nullable', 'default',
        ],
    ],

];
