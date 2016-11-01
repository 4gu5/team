<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome';
$route['login'] = 'login';
$route['jsondata'] = 'data/get_list';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;