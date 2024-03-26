<?php

namespace App\Models;

use CodeIgniter\Model;

class AntenatalModel extends Model
{
	protected $table = 'antenatal';
	protected $primaryKey = 'id_antenatal';
	protected $allowedFields = ['no_rm', 'nama_pasien', 'nama_suami', 'alamat', 'tgl_kunjungan', 'stts_kunjungan_hamil', 'stts_kunjungan_kehamilan', 'pemberian_ttd', 'stts_ibu_hamil', 'catat_buku_kia'];

	public function createAntenatalModel($data)
	{
		return $this->insert($data);
	}

	public function updateAntenatalModel($id, $data)
	{
		return $this->update($id, $data);
	}

	public function deleteAntenatalModel($id)
	{
		return $this->delete($id);
	}
}
