<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

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
//$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

// home page
$routes->get('/', 'Home::index');
$routes->get('/home/detail/(:num)', 'Home::detail/$1');

$routes->get('/logout', 'Auth::logout');

$routes->get('/login', 'Auth::index');
$routes->post('/submit-login', 'Auth::submit_login');
$routes->get('/submit-login', 'Auth::submit_login');
$routes->get('/register', 'Auth::register');
$routes->post('/submit-register', 'Auth::submit_register');
$routes->get('/submit-register', 'Auth::submit_register');
$routes->get('/otp', 'Auth::otp');
$routes->post('/submit-otp', 'Auth::submit_otp');
$routes->get('/data-otp', 'Auth::data_otp');
$routes->post('/submit-data-user', 'Auth::submit_data_user');

$routes->get('/edit-profile', 'Profile::edit_profile');
$routes->post('/submit-edit-profile', 'Profile::submit_edit_profile');

$routes->get('/lupa-password', 'Auth::lupa_password');
$routes->post('/submit-lupa-password', 'Auth::submit_lupa_password');
$routes->get('/buat-password-baru', 'Auth::buat_password_baru');
$routes->post('/submit-password-baru', 'Auth::submit_password_baru');

$routes->get('/profile', 'Profile::index');
$routes->get('/edit-password', 'Profile::edit_password');
$routes->post('/submit-edit-password', 'Profile::submit_edit_password');

$routes->get('index-layanan', 'admin::index');
$routes->get('tambah-sub-layanan/(:num)', 'admin::tambah_sub_layanan/$1');
$routes->get('input-sub-layanan/(:num)', 'admin::input_sub_layanan/$1');
$routes->post('submit-input-sub-layanan', 'admin::submit_input_sublayanan');

$routes->get('/layanan-kami', 'LayananKami::index');
$routes->get('/kontak-kami', 'KontakKami::index');
$routes->get('/pesan', 'Pesan::index');
$routes->get('/pesan/detail/(:num)', 'Pesan::detail/$1');

$routes->get('/pasang-iklan', 'Iklan::index');
$routes->get('/pasang-iklan/detail/(:any)/(:num)/(:any)/(:num)', 'Iklan::detail/$1/$2/$3/$4');

$routes->post('/iklan/save', 'Iklan::save');
$routes->post('/iklan/savemtr', 'Iklan::savemtr');
$routes->post('/iklan/saveKostkontrakan', 'Iklan::saveKostkontrakan');
$routes->post('/iklan/saveTenagaAhli', 'Iklan::saveTenagaAhli');
$routes->post('/iklan/saveTenagaTerampil', 'Iklan::saveTenagaTerampil');
$routes->post('/iklan/saveRumah', 'Iklan::saveRumah');
$routes->post('/iklan/saveTanah', 'Iklan::saveTanah');
$routes->post('/iklan/saveApartemen', 'Iklan::saveApartemen');
$routes->post('/iklan/saveRuko', 'Iklan::saveRuko');
$routes->post('/iklan/saveBangunanKomersial', 'Iklan::saveBangunanKomersial');

$routes->get('/detail-iklan/(:any)/(:num)', 'DetailIklan::index/$1/$2');





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
