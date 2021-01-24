<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// DEFAULT SETTING 
// $route['default_controller'] = 'welcome';
$route['default_controller'] = 'Chome';
$route['home'] = 'Chome/index';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// LOGIN
$route['login'] = 'Clogin/login';
$route['logout'] = 'Clogin/logout';

// SISWA COTROLLER
$route['siswa'] = 'Csiswa/index';
$route['tambahsiswa'] = 'Csiswa/add'; 
$route['editsiswa/(:num)'] = 'Csiswa/edit/$1'; 
$route['deletesiswa/(:num)'] = 'Csiswa/delete/$1'; 
$route['viewsiswa/(:num)'] = 'Csiswa/view/$1'; 

// MENU COTROLLER
$route['setting_menu'] = 'Cmenu/index';
$route['tambahmenu'] = 'Cmenu/add'; 
$route['editmenu/(:num)'] = 'Cmenu/edit/$1'; 
$route['deletemenu/(:num)'] = 'Cmenu/delete/$1';

// USER COTROLLER
$route['user'] = 'Cuser/index';
$route['tambahuser'] = 'Cuser/add'; 
$route['edituser/(:num)'] = 'Cuser/edit/$1'; 
$route['deleteuser/(:num)'] = 'Cuser/delete/$1';


