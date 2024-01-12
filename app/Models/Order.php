<?php

namespace App\Models;

use CodeIgniter\Model;

class Order extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'order';
    protected $primaryKey       = 'order_id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['order_id', 'user_id', 'barang', 'nilai', 'jml', 'inputby', 'sts'];
}
