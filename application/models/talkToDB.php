<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	class talkToDB extends CI_model
	{
		public function saleData()
		{


			var_dump($this->input->post());

			$first_name = $this->input->post('b_first_name');
			$last_name = $this->input->post('b_last_name');
			$address = $this->input->post('b_address');
			$city = $this->input->post('b_city');
			$state = $this->input->post('b_State');
			$zip = $this->input->post('b_zip');
			$credit_card = $this->input->post('b_c_card');
			$security_check = $this->input->post('b_code');
			$expiration_month = $this->input->post('exp_month');
			$expiration_year = $this->input->post ('exp_year');

 			

			$query = "INSERT INTO billings (first_name, last_name, address, city, state, zip, credit_card, security_check, expiration_month, expiration_year, created_at, updated_at) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";

			$values = array($first_name, $last_name, $address, $city, $state, $zip, $credit_card, $security_check, $expiration_month, $expiration_year, date('Y-m-d, h:i:s'),date('Y-m-d, h:i:s'));

			return $this->db->query($query, $values);

			

		}
	}


