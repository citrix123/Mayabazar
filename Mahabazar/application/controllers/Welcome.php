<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library(array('session'));
		$this->load->helper(array('url'));
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('db_connect');
	}

	public function index()
	{
		$this->load->view('brand');
		$this->load->view('shopping');
	}

	/**
	 * register Method is to register new member to our web Site
	 */
	public function register($value='')
	{
		$this->form_validation->set_rules('name', 'Name', 'trim|required');  //|callback_checkUserExists
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('mobile', 'Mobile', 'trim|required');
		$this->form_validation->set_rules('customerType', 'User Type', 'trim|required');
		if ($this->form_validation->run() === false) {
			die(validation_errors());
		}
		$registrationData = array('name' => $this->input->post('name') ,
											 'email' => $this->input->post('email'),
											 'mobile_number' => $this->input->post('mobile'),
											 'customer_type' => $this->input->post('customerType'));
		// print_r($registrationData);
		$this->db_connect->registerUser($registrationData);
		$this->load->view('brand');
	}

	public function checkUserExists($username)
	{
		return $this->db_connect->checkUserExists($username);
	}
}
