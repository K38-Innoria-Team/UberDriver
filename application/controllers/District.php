<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class District extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('district_model');
		$this->load->helper('url');
	}
	public function index() {
		// $driver = $this->driver_model->getdriver();
		// //var_dump($user);
		// echo 'User: '.$driver[0]->NAME;
		echo "district controller";
	}

	public function register1()
	{
		$district = $this->district_model->selectDistrict();
		$service = $this->district_model->selectService($this->input->post('province'));
		$data = array(
			'title' => 'my page',
			'district' => $district,
			'service' => $service
		);

		$this->load->view('home/step1', $data);
		//$this->load->view('user/', $data);
	}
}