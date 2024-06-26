<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\RoleModel;

class User extends BaseController
{
	// Function for Get All Data
	public function getAllUser(): string
	{
		$userModel = new UserModel();
		$data['users'] = $userModel->findAll();

		return view('user/user_view', $data);
	}

	// Function for Create User
	public function renderPageCreateUser(): string
	{
		$roleModel = new RoleModel();
		$data['roles'] = $roleModel->findAll();
		return view('user/user_create', $data);
	}

	public function createUser()
	{
		$userModel = new UserModel();
		$data = $this->request->getPost();

		if ($userModel->createUser($data)) {
			return redirect()->to('/dashboard/user')->with('message', 'User berhasil ditambahkan');
		} else {
			return redirect()->back()->withInput()->with('errors', $userModel->errors());
		}
	}

	// Functin for Update Data
	public function renderPageUpdateUser($id): string
	{
		$userModel = new UserModel();
		$roleModel = new RoleModel();

		$data['user'] = $userModel->find($id);
		$data['roles'] = $roleModel->findAll();
		
		return view('user/user_update', $data);
	}

	public function updateUser($id)
	{
		$userModel = new UserModel();
		$data = $this->request->getPost();

		if ($userModel->updateUserModel($id, $data)) {
			return redirect()->to('/dashboard/user')->with('message', 'User berhasil diupdate');
		} else {
			return redirect()->back()->withInput()->with('errors', $userModel->errors());
		}
	}

	public function deleteUser($id)
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
