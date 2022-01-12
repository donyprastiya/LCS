<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'auth';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['about'] = 'welcome/about';
$route['contact'] = 'welcome/contact';




$route['adminlcs'] = 'adminlcs';
$route['bisa'] = 'adminlcs/bisa';

$route['dht'] = 'dht';
$route['gerak'] = 'gerak';
$route['cahaya'] = 'cahaya';

$route['control'] = 'control';

$route['lampu'] = 'lampu';
$route['id'] = 'lampu/id';
$route['lampu1'] = 'lampu/lampu1';
$route['lampu2'] = 'lampu/lampu2';
$route['lampu3'] = 'lampu/lampu3';
$route['lampu4'] = 'lampu/lampu4';
$route['lampu5'] = 'lampu/lampu5';
$route['lampu6'] = 'lampu/lampu6';
$route['lampu7'] = 'lampu/lampu7';
$route['lampu8'] = 'lampu/lampu8';
$route['lampu9'] = 'lampu/lampu9';
$route['lampu10'] = 'lampu/lampu10';

// $route['overview'] = 'admin/overview';

// $route['simpan'] = 'admin/overview/simpan';

// $route['dht'] = 'admin/dht';
// $route['gerak'] = 'admin/gerak';
// $route['cahaya'] = 'admin/cahaya';

// $route['lampu1'] = 'admin/lampu1';
// $route['lampu2'] = 'admin/lampu2';
// $route['lampu3'] = 'admin/lampu3';
// $route['lampu4'] = 'admin/lampu4';
// $route['lampu5'] = 'admin/lampu5';
// $route['lampu6'] = 'admin/lampu6';
// $route['lampu7'] = 'admin/lampu7';
// $route['lampu8'] = 'admin/lampu8';
// $route['lampu9'] = 'admin/lampu9';
// $route['lampu10'] = 'admin/lampu10';
