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
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
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
// $routes->get('/', 'Home::Index');
//$routes->get('/', 'Home::index');

$routes->get('/login', 'GedungCont::login');

$routes->get('/signUp', 'GedungCont::signup');
$routes->get('/home', 'GedungCont::home');
$routes->get('/admin', 'GedungCont::admin');
$routes->get('/pilihGedung', 'GedungCont::pilihGedung');
$routes->get('/booking', 'GedungCont::bookingPage');
$routes->get('/tambah gedung', 'GedungCont::addGedung');
$routes->get('/teskat', 'GedungCont::tes');
$routes->get('/admin/(:num)','GedungCont::detail/$1');
$routes->get('/admin/edit/(:num)','GedungCont::edit/$1');
$routes->delete('/admin/(:num)','GedungCont::delete/$1');
$routes->post('/admin/update/(:num)','GedungCont::update/$1');
$routes->post('/admin/updatestatus/(:num)','GedungCont::updateStatus/$1');
$routes->post('admin/save', 'GedungCont::save');
$routes->post('pemesanan/save', 'GedungCont::saveBooking');
$routes->get('/pemesananAdmin', 'GedungCont::pesanan');
$routes->get('/pemesanan/(:num)','GedungCont::detailBooking/$1');
$routes->get('/detailBooking', 'GedungCont::indetailbooking');

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
