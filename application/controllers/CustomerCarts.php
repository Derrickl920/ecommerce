<?php 

	Class CustomerCarts extends CI_Controller{

		public function __construct()
		{
			parent::__construct();
			$this->output->enable_profiler();
			$this->load->model("soupmodel");
		}

		public function index()
		{
			$data['title'] = 'Shopping Cart';
			$this->load->view('templates/header', $data);
			$this->load->view("cart");
		}

		public function add_to_cart()
		{
			$data['title'] = "Shopping Cart";
			$this->load->view('templates/header', $data);
			$cart[] = $this->input->post();
			$this->session->set_userdata("cart", $cart);
			$cart = $this->session->userdata("cart");
			$this->load->view("cart", array("cart"=>$cart));
		}	
	}
?>