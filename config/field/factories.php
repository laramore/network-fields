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
        'formater' => 'ipv4',
    ],
    Ipv4::class => [
        'formater' => 'ipv4',
    ],
    Ipv6::class => [
        'formater' => 'ipv6',
    ],
    MacAddress::class => [
        'formater' => 'macAddress',
    ],
    Url::class => [
        'formater' => 'url',
    ],
    Http::class => [
        'formater' => 'url',
    ],
    Https::class => [
        'formater' => 'imageUrl', // Only formater with https:// .
    ],
    Ftp::class => [
        'formater' => 'ipv4',
    ],
    
];
