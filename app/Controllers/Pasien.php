<?php 

namespace App\Controllers;

use App\Models\PasienModel;

class User extends BaseController
{
    // Function Create Antrian
    public function renderPageCreateAntrian() : string
    {
        return view('pasien/antrian_create');
    }

    public function createAntrian()
	{
		$pasienModel = new PasienModel();
		$data = $this->request->getPost();

		if ($pasienModel->createAntrian($data)) {
			return redirect()->to('/dashboard/pasien')->with('message', 'User berhasil ditambahkan');
		} else {
			return redirect()->back()->withInput()->with('errors', $pasienModel->errors());
		}
	}
}

?>