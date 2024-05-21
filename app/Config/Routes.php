<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'C_login::login');
$routes->get('/login', 'C_login::login');

$routes->group('', ['filter' => 'loginfilter'], function ($routes) {
    $routes->get('/display', 'Home::display');
    $routes->get('/Test', 'TestController::index');
    $routes->get('/info', 'Home::info');
    $routes->get('/template', 'C_alattulis::template');
    $routes->get('/TugasB', 'C_mahasiswa::table1');
    $routes->get('/Mahasiswa', 'CMahasiswa::table');
    $routes->get('/Barang', 'C_alattulis::display');
    $routes->get('barang/delete/(:segment)', 'C_alattulis::delete/$1');
    $routes->get('barang/view/(:segment)', 'C_alattulis::view/$1');
    $routes->get('barang/edit/(:segment)', 'C_alattulis::edit/$1');
    $routes->post('/barang/update/(:segment)', 'C_alattulis::update/$1');
    $routes->get('/barang/create', 'C_alattulis::create');
    $routes->post('/barang/store', 'C_alattulis::store');
    $routes->get('validation', 'C_validation::index');
    $routes->post('validation/submit', 'C_validation::store');
    $routes->get('validation/success', 'C_success::submit');
    $routes->get('template', 'C_template::template');
});

$routes->post('/login', 'C_login::loginProcess');
$routes->get('/logout', 'C_login::logout');