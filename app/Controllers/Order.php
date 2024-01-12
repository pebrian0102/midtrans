<?php

namespace App\Controllers;

use Midtrans\Snap;
use Midtrans\Config;

class Order extends BaseController
{
    function __construct()
    {
        $this->mOrder = model('Order');
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
        $data = [
            'order_id' => $order_id,
            'user_id' => user()->id,
            'barang' => $this->request->getVar('barang'),
            'nilai' => $this->request->getVar('nilai'),
            'jml' => $this->request->getVar('jml'),
            'inputby' => $this->time . ";" . user()->username,
        ];
        $this->mOrder->insert($data);
        session()->setFlashdata('success', 'Data Berhasil ditambahkan');
        return redirect()->to('/order/index');
    }
    public function pay($id)
    {
        $order = $this->mOrder->find($id);
        dd($order);
        session()->setFlashdata('success', 'Data Berhasil ditambahkan');
        return redirect()->to('/order/index');
    }
}
