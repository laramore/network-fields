<?php

namespace Laramore\Fields;

use Illuminate\Support\Facades\Schema;


return [

    /*
    |--------------------------------------------------------------------------
    | Default text fields
    |--------------------------------------------------------------------------
    |
    | This option defines the default text fields.
    |
    */

    'configurations' => [
        Ipv4::class => [
            'type' => 'ipv4',
            'max_length' => 15,
            'pattern' => '/^(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/',
        ],
        Ipv6::class => [
            'type' => 'ipv6',
            'max_length' => 45, // https://stackoverflow.com/a/7477384/13550768 .
            'pattern' => '/^(((?=(?>.*?(::))(?!.+\3)))\3?|([\dA-F]{1,4}(\3|:(?!$)|$)|\2))(?4){5}((?4){2}|((2[0-4]|1\d|[1-9])?\d|25[0-5])(\.(?7)){3})\z/i',
        ],
        MacAddress::class => [
            'type' => 'mac_address',
            'max_length' => 17,
            'pattern' => '/^([a-fA-F0-9]{2}:){5}[a-fA-F0-9]{2}$/',
        ],
        Url::class => [
            'type' => 'url',
            'max_length' => Schema::getFacadeRoot()::$defaultStringLength,
            'secured' => true,
            'proxy' => [
                'configurations' => [
                    'fix' => [],
                ],
            ],
            'patterns' => [
                'identifier' => '/^\S+$/',
                'protocol' => '/^https?:\/\/$/',
                'secured_protocol' => '/^https:\/\/$/',
                'uri' => '/^https?:\/\/\S+$/',
                'secured_uri' => '/^https:\/\/\S+$/',
                'flags' => null,
            ]
        ],
        Http::class => [
            'type' => 'url',
            'max_length' => Schema::getFacadeRoot()::$defaultStringLength,
            'allowed_protocols' => [
                'http://',
            ],
            'proxy' => [
                'configurations' => [
                    'fix' => [],
                ],
            ],
            'patterns' => [
                'identifier' => '/^\S+$/',
                'protocol' => '/^http:\/\/$/',
                'uri' => '/^http:\/\/\S+$/',
                'flags' => null,
            ]
        ],
        Https::class => [
            'type' => 'url',
            'max_length' => Schema::getFacadeRoot()::$defaultStringLength,
            'allowed_protocols' => [
                'https://',
            ],
            'proxy' => [
                'configurations' => [
                    'fix' => [],
                ],
            ],
            'patterns' => [
                'identifier' => '/^\S+$/',
                'protocol' => '/^https:\/\/$/',
                'uri' => '/^https:\/\/\S+$/',
                'flags' => null,
            ]
        ],
        Ftp::class => [
            'type' => 'ftp',
            'max_length' => Schema::getFacadeRoot()::$defaultStringLength,
            'secured' => false,
            'proxy' => [
                'configurations' => [
                    'fix' => [],
                ],
            ],
            'patterns' => [
                'identifier' => '/^([a-z0-9]+:[a-z0-9]+@)?([\.a-z0-9]+)/([\./a-z0-9]+)$/',
                'protocol' => '/^ftp:\/\/$/',
                'uri' => '/^ftp:\/\/([a-z0-9]+:[a-z0-9]+@)?([\.a-z0-9]+)/([\./a-z0-9]+)$/',
                'flags' => null,
            ]
        ],
    ],
    
];
