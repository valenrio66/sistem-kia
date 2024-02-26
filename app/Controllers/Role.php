<?php

namespace App\Controllers;

use App\Models\RoleModel;

class Role extends BaseController
{
	public function getrole(): string
	{
		$roleModel = new RoleModel();
		$data['roles'] = $roleModel->findAll();

		return view('role', $data);
	}
}
