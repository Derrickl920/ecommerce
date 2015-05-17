<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Model{

	public function get_admin_by_email($email)
	{
		return $this->db->query("SELECT admins.email, admins.password, admins.id FROM admins WHERE admins.email = ?", array($email))->row_array();
	}

	public function get_all_orders()
	{
		return $this->db->query(

								"SELECT billings.id, billings.first_name, billings.address, SUM(products.price) AS 'total' 
								FROM orders
								JOIN products ON orders.product_id = products.id
								JOIN billings on orders.billing_id = billings.id
								GROUP BY billings.id"

								)->result_array();
	}

	public function get_order_by_billing_id($id)
	{
		return $this->db->query( 

								"SELECT shippings.id, shippings.first_name, shippings.last_name, shippings.address, shippings.city, shippings.state, shippings.zip,
								billings.id, billings.first_name, billings.last_name, billings.address, billings.city, billings.state, billings.zip, orders.status,
								products.id, products.name, products.price
								FROM orders
								JOIN products ON orders.product_id = products.id
								JOIN billings on orders.billing_id = billings.id
								JOIN shippings ON billings.shipping_id = shippings.id
								WHERE shippings.id = ?", array($id)

								)->result_array();
	}






}