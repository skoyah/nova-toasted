<?php

return [
    'options' => [
        /** Vue Toasted defaults */
        'type' => 'default',
        'className' => null,
        'fullWidth' => false,
        'singleton' => false,
        'keepOnHover' => false,
        'closeOnSwipe' => true,
        'fitToScreen' => false,
        'containerClass' => null,

        /** Laravel Nova defaults */
        'theme' => 'nova',
        'duration' => 6000,
        'position' => 'bottom-right',
    ],

    /** Custom toasted components */
    'toasts' => [
        [
            'name' => 'forbidden',
            'message' => 'Sorry! You are not authorized.',
            'options' => [
                'type' => 'error',
                'duration' => 3000,
            ],
        ],
    ],
];
