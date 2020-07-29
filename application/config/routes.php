<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


				#   Backend     #


$route['admin'] 			 		= 'backend/Login/index/login';
$route['dashboard'] 		 		= 'backend/Dashboard/index';
$route['sign-out'] 			 		= 'backend/Login/index/sign-out';
$route['page/(:any)'] 	 			= 'backend/page/index/$1';
$route['general/(:any)'] 	 		= 'backend/general/index/$1';
$route['slideshow/(:any)'] 	 		= 'backend/slideshow/index/$1';



				#   Frontend     #
