<?php

return [
    'projectid'     => '',
    'sign_password' => '',
    'currency'      => 'EUR',
    'country'       => 'LT',
    'test'          => 0,
    'ngronurl'     => 'http://28724102.ngrok.io',

    'statuses'      => [
        '0' => 'payment_declined',
        '1' => 'payment_approved',
        '2' => 'payment_pending'
    ],

    // route name
    'accepturl'     => 'front.main.home',
    'cancelurl'     => 'front.main.home',
    'callbackurl'   => 'front.main.home'
];