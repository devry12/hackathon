<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'welcome';

//api
$route['api/auth/register']['POST'] = 'Api/AuthController/register';
$route['api/auth/login']['POST'] = 'Api/AuthController/login';
    //driver
$route['api/driver/statussiswa/(:any)']['POST'] = 'Api/OrderController/statusSiswa/$1';
$route['api/driver/naik/(:any)']['POST'] = 'Api/OrderController/naikBus/$1';
$route['api/driver/turun/(:any)']['POST'] = 'Api/OrderController/turnBus/$1';

//web
$route['auth/parent/register'] = 'Web/AuthController/registerParent';
$route['auth/driver/register'] = 'Web/AuthController/registerDriver';

$route['auth/admin/login'] = 'Web/AuthController/loginAdmin';





$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
