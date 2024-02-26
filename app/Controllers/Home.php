<?php

namespace App\Controllers;

use App\Models\AuthModel;

class Home extends BaseController
{
	public function index(): string
	{
		return view('index');
	}
}
