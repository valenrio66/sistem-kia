<?php

namespace App\Models;

use CodeIgniter\Model;

class KeluargaBerencanaModel extends Model
{
	protected $table = 'keluarga_berencana';
	protected $primaryKey = 'id_kb';
	protected $allowedFields = ['no_rm', 'nama_pasien', 'nama_suami', 'alamat', 'catat_buku_kia', 'tgl_kunjungan', 'jumlah_anak', 'status', 'metode'];
	
	public function createKeluargaBerencanaModel($data)
	{
		return $this->insert($data);
	}

	public function updateKeluargaBerencanaModel($id, $data)
	{
		return $this->update($id, $data);
	}

	public function deleteKematianMaternalModel($id)
	{
		return $this->delete($id);
	}
}
