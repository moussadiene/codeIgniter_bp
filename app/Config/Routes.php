<?php namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

$routes->get('/', 'Home::index');

$routes->get('clients','ClientController::index');
$routes->get('clients/add','ClientController::ajoutClient');
$routes->post('clients', 'ClientController::save');
$routes->put('clients/(:cli)', 'ClientController::update');
$routes->delete('clients/(:cli)', 'ClientController::delete');

$routes->get('comptes','CompteController::index');
$routes->get('comptes/add','CompteController::ajoutCompte');
$routes->post('comptes', 'CompteController::save');
$routes->put('comptes/(:compte)', 'CompteController::update');
$routes->delete('comptes/(:compte)', 'CompteController::delete');
/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
  
 
 *You can supply multiple verbs that a route should match by passing them in as an array to the match method:
 *$routes->match(['get', 'put'], 'products', 'Product::feature');


 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
