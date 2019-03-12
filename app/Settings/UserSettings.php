<?php

namespace App\Settings;

use LaravelPropertyBag\Settings\ResourceConfig;

class UserSettings extends ResourceConfig
{
    /**
     * Registered settings for the user. Register settings by setting name. Each
     * setting must have an associative array set as its value that contains an
     * array of 'allowed' values and a single 'default' value.
     *
     * @var array
     */
    protected $registeredSettings = [

        'setupIsDone' => [
            'allowed' => ':bool:',
            'default' => false
        ],
        'setupStep' => [
            'allowed' => ':string:',
            'default' => ''
        ],
        'periodicity' => [
            'allowed' => [0, 1, 2],
            'default' => 1
        ],
        'mood_type_id' => [
            'allowed' => ':any:',
            'default' => ''
        ],
        'mood_traits' => [
            'allowed' => ':any:',
            'default' => ''
        ]


    ];
}
