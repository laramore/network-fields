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
            'length:maxLength', 'nullable', 'default',
        ],
    ],
    Ipv4::class => [
        'type' => 'char',
        'property_keys' => [
            'length:maxLength', 'nullable', 'default',
        ],
    ],
    Ipv6::class => [
        'type' => 'char',
        'property_keys' => [
            'length:maxLength', 'nullable', 'default',
        ],
    ],
    MacAddress::class => [
        'type' => 'char',
        'property_keys' => [
            'length:maxLength', 'nullable', 'default',
        ],
    ],
    Url::class => [
        'type' => 'char',
        'property_keys' => [
            'length:maxLength', 'nullable', 'default',
        ],
    ],
    Http::class => [
        'type' => 'char',
        'property_keys' => [
            'length:maxLength', 'nullable', 'default',
        ],
    ],
    Https::class => [
        'type' => 'char',
        'property_keys' => [
            'length:maxLength', 'nullable', 'default',
        ],
    ],
    Ftp::class => [
        'type' => 'char',
        'property_keys' => [
            'length:maxLength', 'nullable', 'default',
        ],
    ],
    
];
