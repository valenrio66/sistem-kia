<?php

namespace App\Controllers;

use App\Models\UserModel;

class User extends BaseController
{
	public function getuser(): string
	{
		$userModel = new UserModel();
		$data['users'] = $userModel->findAll();

		return view('user', $data);
	}
}
