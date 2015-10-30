<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Order extends CI_Model {

	public function get_all_orders() {
		return $this->db->query("SELECT orders.session_id, orders.id, CONCAT(customers.first_name, ' ', customers.last_name) AS customer_name, orders.created_at AS purchase_date, CONCAT(customers.address, ' ', customers.address2, ' ', customers.state, ' ', customers.city, ' ', customers.zipcode) AS customer_address, SUM(orders.total_price) AS total_price FROM orders
      JOIN customer_orders
      ON orders.id=customer_orders.order_id
      JOIN customers
      ON customer_orders.customer_id=customers.id
      GROUP BY orders.session_id")->result_array();
	}

	public function get_one_order_for_show($session_id) {
		$query  = "SELECT cards.api_id, cards.name, cards.price, orders.quantity, orders.total_price, orders.card_id, orders.session_id, orders.id, CONCAT(customers.first_name, ' ', customers.last_name) AS customer_name,  CONCAT(customers.address, ' ', customers.address2, ' ', customers.state, ' ', customers.city, ' ', customers.zipcode) AS customer_address, CONCAT(billings.first_name, ' ', billings.last_name) AS billing_name,  CONCAT(billings.address, ' ', billings.address2, ' ', billings.state, ' ', billings.city, ' ', billings.zipcode) AS billing_address, orders.status FROM orders JOIN customer_orders ON orders.id=customer_orders.order_id JOIN customers ON customer_orders.customer_id=customers.id JOIN billings ON customers.id = billings.customer_id JOIN cards ON orders.card_id = cards.id WHERE orders.session_id = ?";
		$values = $session_id;
    // var_dump($session_id);
		return $this->db->query($query, $values)->result_array();
    // var_dump($crud);
    // die();
	}

	// public function get_one_order($order_id){
	// 	$query  = "SELECT orders.id FROM orders WHERE orders.id=?";
	// 	$values = $order_id;
	// 	return $this->db->query($query, $values)->row_array();
	// }

	public function set_status_shipped($session_id){
  		$query  = "UPDATE orders SET status='Shipped' WHERE session_id=?";
  		$values = $session_id;
  		return $this->db->query($query, $values);
  	}

  	public function set_status_in_process($session_id){
  		$query  = "UPDATE orders SET status='In Process' WHERE session_id=?";
  		$values = $session_id;
  		return $this->db->query($query, $values);
  	}

  	public function set_status_cancelled($session_id){
  		$query  = "UPDATE orders SET status='Cancelled' WHERE session_id=?";
  		$values = $session_id;
  		return $this->db->query($query, $values);
  	}

    public function add_order($post, $cust_cart)
    {
      // var_dump($post);
      // var_dump($cust_cart);
      // die();
      // $post['shipping_first_name']
      // $cust_cart[0]['Card_ID']

      //INSERT INTO CUSTOMERS
      $query = "INSERT INTO customers (first_name, last_name, address, address2, city, state, zipcode, created_at, updated_at)
      VALUES(?, ?, ?, ?, ?, ?, ?, NOW(), NOW())";
      $values = array($post['shipping_first_name'], $post['shipping_last_name'], $post['shipping_address'], $post['shipping_address2'], $post['shipping_city'], $post['shipping_state'], $post['shipping_zipcode']);
      $this->db->query($query, $values);

      $customer_id = $this->db->insert_id();

      $query2 = "INSERT INTO billings (customer_id, first_name, last_name, address, address2, city, state, zipcode, card, security_code, expiration, created_at, updated_at)
      VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW(), NOW())";
      $values2 = array($customer_id, $post['billing_first_name'], $post['billing_last_name'], $post['billing_address'], $post['billing_address2'], $post['billing_city'], $post['billing_state'], $post['billing_zipcode'], $post['billing_card'], $post['billing_ssc'], $post['expireMM'].$post['expireMM'] );
      $this->db->query($query2, $values2);

      foreach ($cust_cart as $cust_cart) {
        $query3 = "INSERT INTO orders (session_id, card_id, quantity, total_price, created_at, updated_at)
        VALUES(?, ?, ?, ?, NOW(), NOW())";
        $values3 = array($this->session->userdata['session_id'], $cust_cart['Card_ID'], $cust_cart['card_quantity'], $post['total_price']);
        $this->db->query($query3, $values3);
        $order_id = $this->db->insert_id();

        $query4 = "INSERT INTO customer_orders (customer_id, order_id, created_at, updated_at)
        VALUES(?, ?, NOW(), NOW() )";
        $values4 = array($customer_id, $order_id);
        $this->db->query($query4, $values4);
      }

      $this->session->set_flashdata('order_good', "Your order has been sucessfully placed");

      $query5 = "DELETE FROM cart WHERE session_id = ?";
      $values5 = array( $this->session->userdata['session_id'] );
      $this->db->query($query5, $values5);
      $array = array('count' => 0);
      $this->session->set_userdata($array);

      redirect('/carts');
    }


}