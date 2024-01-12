<?php

namespace App\Models;

use CodeIgniter\Model;

class Role extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'auth_groups_permissions';
    protected $allowedFields    = ['group_id', 'permission_id'];
}
