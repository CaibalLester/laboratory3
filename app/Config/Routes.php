<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/product', 'ProductController::CaibalLester');
$routes->get('/product/(:any)', 'ProductController::product/$1');
$routes->post('/save', 'ProductController::save');
$routes->get('/delete/(:any)', 'ProductController::delete/$1');
$routes->get('/edit/(:any)', 'ProductController::edit/$1');
$route['web_contact'] = "webproduct/webcontact";
