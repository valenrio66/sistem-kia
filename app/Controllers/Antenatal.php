<?php

namespace App\Controllers;

use App\Models\AntenatalModel;

class Antenatal extends BaseController
{
	// Function Get All Role
	public function getAllAntenatal(): string
	{
		$antenatalModel = new AntenatalModel();
		$data['antenatals'] = $antenatalModel->findAll();

		return view('antenatal/antenatal_view', $data);
	}

	// Function Create Role
	public function renderPageCreateAntenatal()
	{
		return view('antenatal/antenatal_create');
	}

	public function createAntenatal()
	{
		$antenatalModel = new AntenatalModel();
		$data = $this->request->getPost();

		if ($antenatalModel->createAntenatalModel($data)) {
			return redirect()->to('/dashboard/antenatal')->with('message', 'Data Antenatal berhasil ditambahkan');
		} else {
			return redirect()->back()->withInput()->with('errors', $antenatalModel->errors());
		}
	}

	// Function Update Role
	public function renderPageUpdateAntenatal($id): string
	{
		$antenatalModel = new AntenatalModel();
		$data['antenatals'] = $antenatalModel->find($id);

		return view('antenatal/antenatal_update', $data);
	}

	public function updateAntenatal($id)
	{
		$antenatalModel = new AntenatalModel();
		$data = $this->request->getPost();

		if ($antenatalModel->updateAntenatalModel($id, $data)) {
			return redirect()->to('/dashboard/antenatal')->with('message', 'Data Antenatal berhasil diupdate');
		} else {
			return redirect()->back()->withInput()->with('errors', $antenatalModel->errors());
		}
	}

	// Function Delete Role
	public function deleteAntenatal($id)
	{
		$antenatalModel = new AntenatalModel();
		if ($antenatalModel->deleteAntenatalModel($id)) {
			// Debugging message
			echo "Data Antenatal Berhasil Dihapus";
			return redirect()->to('/dashboard/antenatal')->with('message', 'Data Antenatal berhasil dihapus');
		} else {
			// Debugging message
			echo "Gagal Menghapus Data Antenatal";
			return redirect()->back()->with('message', 'Gagal menghapus data antenatal');
		}
	}
}
