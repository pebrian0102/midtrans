<?php

namespace App\Controllers;

use Midtrans\Snap;
use Midtrans\Config;

class Midtrans extends BaseController
{
    public function token()
    {
        Config::$serverKey = 'SB-Mid-server-3xppdifbR3ZLUsxoVqyhE6s_';
        Config::$clientKey = 'SB-Mid-client-EzwfzLeQ7HTc85LB';
        Config::$isSanitized = true;
        Config::$is3ds = true;
        // Required
        $transaction_details = array(
            'order_id' => "bayar-15k",
            'gross_amount' => 15000, // no decimal allowed for creditcard
        );
        // Optional
        $item1_details = array(
            'id' => 'a1',
            'price' => 5000,
            'quantity' => 2,
            'name' => "Apple"
        );
        $item2_details = array(
            'id' => 'a2',
            'price' => 5000,
            'quantity' => 1,
            'name' => "Banana"
        );
        // Optional
        $item_details = array($item1_details, $item2_details);
        // Optional
        $billing_address = array(
            'first_name'    => "Andri",
            'last_name'     => "Litani",
            'address'       => "Mangga 20",
            'city'          => "Jakarta",
            'postal_code'   => "16602",
            'phone'         => "081122334455",
            'country_code'  => 'IDN'
        );

        // Optional
        $shipping_address = array(
            'first_name'    => "Obet",
            'last_name'     => "Supriadi",
            'address'       => "Manggis 90",
            'city'          => "Jakarta",
            'postal_code'   => "16601",
            'phone'         => "08113366345",
            'country_code'  => 'IDN'
        );

        // Optional
        $customer_details = array(
            'first_name'    => "Andri",
            'last_name'     => "Litani",
            'email'         => "andri@litani.com",
            'phone'         => "081122334455",
            'billing_address'  => $billing_address,
            'shipping_address' => $shipping_address
        );
        // Optional, remove this to display all available payment methods
        $enable_payments = array('credit_card', 'cimb_clicks', 'mandiri_clickpay', 'echannel');
        // Fill transaction details
        $transaction = array(
            // 'enabled_payments' => $enable_payments,
            'transaction_details' => $transaction_details,
            'customer_details' => $customer_details,
            'item_details' => $item_details,
        );
        $snap_token = '';
        try {
            $snap_token = Snap::getSnapToken($transaction);
        } catch (\Exception $e) {
            echo $e->getMessage();
        }

        echo $snap_token;
    }
    public function bayar2()
    {
        return redirect()->to('/');
    }
}
