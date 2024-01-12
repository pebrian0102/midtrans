<?php

namespace App\Controllers;

use Midtrans\Snap;
use Midtrans\Config;

class Home extends BaseController
{
    public function index(): string
    {
        return view('home/index');
    }
}
