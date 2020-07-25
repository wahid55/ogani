<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'order_number', 'user_id', 'status', 'grand_total', 'item_count', 'is_paid', 'payment_method', 'shipping_fullname', 'shipping_address', 'shipping_city', 'shipping_state', 'shipping_zipcode', 'shipping_phone', 'notes', 'billing_fullname', 'billing_address', 'billing_city', 'billing_state', 'billing_zipcode', 'billing_phone'
    ];
}
