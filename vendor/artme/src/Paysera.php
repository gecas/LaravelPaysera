<?php

namespace Artme\Paysera;

use App\Order;
use Illuminate\Support\Facades\Config;
use WebToPay;

class Paysera {
    public static function getRequiredFields(){
        return [];
    }

    public static function makePayment($data){
        try {
            Order::findOrFail($data['order_id'])->setStatus(Config::get('paysera.statuses.2'));

            $payment_data = [
                'projectid'     => Config::get('paysera.projectid'),
                'sign_password' => Config::get('paysera.sign_password'),
                'currency'      => Config::get('paysera.currency'),
                'country'       => Config::get('paysera.country'),
                'test'          => Config::get('paysera.test'),

                'orderid'       => $data['order_id'],
                'amount'        => intval($data['amount']*100),
                'accepturl'     => route('order.show', [$data['order_id']]),
                'cancelurl'     => route('order.show', [$data['order_id']]),
                'callbackurl'   => route('artme.paysera.callback', [])
            ];
            
            $request = WebToPay::redirectToPayment($payment_data, true);
        } catch (WebToPayException $e) {
            // handle exception
        }
    }
}