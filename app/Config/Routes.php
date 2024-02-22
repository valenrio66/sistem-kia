<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/dashboard', 'Home::index');
$routes->get('/register', 'Auth::register');
$routes->get('/login', 'Auth::login');
