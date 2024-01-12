<?php

namespace App\Models;

use CodeIgniter\Model;

class Perm extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'auth_permissions';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['name'];
}
