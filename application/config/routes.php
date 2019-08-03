<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['pesan']='welcome/send';

$route['tampil/(:any)/(:any)']='blog/tampil/$1/$2';
$route['update/(:any)/(:any)']='blog/update/$1/$2';
$route['delete/(:any)/(:any)']='blog/update/$1/$2';
$route['register']            ='UserAuth/register';
$route['login']               ='UserAuth/login';
$route['logout']            ='UserAuth/logout';
$route['notfound']='page404';
