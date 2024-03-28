<?php

namespace App\Models;

use CodeIgniter\Model;

class KematianBayiModel extends Model
{
	protected $table = 'kematian_bayi';
	protected $primaryKey = 'id_kematian_bayi';
	protected $allowedFields = ['no_rm', 'nama_pasien', 'umur', 'jenis_kelamin', 'tgl_lahir', 'nama_ibu', 'nama_ayah', 'alamat', 'catat_buku_kia', 'tanggal_jam_kematian', 'penyebab_kematian'];

	public function createKematianBayiModel($data)
	{
		return $this->insert($data);
	}

	public function updateKematianBayiModel($id, $data)
	{
		return $this->update($id, $data);
	}

	public function deleteKematianBayiModel($id)
	{
		return $this->delete($id);
	}
}
