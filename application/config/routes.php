<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'auth';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


// $route['sign-up'] = 'auth/signup';
$route['homepage'] = 'base';

//----- Authentication routes------

$route['login'] = 'auth';
$route['signup'] = 'auth/signup';

//---validation routes---

$route['signing-up'] = 'auth/validsignup';
// $route['signup']['post'] = 'auth/doSignup';


// $route['list-users'] = 'auth/index';
$route['logged-in'] = 'auth/validlogin';



