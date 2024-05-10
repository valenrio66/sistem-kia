<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'id_user';
    protected $allowedFields = ['nama_user', 'username', 'password', 'tgl_lahir', 'alamat', 'nik', 'no_hp', 'email'];

    // Untuk Create User
    public function createUser($data)
    {
		$data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
        return $this->insert($data);
    }

    // Untuk Update Data
    public function updateUserModel($id, $data)
    {
		$data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
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
