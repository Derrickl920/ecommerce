<?php 

	class soupmodel extends CI_Model{
		function show_all_products(){
			return $this->db->query("SELECT * FROM products")->result_array();
		}

		function show_category(){
			return $this->db->query("SELECT * FROM product_categories")->result_array();
		}

		function group_category($category_id){
			return $this->db->query("SELECT * FROM products 
				LEFT JOIN product_categories on product_categories.id = products.product_categories_id
				WHERE product_categories.id = ?", array($category_id))->result_array();
		}

		function group_by_price(){
			return $this->db->query("SELECT * FROM products ORDER BY price DESC")->result_array();
		}

		function search_item($keyword){
			return $this->db->query("SELECT * FROM products WHERE name LIKE ?", array($keyword))->result_array();
		}

		function soup_detail($product_id){
			return $this->db->query("SELECT * FROM products 
				LEFT JOIN product_categories on product_categories.id = products.product_categories_id 
				 WHERE products.id = ?", array($product_id))->row_array();
		}
	}

?>