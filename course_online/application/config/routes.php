<?php
defined('BASEPATH') or exit('No direct script access allowed');

//Default Rule
$route['default_controller'] = 'AppController';
$route['home'] = 'AppController/index';

$route['404_override'] = 'AppController/errorpage';
$route['translate_uri_dashes'] = FALSE;

$route['user'] = 'UserController/index';
$route['userDelete/(:num)'] = 'UserController/delete/$1';

//USER AUTH
$route['login'] = 'UserController/login';
$route['logout'] = 'UserController/logout';

//BUKU CONTROLLER
$route['siswa'] = 'SiswaController/index';
$route['tambahsiswa'] = 'SiswaController/add';
$route['editsiswa/(:num)'] = 'SiswaController/edit/$1';
$route['deletesiswa/(:num)'] = 'SiswaController/delete/$1';
$route['viewsiswa/(:num)'] = 'SiswaController/view/$1';
