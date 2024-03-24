<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// Routes For Authentification
$routes->get('/', 'Auth::login');
$routes->get('/dashboard', 'Home::index', ['filter' => 'auth']);
$routes->get('/register', 'Auth::register');
$routes->post('auth/attemptRegister', 'Auth::attemptRegister');
$routes->get('/login', 'Auth::login');
$routes->post('auth/attemptLogin', 'Auth::attemptLogin');
$routes->get('auth/logout', 'Auth::logout');

// Routes User
$routes->get('/dashboard/user', 'User::getAllUser', ['filter' => 'auth']);
$routes->get('/dashboard/user/detail/(:segment)', 'User::getUserById/$1', ['filter' => 'auth']);
$routes->get('/dashboard/user/add', 'User::renderPageCreateUser', ['filter' => 'auth']);
$routes->post('/user/create', 'User::createUser', ['filter' => 'auth']);
$routes->get('/dashboard/user/update/(:segment)', 'User::renderPageUpdateUser/$1', ['filter' => 'auth']);
$routes->post('user/update/(:segment)', 'User::updateUser/$1', ['filter' => 'auth']);
$routes->get('/user/delete/(:num)', 'User::deleteUser/$1', ['filter' => 'auth']);

// Routes Role
$routes->get('/dashboard/role', 'Role::getAllRole', ['filter' => 'auth']);
$routes->get('/dashboard/role/add', 'Role::renderPageCreateRole', ['filter' => 'auth']);
$routes->post('/role/create', 'Role::createRole', ['filter' => 'auth']);
$routes->get('/role/delete/(:num)', 'Role::deleteRole/$1', ['filter' => 'auth']);
$routes->get('/dashboard/role/update/(:segment)', 'Role::renderPageUpdateRole/$1', ['filter' => 'auth']);
$routes->post('/role/update/(:segment)', 'Role::updateRole/$1', ['filter' => 'auth']);

// Routes Antenatal
$routes->get('/dashboard/antenatal', 'Antenatal::getAllAntenatal', ['filter' => 'auth']);
$routes->get('/dashboard/antenatal/add', 'Antenatal::renderPageCreateAntenatal', ['filter' => 'auth']);
$routes->post('/antenatal/create', 'Antenatal::createAntenatal', ['filter' => 'auth']);
$routes->get('/antenatal/delete/(:num)', 'Antenatal::deleteAntenatal/$1', ['filter' => 'auth']);
$routes->get('/dashboard/antenatal/update/(:segment)', 'Antenatal::renderPageUpdateAntenatal/$1', ['filter' => 'auth']);
$routes->post('/antenatal/update/(:segment)', 'Antenatal::updateAntenatal/$1', ['filter' => 'auth']);
$routes->get('/dashboard/antenatal/export', 'Antenatal::generatePDF', ['filter' => 'auth']);

// Routes Pasien
$routes->get('/dashboard/pasien/antrian_create', 'Pasien::renderPageCreateAntrian', ['filter' => 'auth']);
