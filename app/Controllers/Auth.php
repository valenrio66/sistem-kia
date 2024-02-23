<?php

namespace App\Controllers;

use App\Models\AuthModel;

class Auth extends BaseController
{
	public function register(): string
	{
		// Untuk menampilkan view form registrasi
		return view('register');
	}

	public function attemptRegister()
	{
		$authModel = new AuthModel();

		$data = [
			'nama_user' => $this->request->getVar('nama_user'),
			'username' => $this->request->getVar('username'),
			'password' => $this->request->getVar('password'),
			'tgl_lahir' => $this->request->getVar('tgl_lahir'),
			'alamat' => $this->request->getVar('alamat'),
			'nik' => $this->request->getVar('nik'),
			'no_hp' => $this->request->getVar('no_hp'),
			'email' => $this->request->getVar('email'),
			'id_role' => $this->request->getVar('id_role'),
		];

		if ($authModel->insert($data)) {
			return redirect()->to('login')->with('success', 'Registrasi berhasil. Silakan login.');
		} else {
			return redirect()->back()->withInput()->with('errors', $authModel->errors());
		}
	}

	public function login(): string
	{
		// Untuk menampilkan view form registrasi
		return view('login');
	}

	public function attemptLogin()
	{
		$session = session();
		$authModel = new AuthModel();
		$username = $this->request->getVar('username');
		$password = $this->request->getVar('password');

		$user = $authModel->where('username', $username)->first();

		if ($user) {
			$pass = $user['password'];
			$authenticatePassword = password_verify($password, $pass);
			if ($authenticatePassword) {
				$ses_data = [
					'user_id' => $user['id_user'],
					'user_name' => $user['username'],
					'logged_in' => TRUE
				];
				$session->set($ses_data);
				return redirect()->to('/dashboard');
			} else {
				$session->setFlashdata('msg', 'Password salah');
				return redirect()->to('/login');
			}
		} else {
			$session->setFlashdata('msg', 'Username tidak ditemukan');
			return redirect()->to('/login');
		}
	}

	public function logout()
	{
		session()->destroy();
		return redirect()->to('/login');
	}
}