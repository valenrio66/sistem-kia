<?php

namespace App\Models;

use CodeIgniter\Model;

class RoleModel extends Model
{
    protected $table = 'role';
    protected $primaryKey = 'id_role';
    protected $allowedFields = ['nama_role'];

    public function createRoleModel($data)
    {
        return $this->insert($data);
    }

    public function updateRoleModel($id, $data)
    {
        return $this->update($id, $data);
    }

    public function deleteRoleModel($id)
    {
        return $this->delete($id);
    }
}
