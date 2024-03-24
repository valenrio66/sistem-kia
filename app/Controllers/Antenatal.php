<?php

namespace App\Controllers;

use App\Models\AntenatalModel;
use Dompdf\Dompdf;
use Dompdf\Options;

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

	public function generatePDF()
	{
		$antenatalModel = new AntenatalModel();
		$data['antenatals'] = $antenatalModel->findAll();

		// Hitung jumlah total data
		$totalData = count($data['antenatals']);

		// Hitung jumlah data untuk setiap kategori "Hamil Baru" dan "Hamil Lama"
		$jumlahHamilBaru = 0;
		$jumlahHamilLama = 0;
		foreach ($data['antenatals'] as $ant) {
			if ($ant['stts_kunjungan_hamil'] == 'Hamil Baru') {
				$jumlahHamilBaru++;
			} elseif ($ant['stts_kunjungan_hamil'] == 'Hamil Lama') {
				$jumlahHamilLama++;
			}
		}

		// Mengirimkan data ke view
		$data['totalData'] = $totalData;
		$data['jumlahHamilBaru'] = $jumlahHamilBaru;
		$data['jumlahHamilLama'] = $jumlahHamilLama;

		// Load view content into a variable
		$html = view('antenatal/antenatal_pdf', $data);

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
		$dompdf->stream('Laporan Antenatal.pdf', ['Attachment' => false]);
	}
}
