<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'id_user';
    protected $allowedFields = ['nama_user', 'username', 'password', 'tgl_lahir', 'alamat', 'nik', 'no_hp', 'email', 'id_role'];
}
