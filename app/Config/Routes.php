<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
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
$routes->setAutoRoute(false);
$routes->setDefaultController('Teacher_info');
/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// $routes->match(['get', 'post'], 'news/create', 'News::create');
// $routes->get('news/(:segment)', 'News::view/$1');
// $routes->get('news', 'News::index');
// $routes->get('(:any)', 'Pages::view/$1');

//------------------machin_subject-----------------
$routes->get('machine_subject', 'Machine_subject::index');
$routes->match(['get', 'post'], 'machine_subject/connect', 'Machine_subject::connct');
$routes->match(['get', 'post'], 'machine_subject/getPOST_Subject', 'Machine_subject::getPOST_Subject');
$routes->get('machine_subject/(:segment)', 'Machine_info::view/$1');





//------------------teacher_info-----------------
$routes->get('teacher_info/index', 'teacher_info::index');
$routes->get('teacher_info/is_connect_machine', 'teacher_info::is_connect_machine');
$routes->match(['get', 'post'], 'teacher_info/login', 'Teacher_info::login');
$routes->get('teacher_info/(:segment)', 'teacher_info::view/$1');
$routes->get('teacher_info', 'teacher_info::view/$1');


$routes->get('teacher_info/output_result', 'teacher_info::output_result/$1');
// $routes->get('(:any)', 'Pages::view/$1');
$routes->get('subject', 'Subject::view');


// We get a performance increase by specifying the default
// route since we don't have to scan directories.

// $routes->get('teacher_info/(:segment)', 'teacher_info::view/$1');
// $routes->get('teacher_info', 'teacher_info::view');
// $routes->get('(:any)', 'Pages::showme/$1');


// $routes->get('/', 'Home::index');
// $routes->get('(:any)', 'Pages::view/$1');
// $routes->match(['get', 'post'], 'news/create', 'News::create');
// $routes->match(['get', 'post'], 'tercher_info/view', 'tercher_info::UserLogin');
// $routes->get('teacher_info', 'teacher_info::view');
//$routes->get('teacher_info/view', 'teacher_info::view');
// $routes->get('teacher_info/UserLogin', 'teacher_info::view');

$routes->get('news', 'News::index');
$routes->get('(:any)', 'Pages::view/$1');



$routes->get('news', 'News::index');



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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
