<?php

namespace App\Controllers;

class Master extends BaseController
{
    function __construct()
    {
        $this->mUser = model('User2');
        $this->mGroup = model('Group');
        $this->mPerm = model('Perm');
        $this->mRole = model('Role');
    }

    /**
     * user
     *
     * @return string
     */
    function user(): string
    {
        $result = $this->mUser->findAll();
        $data = [
            'result' => $result
        ];
        return view('master/user', $data);
    }
    function user_update()
    {
        $id = $this->request->getVar('id');
        $username = $this->request->getVar('username');
        $email = $this->request->getVar('email');
        $rules = [
            'username' => 'required|alpha_numeric_space|min_length[3]|max_length[30]',
            'email'    => 'required|valid_email',
        ];
        $data = [
            'email' => $email,
            'username' => $username,
            'updated_at' => $this->time,
        ];

        if (!$this->validate($rules)) {
            session()->setFlashdata('failed', 'Edit User Failed!');
            return redirect()->to('master/user');
        }

        $result = $this->mUser->find($id);
        if ($result) {
            $this->mUser->update($id, $data);
        }
        session()->setFlashdata('success', 'Edit User Success!');
        return redirect()->to('master/user');
    }
    public function user_delete()
    {
        $id = $this->request->getVar('id');
        $this->mUser->delete($id);
        session()->setFlashdata('success', 'Berhasil Dihapus!');
        return redirect()->to('master/user');
    }
    public function change_pass()
    {
        $id = $this->request->getVar('id');
        $password = $this->request->getVar('pass');
        $users = model('UserModel');
        $user = $users->where('id', $id)
            ->first();

        $user->password         = $password;
        $user->reset_at         = date('Y-m-d H:i:s');
        $users->save($user);
        session()->setFlashdata('success', 'Edit Password Success!');
        return redirect()->to('master/user');
    }
    public function active_user($id)
    {
        $data = [
            'active' => 1,
            'updated_at' => $this->time
        ];
        $this->mUser->update($id, $data);
        session()->setFlashdata('success', 'Berhasil!');
        return redirect()->to('master/user');
    }
    public function nonactive_user($id)
    {
        $data = [
            'active' => 0,
            'updated_at' => $this->time
        ];
        $this->mUser->update($id, $data);
        session()->setFlashdata('success', 'Berhasil!');
        return redirect()->to('master/user');
    }
    public function user_role($user_id)
    {
        $result = $this->mPerm->findAll();
        $data = [
            'result' => $result,
            'user_id' => $user_id
        ];
        return view('master/user_role', $data);
    }
    public function user_role_update()
    {
        $group_id = $this->request->getVar('group_id');
        $user_id = $this->request->getVar('user_id');
        $result = db()->table('auth_groups_users')->where('group_id', $group_id)->where('user_id', $user_id)->get()->getRow();
        if ($result) {
            db()->table('auth_groups_users')->where('group_id', $group_id)->where('user_id', $user_id)->delete();
        } else {
            db()->table('auth_groups_users')->insert(['group_id' => $group_id, 'user_id' => $user_id]);
        }
        return json_encode(0);
    }

    /**
     * role
     *
     * @return string
     */
    function role(): string
    {
        $group = $this->mGroup->findAll();
        $perm = $this->mPerm->findAll();
        $result = db()->table('auth_groups_permissions r')
            ->select('g.name as nmgroup,p.name as nmperm,g.id as idgroup,p.id as idperm')
            ->join('auth_groups g', 'g.id=r.group_id')
            ->join('auth_permissions p', 'p.id=r.permission_id')
            ->get()->getResultArray();
        $data = [
            'group' => $group,
            'perm' => $perm,
            'result' => $result
        ];
        return view('master/role', $data);
    }
    function group_store()
    {
        $name = $this->request->getVar('name');
        $data = [
            'name' => $name
        ];
        $this->mGroup->insert($data);

        session()->setFlashdata('success', 'Berhasil!');
        return redirect()->to('master/role');
    }
    function group_update()
    {
        $name = $this->request->getVar('name');
        $id = $this->request->getVar('id');
        if ($this->mGroup->find($id)) {
            $data = [
                'name' => $name
            ];
            $this->mGroup->update($id, $data);
            session()->setFlashdata('success', 'Berhasil!');
            return redirect()->to('master/role');
        }
        session()->setFlashdata('failed', 'Gagal!');
        return redirect()->to('master/role');
    }
    function group_delete()
    {
        $id = $this->request->getVar('id');
        if ($this->mGroup->find($id)) {
            $this->mGroup->delete($id);
            session()->setFlashdata('success', 'Berhasil!');
            return redirect()->to('master/role');
        }
        session()->setFlashdata('failed', 'Gagal!');
        return redirect()->to('master/role');
    }
    function perm_store()
    {
        $name = $this->request->getVar('name');
        $data = [
            'name' => $name
        ];
        $this->mPerm->insert($data);

        session()->setFlashdata('success', 'Berhasil!');
        return redirect()->to('master/role');
    }
    function perm_update()
    {
        $name = $this->request->getVar('name');
        $id = $this->request->getVar('id');
        if ($this->mPerm->find($id)) {
            $data = [
                'name' => $name
            ];
            $this->mPerm->update($id, $data);
            session()->setFlashdata('success', 'Berhasil!');
            return redirect()->to('master/role');
        }
        session()->setFlashdata('failed', 'Gagal!');
        return redirect()->to('master/role');
    }
    function perm_delete()
    {
        $id = $this->request->getVar('id');
        if ($this->mPerm->find($id)) {
            $this->mPerm->delete($id);
            session()->setFlashdata('success', 'Berhasil!');
            return redirect()->to('master/role');
        }
        session()->setFlashdata('failed', 'Gagal!');
        return redirect()->to('master/role');
    }
    function role_store()
    {
        $group = $this->request->getVar('group');
        $perm = $this->request->getVar('perm');
        $find = $this->mRole->where(['group_id' => $group, 'permission_id' => $perm])->findAll();
        if ($find) {
            session()->setFlashdata('failed', 'Gagal!');
            return redirect()->to('master/role');
        }
        $data = [
            'group_id' => $group,
            'permission_id' => $perm
        ];
        $this->mRole->insert($data);
        session()->setFlashdata('success', 'Berhasil ditambahkan!');
        return redirect()->to('master/role');
    }
    function role_update()
    {
        $group = $this->request->getVar('group');
        $perm = $this->request->getVar('perm');
        $oldgroup = $this->request->getVar('oldgroup');
        $oldperm = $this->request->getVar('oldperm');
        $find = $this->mRole->where(['group_id' => $group, 'permission_id' => $perm])->findAll();
        if ($find) {
            session()->setFlashdata('failed', 'Gagal!');
            return redirect()->to('master/role');
        }
        $data = [
            'group_id' => $group,
            'permission_id' => $perm
        ];
        $this->mRole->where(['group_id' => $oldgroup, 'permission_id' => $oldperm])->set($data)->update();
        session()->setFlashdata('success', 'Berhasil diupdate!');
        return redirect()->to('master/role');
    }
    function role_delete()
    {
        $group = $this->request->getVar('group');
        $perm = $this->request->getVar('perm');
        $find = $this->mRole->where(['group_id' => $group, 'permission_id' => $perm])->findAll();
        if ($find) {
            $this->mRole->where(['group_id' => $group, 'permission_id' => $perm])->delete();
            session()->setFlashdata('success', 'Berhasil dihapus!');
            return redirect()->to('master/role');
        }
        session()->setFlashdata('failed', 'Gagal!');
        return redirect()->to('master/role');
    }
}
