<?php

namespace App\Models;

use CodeIgniter\Model;

class KematianMaternalModel extends Model
{
	protected $table = 'kematian_maternal';
	protected $primaryKey = 'id_kematian_maternal';
	protected $allowedFields = ['no_rm', 'nama_pasien', 'nama_suami', 'alamat', 'catat_buku_kia', 'tanggal_kematian', 'jam_kematian', 'penyebab_kematian', 'masa_kematian'];
	
	public function createKematianMaternalModel($data)
	{
		return $this->insert($data);
	}

	public function updateKematianMaternalModel($id, $data)
	{
		return $this->update($id, $data);
	}

	public function deleteKematianMaternalModel($id)
	{
		return $this->delete($id);
	}
}
