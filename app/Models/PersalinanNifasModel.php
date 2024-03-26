<?php

namespace App\Models;

use CodeIgniter\Model;

class PersalinanNifasModel extends Model
{
	protected $table = 'persalinan_nifas';
	protected $primaryKey = 'id_persalinan_nifas';
	protected $allowedFields = ['no_rm', 'nama_pasien', 'nama_suami', 'alamat', 'catat_buku_kia', 'tgl_jam_bersalin', 'penolong_persalinan', 'metode_persalinan', 'keadaan_ibu', 'status_komplikasi', 'jenis_kelamin_bayi', 'status_bayi', 'keadaan_bayi', 'stts_komplikasi_neonatus', 'kunjungan_nifas', 'vit_a_nifas', 'kunjungan_neonatus'];

	public function createPersalinanNifasModel($data)
	{
		return $this->insert($data);
	}

	public function updatePersalinanNifasModel($id, $data)
	{
		return $this->update($id, $data);
	}

	public function deletePersalinanNifasModel($id)
	{
		return $this->delete($id);
	}
}
