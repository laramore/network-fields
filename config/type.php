<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default text types
    |--------------------------------------------------------------------------
    |
    | This option defines the default text types used by fields.
    |
    */

    'configurations' => [
        'url' => [
            'native' => 'url',
            'factory_name' => 'char',
            'default_options' => [
                'visible', 'fillable', 'required',
            ],
        ],
    ],

];
