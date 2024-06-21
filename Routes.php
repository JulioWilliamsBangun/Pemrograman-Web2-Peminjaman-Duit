<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');  
$routes->get('peminjaman', 'Peminjaman::index');
$routes->get('peminjaman/create', 'Peminjaman::create');
$routes->post('peminjaman/store', 'Peminjaman::store');
$routes->get('peminjaman/edit/(:num)', 'Peminjaman::edit/$1');
$routes->post('peminjaman/update/(:num)', 'Peminjaman::update/$1');
$routes->get('peminjaman/delete/(:num)', 'Peminjaman::delete/$1');
