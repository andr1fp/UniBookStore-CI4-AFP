<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Book::index');
$routes->get('/admin', 'Book::admin');
$routes->get('/pengadaan', 'Book::pengadaan');
$routes->get('/pengadaan/print', 'Book::printPengadaan'); 

$routes->get('admin/updateBook/(:segment)', 'Book::update/$1');
$routes->get('admin/deleteBook/(:segment)', 'Book::deleteBook/$1');

$routes->match(['get', 'post'], 'search', 'Book::search');

$routes->group('admin', ['namespace' => 'App\Controllers'], function ($routes) {
    $routes->get('addBook', 'Book::add');
    $routes->post('addBook', 'Book::addBook');
    $routes->post('updateBook/(:segment)', 'Book::updateBook/$1');

});


