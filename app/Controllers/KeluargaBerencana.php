<?php

namespace App\Controllers;

use App\Models\KeluargaBerencanaModel;
use Dompdf\Dompdf;
use Dompdf\Options;

class KeluargaBerencana extends BaseController
{
	// Function Get All Role
	public function getAllKeluargaBerencana(): string
	{
		$kbModel = new KeluargaBerencanaModel();
		$data['keluarga_berencana'] = $kbModel->findAll();

		return view('keluarga_berencana/keluarga_berencana_view', $data);
	}

	// Function Create Role
	public function renderPageCreateKeluargaBerencana()
	{
		return view('keluarga_berencana/keluarga_berencana_create');
	}

	public function createKeluargaBerencana()
	{
		$kbModel = new KeluargaBerencanaModel();
		$data = $this->request->getPost();

		if ($kbModel->createKeluargaBerencanaModel($data)) {
			return redirect()->to('/dashboard/keluarga_berencana')->with('message', 'Data Keluarga Berencana berhasil ditambahkan');
		} else {
			return redirect()->back()->withInput()->with('errors', $kbModel->errors());
		}
	}

	// Function Update Role
	public function renderPageUpdateKeluargaBerencana($id): string
	{
		$kbModel = new KeluargaBerencanaModel();
		$data['keluarga_berencana'] = $kbModel->find($id);

		return view('keluarga_berencana/keluarga_berencana_update', $data);
	}

	public function updateKeluargaBerencana($id)
	{
		$kbModel = new KeluargaBerencanaModel();
		$data = $this->request->getPost();

		if ($kbModel->updateKeluargaBerencanaModel($id, $data)) {
			return redirect()->to('/dashboard/keluarga_berencana')->with('message', 'Data Keluarga Berencana berhasil diupdate');
		} else {
			return redirect()->back()->withInput()->with('errors', $kbModel->errors());
		}
	}

	// Function Delete Role
	public function deleteKeluargaBerencana($id)
	{
		$kbModel = new KeluargaBerencanaModel();
		if ($kbModel->deleteKeluargaBerencanaModel($id)) {
			// Debugging message
			echo "Data Keluarga Berencana Berhasil Dihapus";
			return redirect()->to('/dashboard/keluarga_berencana')->with('message', 'Data Keluarga Berencana berhasil dihapus');
		} else {
			// Debugging message
			echo "Gagal Menghapus Data Keluarga Berencana";
			return redirect()->back()->with('message', 'Gagal menghapus data Keluarga Berencana');
		}
	}

	public function generatePDF()
	{
		$keluargaBerencanaModel = new KeluargaBerencanaModel();
		$data['keluarga_berencana'] = $keluargaBerencanaModel->findAll();

		// Load view content into a variable
		$html = view('keluarga_berencana/keluarga_berencana_pdf', $data);

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
		$dompdf->stream('Laporan Keluarga Berencana.pdf', ['Attachment' => false]);
	}
}
