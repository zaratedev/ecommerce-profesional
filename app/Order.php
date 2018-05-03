<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public static function createFromPayPalResponse($paypalResponse, $shopping_cart)
    {
      $payer = $paypalResponse->payer;

      $orderData = (array) $payer->payer_info->shipping_address;

      return Order::create($orderData);
    }
}
