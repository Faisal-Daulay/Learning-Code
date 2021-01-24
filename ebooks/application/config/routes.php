<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
$route['buku'] = 'BukuController/index'; 
$route['tambahbuku'] = 'BukuController/add'; 
$route['editbuku/(:num)'] = 'BukuController/edit/$1'; 
$route['deletebuku/(:num)'] = 'BukuController/delete/$1'; 
$route['viewbuku/(:num)'] = 'BukuController/view/$1'; 

