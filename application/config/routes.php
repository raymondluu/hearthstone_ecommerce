<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$route['default_controller'] = "main";
$route['product_description'] = "main/product_description";

$route['admin_login'] = "admins/index";
$route['admin_orders'] = "orders/admin_orders";
// $route['admin_orders_show'] = "orders";
$route['admin_orders_show/(:any)'] = "orders/show_order/$1";
$route['admin_products'] = "admins/admin_products";
$route['carts'] = "admins/carts";

$route['404_override'] = '';


/* End of file routes.php */
/* Location: ./application/config/routes.php */