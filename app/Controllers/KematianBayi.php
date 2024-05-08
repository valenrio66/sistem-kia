<?php

namespace App\Controllers;

use App\Models\KematianBayiModel;
use Dompdf\Dompdf;
use Dompdf\Options;

class KematianBayi extends BaseController
{
	// Function Get All Role
	public function getAllKematianBayi(): string
	{
		$bayiModel = new KematianBayiModel();
		$data['kematian_bayi'] = $bayiModel->findAll();

		return view('kematian_bayi/kematian_bayi_view', $data);
	}

	// Function Create Role
	public function renderPageCreateKematianBayi()
	{
		return view('kematian_bayi/kematian_bayi_create');
	}

	public function createKematianBayi()
	{
		$bayiModel = new KematianBayiModel();
		$data = $this->request->getPost();

		if ($bayiModel->createKematianBayiModel($data)) {
			return redirect()->to('/dashboard/kematian_bayi')->with('message', 'Data Kematian Bayi berhasil ditambahkan');
		} else {
			return redirect()->back()->withInput()->with('errors', $bayiModel->errors());
		}
	}

	// Function Update Role
	public function renderPageUpdateKematianBayi($id): string
	{
		$bayiModel = new KematianBayiModel();
		$data['kematian_bayi'] = $bayiModel->find($id);

		return view('kematian_bayi/kematian_bayi_update', $data);
	}

	public function updateKematianBayi($id)
	{
		$bayiModel = new KematianBayiModel();
		$data = $this->request->getPost();

		if ($bayiModel->updateKematianBayiModel($id, $data)) {
			return redirect()->to('/dashboard/kematian_bayi')->with('message', 'Data Kematian Bayi berhasil diupdate');
		} else {
			return redirect()->back()->withInput()->with('errors', $bayiModel->errors());
		}
	}

	// Function Delete Role
	public function deleteKematianBayi($id)
	{
		$kbModel = new KematianBayiModel();
		if ($kbModel->deleteKematianBayiModel($id)) {
			// Debugging message
			echo "Data Kematian Bayi Berhasil Dihapus";
			return redirect()->to('/dashboard/kematian_bayi')->with('message', 'Data Kematian Bayi berhasil dihapus');
		} else {
			// Debugging message
			echo "Gagal Menghapus Data Kematian Bayi";
			return redirect()->back()->with('message', 'Gagal menghapus data Kematian Bayi');
		}
	}

	public function generatePDF()
	{
		$kematianBayiModel = new KematianBayiModel();
		$data['kematian_bayi'] = $kematianBayiModel->findAll();

		// Load view content into a variable
		$html = view('kematian_bayi/kematian_bayi_pdf', $data);

		// Instantiate Dompdf with options
		$options = new Options();
		$options->set('isHtml5ParserEnabled', true);
		$options->set('isPhpEnabled', true);
		$dompdf = new Dompdf($options);

		// Load HTML content
		$dompdf->loadHtml($html);

		// Set paper size and orientation
		$dompdf->setPaper('A4', 'landscape');

		// Render the HTML as PDF
		$dompdf->render();

		// Output the generated PDF (inline or download)
		$dompdf->stream('Laporan Kematian Neonatal.pdf', ['Attachment' => false]);
	}
}
