<?php

namespace Artme\Paysera;

use App\Order;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Artme\Paysera\Paysera;
use Illuminate\Support\Facades\Config;

class PayseraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function callback(Request $request)
    {
        parse_str(base64_decode(strtr($request->get('data'), array('-' => '+', '_' => '/'))), $params);

        $order = Order::findOrFail($params['orderid']);
        $order->setStatus(Config::get('paysera.statuses.'.$params['status']));

        return 'OK';
    }

   
}
