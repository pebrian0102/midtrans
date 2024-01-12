<?php

function db()
{
    return \Config\Database::connect();
}
function cek_ceklis($group_id, $user_id)
{
    $result = db()->table('auth_groups_users')->where('group_id', $group_id)->where('user_id', $user_id)->get()->getRow();
    if ($result) {
        return 1;
    }
    return 0;
}
function username($user_id)
{
    $result = db()->table('users')->where('id', $user_id)->get()->getRow();
    if ($result) {
        return $result->username;
    }
    return 'null';
}
function get_role($user_id)
{
    $result = db()->table('auth_groups_users u')
        ->join('auth_groups_permissions s', 's.group_id=u.group_id')
        ->join('auth_permissions p', 'p.id=s.permission_id')
        ->where('user_id', $user_id)
        ->get()->getResult();
    $role = '';
    if ($result) {
        foreach ($result as $r) {
            $role .=  $r->name . ",";
        }
        return $role;
    }
    return 'null';
}
