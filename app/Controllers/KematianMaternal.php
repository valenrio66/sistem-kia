<?php

namespace App\Controllers;

use App\Models\KematianMaternalModel;
use Dompdf\Dompdf;
use Dompdf\Options;

class KematianMaternal extends BaseController
{
	// Function Get All Role
	public function getAllKematianMaternal(): string
	{
		$kematianMaternalModel = new KematianMaternalModel();
		$data['kematian_maternals'] = $kematianMaternalModel->findAll();

		return view('kematian_maternal/kematian_maternal_view', $data);
	}

	// Function Create Role
	public function renderPageCreateKematianMaternal()
	{
		return view('kematian_maternal/kematian_maternal_create');
	}

	public function createKematianMaternal()
	{
		$kematianMaternalModel = new KematianMaternalModel();
		$data = $this->request->getPost();

		if ($kematianMaternalModel->createKematianMaternalModel($data)) {
			return redirect()->to('/dashboard/kematian_maternal')->with('message', 'Data Kematian Maternal berhasil ditambahkan');
		} else {
			return redirect()->back()->withInput()->with('errors', $kematianMaternalModel->errors());
		}
	}

	// Function Update Role
	public function renderPageUpdateKematianMaternal($id): string
	{
		$kematianMaternalModel = new KematianMaternalModel();
		$data['kematian_maternals'] = $kematianMaternalModel->find($id);

		return view('kematian_maternal/kematian_maternal_update', $data);
	}

	public function updateKematianMaternal($id)
	{
		$kematianMaternalModel = new KematianMaternalModel();
		$data = $this->request->getPost();

		if ($kematianMaternalModel->updateKematianMaternalModel($id, $data)) {
			return redirect()->to('/dashboard/kematian_maternal')->with('message', 'Data Kematian Maternal berhasil diupdate');
		} else {
			return redirect()->back()->withInput()->with('errors', $kematianMaternalModel->errors());
		}
	}

	// Function Delete Role
	public function deleteKematianMaternal($id)
	{
		$kematianMaternalModel = new KematianMaternalModel();
		if ($kematianMaternalModel->deleteKematianMaternalModel($id)) {
			// Debugging message
			echo "Data Kematian Maternal Berhasil Dihapus";
			return redirect()->to('/dashboard/kematian_maternal')->with('message', 'Data Kematian Maternal berhasil dihapus');
		} else {
			// Debugging message
			echo "Gagal Menghapus Data Kematian Maternal";
			return redirect()->back()->with('message', 'Gagal menghapus data Kematian Maternal');
		}
	}

	public function generatePDF()
	{
		$kematianMaternalModel = new KematianMaternalModel();
		$data['kematian_maternals'] = $kematianMaternalModel->findAll();

		// Load view content into a variable
		$html = view('kematian_maternal/kematian_maternal_pdf', $data);

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
		$dompdf->stream('Laporan Kematian Maternal.pdf', ['Attachment' => false]);
	}
}
