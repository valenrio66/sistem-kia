<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\RoleModel;

class User extends BaseController
{
	public function getuser(): string
	{
		$userModel = new UserModel();
		$data['users'] = $userModel->getUserWithRoles();

		return view('user/user', $data);
	}

	public function adduser(): string
	{
		$roleModel = new RoleModel();
		$data['roles'] = $roleModel->findAll();
		return view('user/adduser', $data);
	}

	public function create()
	{
		$userModel = new UserModel();
		$data = $this->request->getPost();

		if ($userModel->createUser($data)) {
			return redirect()->to('/dashboard/user')->with('message', 'User berhasil ditambahkan');
		} else {
			return redirect()->back()->withInput()->with('errors', $userModel->errors());
		}
	}

	public function updateuser($id): string
	{
		$userModel = new UserModel();
		$roleModel = new RoleModel();

		$data['user'] = $userModel->find($id);
		$data['roles'] = $roleModel->findAll();

		return view('user/updateuser', $data);
	}

	public function update($id)
	{
		$userModel = new UserModel();
		$data = $this->request->getPost();

		if ($userModel->updateUser($id, $data)) {
			return redirect()->to('/dashboard/user')->with('message', 'User berhasil diupdate');
		} else {
			return redirect()->back()->withInput()->with('errors', $userModel->errors());
		}
	}

	public function delete($id)
	{
		$userModel = new UserModel();
		if ($userModel->deleteUser($id)) {
			// Debugging message
			echo "User deleted successfully";
			return redirect()->to('/dashboard/user')->with('message', 'User berhasil dihapus');
		} else {
			// Debugging message
			echo "Failed to delete user";
			return redirect()->back()->with('message', 'Gagal menghapus user');
		}
	}
}
