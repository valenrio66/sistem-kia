<?php

namespace App\Controllers;

use App\Models\PersalinanNifasModel;
use Dompdf\Dompdf;
use Dompdf\Options;

class PersalinanNifas extends BaseController
{
	// Function Get All Role
	public function getAllPersalinanNifas(): string
	{
		$persalinanNifasModel = new PersalinanNifasModel();
		$data['persalinannifas'] = $persalinanNifasModel->findAll();

		return view('persalinannifas/persalinannifas_view', $data);
	}

	// Function Create Role
	public function renderPageCreatePersalinanNifas()
	{
		return view('persalinannifas/persalinannifas_create');
	}

	public function createPersalinanNifas()
	{
		$persalinanNifasModel = new PersalinanNifasModel();
		$data = $this->request->getPost();

		if ($persalinanNifasModel->createPersalinanNifasModel($data)) {
			return redirect()->to('/dashboard/persalinannifas')->with('message', 'Data Persalinan dan Nifas berhasil ditambahkan');
		} else {
			return redirect()->back()->withInput()->with('errors', $persalinanNifasModel->errors());
		}
	}

	// Function Update Role
	public function renderPageUpdatePersalinanNifas($id): string
	{
		$persalinanNifasModel = new PersalinanNifasModel();
		$data['persalinannifas'] = $persalinanNifasModel->find($id);

		return view('persalinannifas/persalinannifas_update', $data);
	}

	public function updatePersalinanNifas($id)
	{
		$persalinanNifasModel = new PersalinanNifasModel();
		$data = $this->request->getPost();

		if ($persalinanNifasModel->updatePersalinanNifasModel($id, $data)) {
			return redirect()->to('/dashboard/persalinannifas')->with('message', 'Data Persalinan dan Nifas berhasil diupdate');
		} else {
			return redirect()->back()->withInput()->with('errors', $persalinanNifasModel->errors());
		}
	}

	// Function Delete Role
	public function deletePersalinanNifas($id)
	{
		$persalinanNifasModel = new PersalinanNifasModel();
		if ($persalinanNifasModel->deletePersalinanNifasModel($id)) {
			// Debugging message
			echo "Data Persalinan dan Nifas Berhasil Dihapus";
			return redirect()->to('/dashboard/persalinannifas')->with('message', 'Data Persalinan dan Nifas berhasil dihapus');
		} else {
			// Debugging message
			echo "Gagal Menghapus Data Persalinan dan Nifas";
			return redirect()->back()->with('message', 'Gagal menghapus data Persalinan dan Nifas');
		}
	}

	public function generatePDF()
	{
		$persalinanNifasModel = new PersalinanNifasModel();
		$data['persalinannifas'] = $persalinanNifasModel->findAll();

		// Hitung jumlah total data
		$totalData = count($data['persalinannifas']);

		$jumlahNormal = 0;
		$jumlahSc = 0;
		$jumlahLainLain = 0;
		foreach ($data['persalinannifas'] as $pn) {
			if ($pn['metode_persalinan'] == 'Normal') {
				$jumlahNormal++;
			} elseif ($pn['metode_persalinan'] == 'Sc') {
				$jumlahSc++;
			} elseif ($pn['metode_persalinan'] == 'Lain - Lain') {
				$jumlahLainLain++;
			}
		}

		// Mengirimkan data ke view
		$data['totalData'] = $totalData;
		$data['jumlahNormal'] = $jumlahNormal;
		$data['jumlahSc'] = $jumlahSc;
		$data['jumlahLainLain'] = $jumlahLainLain;

		// Load view content into a variable
		$html = view('persalinannifas/persalinannifas_pdf', $data);

		// Instantiate Dompdf with options
		$options = new Options();
		$options->set('isHtml5ParserEnabled', true);
		$options->set('isPhpEnabled', true);
		$dompdf = new Dompdf($options);

		// Load HTML content
		$dompdf->loadHtml($html);

		// Set paper size and orientation
		$dompdf->setPaper('A4', 'portrait');

		// Render the HTML as PDF
		$dompdf->render();

		// Output the generated PDF (inline or download)
		$dompdf->stream('Laporan Persalinan dan Nifas.pdf', ['Attachment' => false]);
	}
}
