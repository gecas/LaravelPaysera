<?php

return [
    'projectid'     => '77240',
    'sign_password' => 'a5d6aeadedbecb97856e1339f1cb2477',
    'currency'      => 'EUR',
    'country'       => 'LT',
    'test'          => 1,
    //'ngronurl'     => 'http://28724102.ngrok.io',

    'statuses'      => [
        '0' => 'payment_declined',
        '1' => 'payment_approved',
        '2' => 'payment_pending'
    ],

    // route name
    'accepturl'     => 'main.home',
    'cancelurl'     => 'main.home',
    'callbackurl'   => 'main.home'
];