<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// --- RUTE PUBLIC (Bisa diakses tanpa login) ---
$routes->get('login', 'AuthController::login');
$routes->post('login', 'AuthController::login');
$routes->get('logout', 'AuthController::logout');


// --- RUTE PROTECTED (Wajib login - Menggunakan Filter 'auth') ---
$routes->group('', ['filter' => 'auth'], function($routes) {
    $routes->get('/', 'Home::index');
    $routes->get('produk', 'ProdukController::index');
    $routes->get('keranjang', 'TransaksiController::index');
    $routes->get('profile', 'ProfileController::index');  // ← TAMBAH INI
});