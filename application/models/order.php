<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Order extends CI_Model {

	public function get_all_orders() {
		return $this->db->query("SELECT orders.id, CONCAT(customers.first_name, ' ', customers.last_name) AS customer_name, orders.created_at AS purchase_date, CONCAT(customers.address, ' ', customers.address2, ' ', customers.state, ' ', customers.city, ' ', customers.zipcode) AS customer_address, orders.total FROM orders JOIN customer_orders ON orders.id=customer_orders.order_id JOIN customers ON customer_orders.customer_id=customers.id")->result_array();
	}

	public function get_one_order_for_show($order_id) {
		$query  = "SELECT orders.id, CONCAT(customers.first_name, ' ', customers.last_name) AS customer_name,  CONCAT(customers.address, ' ', customers.address2, ' ', customers.state, ' ', customers.city, ' ', customers.zipcode) AS customer_address, CONCAT(billings.first_name, ' ', billings.last_name) AS billing_name,  CONCAT(billings.address, ' ', billings.address2, ' ', billings.state, ' ', billings.city, ' ', billings.zipcode) AS billing_address FROM orders JOIN customer_orders ON orders.id=customer_orders.order_id JOIN customers ON customer_orders.customer_id=customers.id JOIN billings ON customers.id = billings.customer_id WHERE orders.id = ?";
		$values = $order_id;
		return $this->db->query($query, $values)->row_array();

	}

}