<?php

namespace App\Controllers;

use App\Models\RoleModel;

class Role extends BaseController
{
	// Function Get All Role
	public function getAllRole(): string
	{
		$roleModel = new RoleModel();
		$data['roles'] = $roleModel->findAll();

		return view('user/user_role_view', $data);
	}

	// Function Create Role
	public function renderPageCreateRole()
	{
		return view('user/user_role_create');
	}

	public function createRole()
	{
		$roleMode = new RoleModel();
		$data = $this->request->getPost();

		if ($roleMode->createRoleModel($data)) {
			return redirect()->to('/dashboard/role')->with('message', 'User berhasil ditambahkan');
		} else {
			return redirect()->back()->withInput()->with('errors', $roleMode->errors());
		}
	}

	// Function Update Role
	public function renderPageUpdateRole($id): string
	{
		$roleModel = new RoleModel();
		$data['roles'] = $roleModel->find($id);
		
		return view('user/user_role_update', $data);
	}

	public function updateRole($id)
	{
		$roleModel = new RoleModel();
		$data = $this->request->getPost();

		if ($roleModel->updateRoleModel($id, $data)) {
			return redirect()->to('/dashboard/role')->with('message', 'Role berhasil diupdate');
		} else {
			return redirect()->back()->withInput()->with('errors', $roleModel->errors());
		}
	}

	// Function Delete Role
	public function deleteRole($id)
	{
		$roleModel = new RoleModel();
		if ($roleModel->deleteRoleModel($id)) {
			// Debugging message
			echo "User deleted successfully";
			return redirect()->to('/dashboard/role')->with('message', 'Role berhasil dihapus');
		} else {
			// Debugging message
			echo "Failed to delete user";
			return redirect()->back()->with('message', 'Gagal menghapus role');
		}
	}
}
