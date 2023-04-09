<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Pages');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Pages::index');
$routes->get('/barang/edit (:segment)', 'Barang::edit/$1');
$routes->delete('/barang/ (:num)', 'Barang::delete/$1');
$routes->get('/barang/ (:any)', 'Barang::detail/$1');

$routes->get('/supplier/edit (:segment)', 'Supplier::edit/$1');
$routes->delete('/supplier/ (:num)', 'Supplier::delete/$1');
$routes->get('/supplier/ (:any)', 'Supplier::detail/$1');
// $routes->get('/Pages/about', 'Pages::about');
// $routes->get('/Pages/contact', 'Pages::contact');


$routes->get('/customer/edit (:segment)', 'Customer::edit/$1');
$routes->delete('/customer/ (:num)', 'Customer::delete/$1');
$routes->get('/customer/ (:any)', 'Customer::detail/$1');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
