<?php

namespace App\Controllers;

use Midtrans\Snap;
use Midtrans\Config;

class Midtrans extends BaseController
{
    function __construct()
    {
        Config::$serverKey = 'SB-Mid-server-3xppdifbR3ZLUsxoVqyhE6s_';
        Config::$clientKey = 'SB-Mid-client-EzwfzLeQ7HTc85LB';
        Config::$isSanitized = true;
        Config::$is3ds = true;
    }

    public function token()
    {
        $order_id = $this->request->getVar('order_id');
        $barang = $this->request->getVar('barang');
        $nilai = intval($this->request->getVar('nilai'));
        $jml = intval($this->request->getVar('jml'));
        $total = intval($nilai * $jml);
        $user = db()->table('order')
            ->select('username,email')
            ->join('users', 'users.id=order.user_id')
            ->where('order_id', $order_id)->get()->getRow();

        // Required
        $transaction_details = array(
            'order_id' => $order_id,
            'gross_amount' => $total, // no decimal allowed for creditcard
        );
        // Optional
        $item1_details = array(
            'id' => 'a1',
            'price' => $nilai,
            'quantity' => $jml,
            'name' => $barang
        );
        // Optional
        // $item_details = array($item1_details, $item2_details);
        $item_details = array($item1_details);
        // Optional
        $billing_address = array(
            'first_name'    => $user->username,
            'last_name'     => "",
            'address'       => "",
            'city'          => "Jakarta",
            'postal_code'   => "",
            'phone'         => "0088008800",
            'country_code'  => 'IDN'
        );

        // Optional
        // $shipping_address = array(
        //     'first_name'    => "Obet",
        //     'last_name'     => "Supriadi",
        //     'address'       => "Manggis 90",
        //     'city'          => "Jakarta",
        //     'postal_code'   => "16601",
        //     'phone'         => "08113366345",
        //     'country_code'  => 'IDN'
        // );

        // Optional
        $customer_details = array(
            'first_name'    => $user->username,
            'last_name'     => "",
            'email'         => $user->email,
            'phone'         => "0800800800",
            'billing_address'  => $billing_address,
            // 'shipping_address' => $shipping_address
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
    public function get_status()
    {
        $order_id = $this->request->getVar('order_id');
        try {
            $status = \Midtrans\Transaction::status($order_id);
            return json_encode($status);
        } catch (\Exception $e) {
            return json_encode($e->getMessage());
        }
    }
}
