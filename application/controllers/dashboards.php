<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboards extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function admin()
	{
		$data['title'] = 'Admin Login';
		$this->load->view('dashboards/login', $data);
	}

	public function orders()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$this->load->model('dashboard');
		$user = $this->dashboard->get_admin_by_email($email);

		if($user && $user['password'] == $password)
		{
			$current_user = array(
				'id' => $user['id'],
				'email' => $user['email'],
				'is_logged_in' => true
				);
			$this->session->set_userdata($current_user);
			$this->all();

		}
		else
		{
			$this->fail();
		}
	}

	public function all()
	{
		$data['title'] = 'All orders';
		$this->load->view('templates/admin', $data);
		$data['orders'] = $this->dashboard->get_all_orders();
		$this->load->view('dashboards/orders', $data);
		$this->load->view('templates/footer');
	}

	public function fail()
	{
		$data['title'] = 'Admin Login';
		$data['error'] = 'true';
		$this->load->view('dashboards/login', $data);
	}
}

?>