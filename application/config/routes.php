<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$route['default_controller'] = "main";
$route['product_description'] = "/main/product_description";

$route['admin_login'] = "admins/index";
$route['admin_orders'] = "admins/admin_orders";
$route['admin_orders_show'] = "admins/admin_orders_show";
$route['admin_products/(:any)'] = "admins/admin_products/$1";
$route['carts'] = "admins/carts";

$route['404_override'] = '';


/* End of file routes.php */
/* Location: ./application/config/routes.php */