<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$route['default_controller']         = "main";
$route['product_description']        = "main/product_description";
$route['admin_login']         	         = "admins";
$route['login']         	         = "admins/login";
$route['admin_orders']               = "orders/admin_orders";
$route['admin_orders_show/(:any)']   = "orders/show_order/$1";
$route['admin_products']             = "products/admin_products_view";
// $route['admin_products_edit/(:any)'] = "products/edit/$1";
// $route['admin_login']				 = "admins/logout";
// $route['admin_products/(:any)'] = "admins/admin_products/$1";
$route['product_description/(:any)'] = "main/product_description/$1";


$route['carts'] 					 = "main/show_cart";
$route['api_stuff'] 				 = "main/load_api_stuff";
$route['404_override'] 				 = '';
$route['products/get_cards_json/(:num)'] = "products/get_cards_json/$1";

$route['submit_billing'] = "orders/submit_billing";
$route['add_card_to_cart/(:any)'] = "products/add_card_to_cart/$1";





/* End of file routes.php */
/* Location: ./application/config/routes.php */