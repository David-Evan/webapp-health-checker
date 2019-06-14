<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validator - Rules / Messages
    |--------------------------------------------------------------------------
    |
    | This config file provide all validations rules. It could be extended to add
    | more complex rules or diffrents validation scenarios for specific process
    |
    | You can also configure your return messages
    */

    // Rules - messages  for Heartbeat Receptor
    'heartbeat-receptor' => [

        'rules' => [

            'default' => [
                'name' => 'required|max:128',
                'alertTo' => 'sometimes|required|email',
                'warningAfter' => 'nullable|int',
            ]
        ],
    ],

];
