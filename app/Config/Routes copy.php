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

//Latihan
// $routes->get('/latihan1', 'belajar\Kontainer::index');

// HOME
$routes->get('/beranda', 'Home::index');
$routes->get('/home/detail/(:num)', 'Home::detail/$1');
$routes->get('/home/detail/(:num)/(:num)', 'Home::detail/$1/$2');

// AUTH 
$routes->get('/login', 'Auth::index');
$routes->post('/auth/submit-login', 'Auth::submit_login');
$routes->get('/register', 'Auth::register');
$routes->post('/auth/submit-register', 'Auth::submit_register');
$routes->get('/otp', 'Auth::otp');
$routes->post('/auth/submit-otp', 'Auth::submit_otp');
$routes->get('/data', 'Auth::data');
$routes->post('/auth/submit-data', 'Auth::submit_data');
$routes->get('/logout', 'Auth::logout');
$routes->get('/lupa-password', 'Auth::forget_password');
$routes->post('/auth/submit-forget-password', 'Auth::submit_forget_password');
$routes->get('/otp-forget-pasword', 'Auth::otp_forget_password');
$routes->post('/auth/submit-otp-forget-password', 'Auth::submit_otp_forget_password');

$routes->get('/', 'Auth::lockscreen');
$routes->post('/auth/submit-lockscreen', 'Auth::submit_lockscreen');

// PROFILE
$routes->get('/profil', 'Profil::index');
$routes->get('/profil/update-profil', 'Profil::updateProfil');
$routes->get('/profil/change-password', 'Profil::updatePassword');
$routes->post('/profil/update-profil', 'Profil::update_Profil');
$routes->post('/profil/update-password', 'Profil::update_Password');

// KONTAK KAMI
$routes->post('kontakkami/submit-kontakkami', 'KontakKami::submit_kontakkami');

// DETAIL IKLAN
// id rekomendasi iklan
// nama iklan
// id iklan
// type iklan
// table
$routes->get('/iklan/detail-iklan/(:any)/(:num)/(:num)/(:any)/(:any)', 'Iklan::detailIklan/$1/$2/$3/$4/$5/');
$routes->get('/iklan/detail-iklan-layanan/(:any)/(:num)/(:num)', 'Iklan::detailIklanLayanan/$1/$2/$3/');
$routes->get('/iklan/edit-iklan/(:any)/(:num)/(:num)/(:any)/(:any)', 'Iklan::editIklan/$1/$2/$3/$4/$5/');
$routes->post('profil/delete-iklan', 'IklanProfil::deleteIklan');
$routes->post('profil/edit-iklan', 'IklanProfil::editIklanProfil');
$routes->post('iklan/detail/whatshapp', 'Iklan::detailIklanWa');



// ---------------------------------------------------------------------------------



// $routes->get('/logout', 'Auth::logout');

// $routes->get('/login', 'Auth::index');
// $routes->post('/submit-login', 'Auth::submit_login');
// $routes->get('/submit-login', 'Auth::submit_login');
// $routes->get('/register', 'Auth::register');
// $routes->post('/submit-register', 'Auth::submit_register');
// $routes->get('/submit-register', 'Auth::submit_register');
// $routes->get('/otp', 'Auth::otp');
// $routes->post('/submit-otp', 'Auth::submit_otp');
// $routes->get('/data-otp', 'Auth::data_otp');
// $routes->post('/submit-data-user', 'Auth::submit_data_user');

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
$routes->get('/iklan/detail/(:any)/(:num)/(:num)/(:any)', 'Iklan::detailIklan/$1/$2/$3/$4');

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

$routes->post('/edit-iklan/save', 'IklanProfil::save');
$routes->post('/edit-iklan/savemtr', 'IklanProfil::savemtr');
$routes->post('/edit-iklan/saveKostkontrakan', 'IklanProfil::saveKostkontrakan');
$routes->post('/edit-iklan/saveTenagaAhli', 'IklanProfil::saveTenagaAhli');
$routes->post('/edit-iklan/saveTenagaTerampil', 'IklanProfil::saveTenagaTerampil');
$routes->post('/edit-iklan/saveRumah', 'IklanProfil::saveRumah');
$routes->post('/edit-iklan/saveTanah', 'IklanProfil::saveTanah');
$routes->post('/edit-iklan/saveApartemen', 'IklanProfil::saveApartemen');
$routes->post('/edit-iklan/saveRuko', 'IklanProfil::saveRuko');
$routes->post('/edit-iklan/saveBangunanKomersial', 'IklanProfil::saveBangunanKomersial');


// Administrator
$routes->get('/administrator', 'Admin\Administrator::index'); // <--------- Ok
$routes->post('/admin-verifikasilogin', 'Admin\Administrator::verifikasilogin'); // <--------- Ok
$routes->get('/admin-register', 'Admin\Administrator::register'); // <--------- Ok

$routes->get('/administrator-hubungikami', 'Admin\About::hubungikami'); // <--------- Ok
$routes->post('/tambah-hubungi-kami', 'Admin\About::tambahhubungikami'); // <--------- Ok
$routes->get('/edit-hubungi-kami/(:any)', 'Admin\About::edithubungikami/$1'); // <--------- Ok
$routes->post('/update-hubungi-kami', 'Admin\About::updatehubungikami'); // <--------- Ok
$routes->get('/aktifasi-hubungikami/(:any)/(:any)', 'Admin\About::aktifasihubungikami/$1/$2'); // <--------- Ok

$routes->get('/administrator-tentangkami', 'Admin\About::index'); // <--------- Ok
$routes->get('/aktifasi-tentangkami/(:any)/(:any)', 'Admin\About::aktifasitentangkami/$1/$2'); // <--------- Ok
$routes->get('/edit-tentang-kami/(:any)', 'Admin\About::edittentangkami/$1'); // <--------- Ok
$routes->post('/update-tentang-kami', 'Admin\About::updatetentangkami'); // <--------- Ok
$routes->post('/tambah-tentang-kami', 'Admin\About::tambahtentangkami'); // <--------- Ok



$routes->get('/admin-layanan', 'Admin\LayananController::index'); // <--------- Ok
$routes->get('/aktifasilayanan/(:any)', 'Admin\LayananController::aktifasilayanan/$1'); // <--------- Ok
$routes->get('/admin-layanan', 'Admin\LayananController::index'); // <--------- Ok
$routes->get('/aktifasilayanan/(:any)', 'Admin\LayananController::aktifasilayanan/$1'); // <--------- Ok
$routes->post('/admin-tambah-layanan', 'Admin\LayananController::tambahlayanan'); // <--------- Ok
$routes->post('/admin-edit-layanan', 'Admin\LayananController::editlayanan'); // <--------- Ok

$routes->get('/admin-slider', 'Admin\Slider::editSlider'); // <--------- Ok
$routes->post('/admin-edit-slider', 'Admin\Slider::updateSlider'); // <--------- Ok

$routes->get('/administrator-area/dashboard/', 'Admin\DashboardController::index');   // <--------- Ok

// $routes->get('/administrator-area/iklan', 'Admin\Iklan::index'); // <--------- Ok
$routes->get('admin-iklan-baru/(:any)', 'Admin\Iklan::index/$1'); // <--------- Ok
$routes->get('admin-iklan-aktif/(:any)', 'Admin\Iklan::index/$1'); // <--------- Ok
$routes->get('admin-iklan-tidak-aktif/(:any)', 'Admin\Iklan::index/$1'); // <--------- Ok
$routes->get('admin-iklan-suspend/(:any)', 'Admin\Iklan::index/$1'); // <--------- Ok
$routes->get('admin-iklan-block/(:any)', 'Admin\Iklan::index/$1'); // <--------- Ok


// $routes->get('admin-user/(:any)', 'Admin\Users::index/$1');   // <--------- Ok
$routes->get('admin-user-baru/(:any)', 'Admin\Users::index/$1'); // <--------- Ok
$routes->get('admin-user-aktif/(:any)', 'Admin\Users::index/$1'); // <--------- Ok
$routes->get('admin-user-tidak-aktif/(:any)', 'Admin\Users::index/$1'); // <--------- Ok
$routes->get('admin-user-suspend/(:any)', 'Admin\Users::index/$1'); // <--------- Ok
$routes->get('admin-user-block/(:any)', 'Admin\Users::index/$1'); // <--------- Ok



$routes->get('/administrator-area/pesan', 'Admin\Pesan::index');
$routes->get('/administrator-area/slider/(:num)', 'Admin\Slider::delete/$1');
$routes->get('/administrator-area/iklan', 'Admin\Iklan::index');

$routes->get('/admin-user-check/(:any)/(:any)', 'Admin\Users::usercheck/$1/$2');   // <--------- Ok

$routes->get('/admin-sub-layanan/(:any)', 'Admin\SubLayananController::sublayanan/$1'); // <--------- Ok
$routes->post('/admin-tambah-sub-layanan', 'Admin\SubLayananController::tambahsublayanan'); // <--------- Ok
$routes->post('/admin-edit-sub-layanan/(:any)', 'Admin\SubLayananController::editsublayanan/$1'); // <--------- Ok
$routes->get('/aktifasisublayanan/(:any)/(:any)', 'Admin\SubLayananController::aktifasisublayanan/$1/$2'); // <--------- Ok

// $routes->get('/detailiklanbaru', 'Admin\iklan::detailiklanbaru'); // <--------- Ok
// $routes->get('/detailiklanbaru/(:num)/(:num)/(:num)/(:num)/(:num)', 'Admin\iklan::detailiklanbaru/$1/$2/$3/$4/$5'); // <--------- Ok

$routes->get('/admin-detail-iklan/(:num)/(:num)/(:num)/(:num)/(:num)', 'Admin\iklan::detailiklan/$1/$2/$3/$4/$5'); // <--------- Ok



$routes->get('/acceptiklan/(:any)/(:any)/(:any)/(:any)/(:any)', 'Admin\iklan::acceptiklan/$1/$2/$3/$4/$5'); // <--------- Ok
// $routes->get('/rejectiklan/(:any)/(:any)/(:any)/(:any)', 'Admin\iklan::rejectiklan/$1/$2/$3/$4'); // <--------- Ok
// $routes->get('/administrator-area/slider', 'Admin\Slider::index');   // <--------- Ok



// $routes->get('/administrator-area/dashboard/create', 'Admin\DashboardController::create');   // <--------- Ok
// $routes->post('/administrator-area/dashboard/createSlider', 'Admin\DashboardController::saveSlider');   // <--------- Ok
// $routes->get('/administrator-area/dashboard/edit/(:num)', 'Admin\DashboardController::edit/$1');   // <--------- Ok
// $routes->post('/administrator-area/update', 'Admin\DashboardController::update');   // <--------- Ok
// $routes->post('/administrator-area/delete/(:num)', 'Admin\DashboardController::delete/$1');   // <--------- Ok

// $routes->get('/administrator-area/users', 'Admin\Users::index');
// $routes->get('/administrator-area/users/create', 'Admin\Users::create');
// $routes->get('/administrator-area/users/update', 'Admin\Users::update');

// $routes->get('/administrator-area/iklan', 'Admin\Iklan::index');
// $routes->get('/administrator-area/iklan/create', 'Admin\Iklan::create');
// $routes->get('/administrator-area/iklan/update', 'Admin\Iklan::update');


$routes->get('/admin-balas-pesan/(:any)/(:any)', 'Admin\Pesan::balaspesan/$1/$2');
$routes->get('/admin-warning-pesan', 'Admin\Pesan::warningpesan');
$routes->get('/admin-block-pesan', 'Admin\Pesan::blockpesan');

// $routes->get('/administrator-area/pesan/update', 'Admin\Pesan::update');

// $routes->get('/administrator-area/slider/(:', 'Admin\Slider::index');


$routes->get('logout', 'AuthController::logout');
$routes->post('/submit-login', 'AuthController::submit_login'); // <--------- Ok

$routes->get('/edit-layanan', 'EditLayanan::index');
// $routes->get('tambah-layanan', 'EditLayanan::tambah_layanan');
$routes->post('submit-form-insert-layanan', 'EditLayanan::simpan_tambah_layanan');
$routes->get('submit-edit-layanan/(:num)', 'EditLayanan::submit_edit_layanan/$1');
$routes->get('activate-layanan/(:num)', 'EditLayanan::activate_layanan/$1');
$routes->post('submit-form-edit-layanan', 'EditLayanan::submit_form_edit_layanan');

$routes->get('/edit-sub-layanan', 'EditSubLayanan::index');
$routes->get('/submit-edit-sub-layanan/(:num)', 'EditSubLayanan::submit_edit_sub_layanan/$1');
$routes->get('/submit-edit/(:num)', 'EditSubLayanan::form_edit_sub_layanan/$1');
$routes->post('/submit-form-edit', 'EditSubLayanan::submit_form_edit_sub_layanan');
$routes->get('/activate-sub-layanan/(:num)/(:num)/(:num)', 'EditSubLayanan::activate_sub_layanan/$1/$2/$3');
$routes->get('/tambah-sub-layanan/(:num)', 'EditSubLayanan::tambah_sub_layanan/$1');
$routes->post('/submit-form-insert', 'EditSubLayanan::submit_form_insert_sub_layanan');

$routes->get('/sample', 'Sample::index');
$routes->get('/sample/create', 'Sample::create');
$routes->get('/sample/update', 'Sample::update');

$routes->get('/home/list', 'Home::list');
$routes->get('/home/create', 'Home::create');
$routes->get('/home/edit/(:num)', 'Home::edit/$1');

$routes->get('/layanan', 'LayananController::index');
$routes->get('/layanan/create', 'LayananController::create');
$routes->get('/layanan/update', 'LayananController::update');

$routes->get('/tenaga_terampil', 'Tenaga_terampilController::index');
$routes->get('/tenaga_terampil/(:any)/(:num)/(:any)/(:num)', 'Tenaga_terampilController::detailTenagaTerampil/$1/$2/$3/$4');
$routes->get('/tenaga_terampil/create', 'Tenaga_terampilController::create');
$routes->get('/tenaga_terampil/update', 'Tenaga_terampilController::update');
$routes->get('/tenaga_terampil/detail/(:num)', 'Tenaga_terampilController::detail/$1');

$routes->get('/tenaga_ahli', 'Tenaga_ahliController::index');
$routes->get('/tenaga_ahli/(:any)/(:num)/(:any)/(:num)', 'Tenaga_ahliController::detailTenagaAhli/$1/$2/$3/$4');
// $routes->get('/tenaga_ahli/(:num)', 'Tenaga_ahliController::detailTenagaAhli/$1/$2/$3/$4');

$routes->get('/tenaga_ahli/create', 'Tenaga_ahliController::create');
$routes->get('/tenaga_ahli/update', 'Tenaga_ahliController::update');
$routes->get('/tenaga_ahli/detail/(:num)', 'Tenaga_ahliController::detail/$1');

$routes->get('/kost_kontrakan', 'Kost_kontrakanController::index');
$routes->get('/kost_kontrakan/(:any)/(:num)/(:any)/(:num)', 'Kost_kontrakanController::detailKostKontrakan/$1/$2/$3/$4');
$routes->get('/kost_kontrakan/create', 'Kost_kontrakanController::create');
$routes->get('/kost_kontrakan/update', 'Kost_kontrakanController::update');
$routes->get('/kost_kontrakan/detail/(:num)', 'Kost_kontrakanController::detail/$1');

$routes->get('/mobil', 'MobilController::index');
$routes->get('/mobil/(:any)/(:num)/(:any)/(:num)', 'MobilController::detailMobil/$1/$2/$3/$4');
$routes->get('/mobil/create', 'MobilController::create');
$routes->get('/mobil/update', 'MobilController::update');
$routes->get('/mobil/detail/(:num)', 'MobilController::detail/$1');

$routes->get('/motor', 'MotorController::index');
$routes->get('/motor/(:any)/(:num)/(:any)/(:num)', 'MotorController::detailMotor/$1/$2/$3/$4');
$routes->get('/motor/create', 'MotorController::create');
$routes->get('/motor/update', 'MotorController::update');
$routes->get('/motor/detail/(:num)', 'MotorController::detail/$1');

$routes->get('/property', 'PropertyController::index');
$routes->get('/property/rumah/detail_rumah', 'PropertyController::detail_rumah');
$routes->get('/property/apartemen', 'PropertyController::apartemen');
$routes->get('/property/apartemen/detail_apartemen', 'PropertyController::detail_apartemen');
$routes->get('/property/tanah', 'PropertyController::tanah');
$routes->get('/property/tanah/detail_tanah', 'PropertyController::detail_tanah');
$routes->get('/property/ruko', 'PropertyController::ruko');
$routes->get('/property/ruko/detail_ruko', 'PropertyController::detail_ruko');
$routes->get('/property/bangunan_komersial', 'PropertyController::bangunan_komersial');
$routes->get('/property/bangunan_komersial/detail_bangunan', 'PropertyController::detail_bangunan');

$routes->get('/rumah', 'RumahController::index');
$routes->get('/rumah/detail/(:num)', 'RumahController::detail/$1');
$routes->get('/rumah/(:any)/(:num)/(:any)/(:num)', 'RumahController::detailRumah/$1/$2/$3/$4');

$routes->get('/tanah', 'TanahController::index');
$routes->get('/tanah/detail/(:num)', 'TanahController::detail/$1');
$routes->get('/tanah/(:any)/(:num)/(:any)/(:num)', 'TanahController::detailTanah/$1/$2/$3/$4');

$routes->get('/apartemen', 'ApartemenController::index');
$routes->get('/apartemen/detail/(:num)', 'ApartemenController::detail/$1');
$routes->get('/apartemen/(:any)/(:num)/(:any)/(:num)', 'ApartemenController::detailApartemen/$1/$2/$3/$4');

$routes->get('/ruko', 'RukoController::index');
$routes->get('/ruko/detail/(:num)', 'RukoController::detail/$1');
$routes->get('/ruko/(:any)/(:num)/(:any)/(:num)', 'RukoController::detailRuko/$1/$2/$3/$4');

$routes->get('/bangunan_komersial', 'BangunanKomersialController::index');
$routes->get('/bangunan_komersial/detail/(:num)', 'BangunanKomersialController::detail/$1');
$routes->get('/bangunan_komersial/(:any)/(:num)/(:any)/(:num)', 'BangunanKomersialController::detailBangunanKomersial/$1/$2/$3/$4');



// Kontak Kami
$routes->post('/kontak_kami/save', 'KontakKami::save');


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
