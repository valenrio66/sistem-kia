<?php

namespace App\Controllers;

use App\Models\AuthModel;

class Home extends BaseController
{
	public function index(): string
	{
		// Pastikan pengguna sudah login
		if (!session()->get('logged_in')) {
			return redirect()->to('/login');
		}

		return view('index');
	}
}
