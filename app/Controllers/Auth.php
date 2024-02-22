<?php

namespace App\Controllers;

class Auth extends BaseController
{
	public function register(): string
	{
		return view('register');
	}

	public function login(): string
	{
		return view('login');
	}
}
