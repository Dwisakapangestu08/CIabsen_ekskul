<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Login::index');
$routes->get('/signup', 'Login::signup');
$routes->get('/absen_web', 'Absen::index');
$routes->get('/absen_web/(:num)', 'Absen::update/$1');
$routes->get('/absen_web/insert', 'Absen::insert');
$routes->post('/absen_web/insert/save', 'Absen::save');
