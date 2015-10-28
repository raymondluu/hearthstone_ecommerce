<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$route['default_controller'] = "main";
$route['product_description'] = "main/product_description";

$route['admin_login'] = "admins/index";
$route['admin_orders'] = "orders/admin_orders";
$route['admin_orders_show/(:any)'] = "orders/show_order/$1";
$route['admin_products/(:any)'] = "admins/admin_products/$1";
$route['product_description/(:any)'] = "main/product_description/$1";
$route['carts'] = "admins/carts";
$route['404_override'] = '';


/* End of file routes.php */
/* Location: ./application/config/routes.php */