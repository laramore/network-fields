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

    Ip::class => [
        'options' => [
            'visible', 'fillable', 'required',
        ],
        'max_length' => 45, // https://stackoverflow.com/a/7477384/13550768 .
        'patterns' => [
            'ip' => '/^((?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)|(((?=(?>.*?(::))(?!.+\3)))\3?|([\dA-F]{1,4}(\3|:(?!$)|$)|\2))(?4){5}((?4){2}|((2[0-4]|1\d|[1-9])?\d|25[0-5])(\.(?7)){3})\z)$/i',
            'flags' => null,
        ],
        'proxy' => [
            'configurations' => [
                'dry' => [
                    'static' => true,
                    'allow_multi' => false,
                ],
                'hydrate' => [
                    'static' => true,
                    'allow_multi' => false,
                ],
                'resize' => [],
            ],
        ],
    ],
    Ipv4::class => [
        'options' => [
            'visible', 'fillable', 'required',
        ],
        'max_length' => 15,
        'patterns' => [
            'ip' => '/^(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/',
            'flags' => null,
        ],
        'proxy' => [
            'configurations' => [
                'dry' => [
                    'static' => true,
                    'allow_multi' => false,
                ],
                'hydrate' => [
                    'static' => true,
                    'allow_multi' => false,
                ],
                'resize' => [],
            ],
        ],
    ],
    Ipv6::class => [
        'options' => [
            'visible', 'fillable', 'required',
        ],
        'max_length' => 45, // https://stackoverflow.com/a/7477384/13550768 .
        'patterns' => [
            'ip' => '/^(((?=(?>.*?(::))(?!.+\3)))\3?|([\dA-F]{1,4}(\3|:(?!$)|$)|\2))(?4){5}((?4){2}|((2[0-4]|1\d|[1-9])?\d|25[0-5])(\.(?7)){3})\z/i',
            'flags' => null,
        ],
        'proxy' => [
            'configurations' => [
                'dry' => [
                    'static' => true,
                    'allow_multi' => false,
                ],
                'hydrate' => [
                    'static' => true,
                    'allow_multi' => false,
                ],
                'resize' => [],
            ],
        ],
    ],
    MacAddress::class => [
        'options' => [
            'visible', 'fillable', 'required',
        ],
        'max_length' => 17,
        'patterns' => [
            'address' => '/^([a-fA-F0-9]{2}:){5}[a-fA-F0-9]{2}$/',
            'flags' => null,
        ],
        'proxy' => [
            'configurations' => [
                'dry' => [
                    'static' => true,
                    'allow_multi' => false,
                ],
                'hydrate' => [
                    'static' => true,
                    'allow_multi' => false,
                ],
                'resize' => [],
            ],
        ],
    ],
    Url::class => [
        'options' => [
            'visible', 'fillable', 'required',
        ],
        'max_length' => Schema::getFacadeRoot()::$defaultStringLength,
        'secured' => true,
        'proxy' => [
            'configurations' => [
                'dry' => [
                    'static' => true,
                    'allow_multi' => false,
                ],
                'hydrate' => [
                    'static' => true,
                    'allow_multi' => false,
                ],
                'resize' => [],
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
        ],
    ],
    Http::class => [
        'options' => [
            'visible', 'fillable', 'required',
        ],
        'max_length' => Schema::getFacadeRoot()::$defaultStringLength,
        'allowed_protocols' => [
            'http://',
        ],
        'proxy' => [
            'configurations' => [
                'dry' => [
                    'static' => true,
                    'allow_multi' => false,
                ],
                'hydrate' => [
                    'static' => true,
                    'allow_multi' => false,
                ],
                'resize' => [],
                'fix' => [],
            ],
        ],
        'patterns' => [
            'identifier' => '/^\S+$/',
            'protocol' => '/^http:\/\/$/',
            'uri' => '/^http:\/\/\S+$/',
            'flags' => null,
        ],
    ],
    Https::class => [
        'options' => [
            'visible', 'fillable', 'required',
        ],
        'max_length' => Schema::getFacadeRoot()::$defaultStringLength,
        'proxy' => [
            'configurations' => [
                'dry' => [
                    'static' => true,
                    'allow_multi' => false,
                ],
                'hydrate' => [
                    'static' => true,
                    'allow_multi' => false,
                ],
                'resize' => [],
                'fix' => [],
            ],
        ],
        'patterns' => [
            'identifier' => '/^\S+$/',
            'protocol' => '/^https:\/\/$/',
            'uri' => '/^https:\/\/\S+$/',
            'flags' => null,
        ],
        'allowed_protocols' => [
            'https://',
        ],
    ],
    Ftp::class => [
        'options' => [
            'visible', 'fillable', 'required',
        ],
        'max_length' => Schema::getFacadeRoot()::$defaultStringLength,
        'secured' => false,
        'proxy' => [
            'configurations' => [
                'dry' => [
                    'static' => true,
                    'allow_multi' => false,
                ],
                'hydrate' => [
                    'static' => true,
                    'allow_multi' => false,
                ],
                'resize' => [],
                'fix' => [],
            ],
        ],
        'patterns' => [
            'identifier' => '/^([a-z0-9]+:[a-z0-9]+@)?([\.a-z0-9]+)/([\./a-z0-9]+)$/',
            'protocol' => '/^ftp:\/\/$/',
            'uri' => '/^ftp:\/\/([a-z0-9]+:[a-z0-9]+@)?([\.a-z0-9]+)/([\./a-z0-9]+)$/',
            'flags' => null,
        ],
    ],
    
];
