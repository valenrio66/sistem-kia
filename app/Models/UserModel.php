<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'id_user';
    protected $allowedFields = ['nama_user', 'username', 'password', 'tgl_lahir', 'alamat', 'nik', 'no_hp', 'email', 'id_role'];

    // Untuk Get All
    public function getUserWithRoles()
    {
        return $this->select('user.*, role.nama_role')
            ->join('role', 'role.id_role = user.id_role')
            ->findAll();
    }

    // Untuk Create User
    public function createUser($data)
    {
        return $this->insert($data);
    }

    // Untuk Update Data
    public function updateUserModel($id, $data)
    {
        return $this->update($id, $data);
    }

    // Untuk Delete Data
    public function deleteUser($id)
    {
        return $this->delete($id);
    }

    // Untuk Get User by ID
    public function getUserById($id)
    {
        return $this->find($id);
    }
}
?>
