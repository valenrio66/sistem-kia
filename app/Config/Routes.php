<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Auth::login');
$routes->get('/dashboard', 'Home::index', ['filter' => 'auth']);
$routes->get('/dashboard/user', 'User::getuser', ['filter' => 'auth']);
$routes->get('/dashboard/user/add', 'User::adduser', ['filter' => 'auth']);
$routes->post('user/create', 'User::create', ['filter' => 'auth']);
$routes->get('/dashboard/user/update/(:segment)', 'User::updateuser/$1', ['filter' => 'auth']);
$routes->post('user/update/(:segment)', 'User::update/$1', ['filter' => 'auth']);
$routes->get('/user/delete/(:num)', 'User::delete/$1', ['filter' => 'auth']);
$routes->get('/dashboard/role', 'Role::getrole', ['filter' => 'auth']);
$routes->get('/register', 'Auth::register');
$routes->post('auth/attemptRegister', 'Auth::attemptRegister');
$routes->get('/login', 'Auth::login');
$routes->post('auth/attemptLogin', 'Auth::attemptLogin');
$routes->get('auth/logout', 'Auth::logout');