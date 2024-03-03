<?php 

namespace App\Models;

use CodeIgniter\Model;

class PasienModel extends Model
{
    protected $table = 'antrian';
    protected $primaryKey = 'id_antrian';
    protected $allowedFields = ['tanggal', 'id_user'];

    // Untuk Get All
    public function getAllAntrian()
    {
        return $this->select('antrian.*, user.nama_user')
            ->join('user', 'user.id_user = antrian.id_user')
            ->findAll();
    }

    // Untuk Create Antrian
    public function createAntrian($data)
    {
        return $this->insert($data);
    }
}
?>