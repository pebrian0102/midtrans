<?php

namespace App\Controllers;

use Midtrans\Snap;
use Midtrans\Config;

class Order extends BaseController
{
    function __construct()
    {
        $this->mOrder = model('Order');
        Config::$serverKey = 'SB-Mid-server-3xppdifbR3ZLUsxoVqyhE6s_';
        Config::$clientKey = 'SB-Mid-client-EzwfzLeQ7HTc85LB';
        Config::$isSanitized = true;
        Config::$is3ds = true;
    }

    public function index(): string
    {
        $data = [
            'result' => $this->mOrder->findAll()
        ];
        return view('order/index', $data);
    }
    public function add(): string
    {
        return view('order/add');
    }
    public function store()
    {
        $order_id = user()->id . time();
        $barang = $this->request->getVar('barang');
        $nilai = intval($this->request->getVar('nilai'));
        $jml = intval($this->request->getVar('jml'));
        $data = [
            'order_id' => $order_id,
            'user_id' => user()->id,
            'barang' => $barang,
            'nilai' => $nilai,
            'jml' => $jml,
            'inputby' => $this->time . ";" . user()->username,
        ];
        $this->mOrder->insert($data);
        session()->setFlashdata('success', 'Data Berhasil ditambahkan');
        return redirect()->to('/order/index');
    }
    public function pay($id)
    {
        $order = $this->mOrder->find($id);
        if ($order) {
            $data = [
                'order' => $order,
            ];
            return view('order/pay', $data);
        }
        session()->setFlashdata('failed', 'Data Tidak ditemukan');
        return redirect()->to('/order/index');
    }
    public function finish()
    {
        $order_id = $this->request->getVar('order_id');
        $type = $this->request->getVar('type');
        $data = $this->request->getVar('data');
        $order = db()->table('order')->where('order_id', $order_id)->get()->getRow();
        if ($order) {
            if ($type == 'success') {
                $sts = 1;
            } else if ($type == 'pending') {
                $sts = 2;
            } else {
                $sts = 0;
            }
            db()->table('order')->where('order_id', $order_id)->update(['sts' =>  $sts]);
        }
        session()->setFlashdata('success', 'Data Berhasil diupdate');
        return redirect()->to('/order/index');
    }
}
