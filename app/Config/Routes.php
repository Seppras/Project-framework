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

$routes->get('/', function () {
    header('Location: /login');
    die();
});

$routes->get('/login', 'Login::index');
$routes->post('/login', 'Login::login');

$routes->add('login', 'Login::index'); // Ganti AuthController::login dengan controller dan method yang sesuai
$routes->add('dashboard', 'Login::dashboard'); // Ganti DashboardController::index dengan controller dan method yang sesuai


$routes->get('/user/dashboard', 'User::dashboard');
$routes->get('/user/pengajuan_proker', 'User::pengajuan_proker');

$routes->get('/admin/dashboard', 'Admin::dashboard');
$routes->get('/admin/usulan_proker', 'Admin::usulan_proker');

$routes->get('/validator/dashboard', 'Validator::dashboard');
$routes->get('/validator/evaluasi_proker', 'Validator::evaluasi_proker');

// $route->get('/proker', 'Proker::proker');
// $route->post('/proker', 'Proker::proker');

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
