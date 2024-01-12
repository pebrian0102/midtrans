<?php

namespace App\Models;

use CodeIgniter\Model;

class Group extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'auth_groups';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['name'];
}
