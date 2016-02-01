<?php

Route::get('paysera/callback', [
    'as' => 'artme.paysera.callback', 'uses' => 'artme\paysera\PayseraController@callback'
]);