<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('service_model');
		$this->load->helper('url');
	}
	public function index() {
		// $driver = $this->driver_model->getdriver();
		// //var_dump($user);
		// echo 'User: '.$driver[0]->NAME;
		echo "service controller";
	}

	public function serviceList()
	{
		// $idProvince = $this->input->post('province');
		// echo $idProvince;
		// $service = $this->service_model->selectService('1');
		// $data = array(
		// 	'title' => 'my page',
		// 	'service' => $service
		// );

		// $this->load->view('home/index', $data);
		//$this->load->view('user/', $data);
	}
}