<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'welcome';

//api
$route['api/auth/register']['POST'] = 'Api/AuthController/register';
$route['api/auth/login']['POST'] = 'Api/AuthController/login';




$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
