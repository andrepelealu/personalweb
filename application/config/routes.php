<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['pesan']='welcome/send';
$route['editheader']='edit/editheader';
$route['tampil/(:any)']='blog/tampil/$1';
$route['notfound']='page404';
