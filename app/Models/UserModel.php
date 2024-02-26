<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'id_user';
    protected $allowedFields = ['nama_user', 'username', 'password', 'tgl_lahir', 'alamat', 'nik', 'no_hp', 'email', 'id_role'];

    public function getUserWithRoles()
    {
        return $this->select('user.*, role.nama_role')
            ->join('role', 'role.id_role = user.id_role')
            ->findAll();
    }

    public function createUser($data)
    {
        return $this->insert($data);
    }

    public function updateUser($id, $data)
    {
        return $this->update($id, $data);
    }

    public function deleteUser($id)
    {
        return $this->delete($id);
    }
}