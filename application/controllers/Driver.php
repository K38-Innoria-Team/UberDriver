<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Driver extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('driver_model');
		$this->load->helper('url');
	}
	public function index() {
		// $driver = $this->driver_model->getdriver();
		// //var_dump($user);
		// echo 'User: '.$driver[0]->NAME;
		echo "driver controller";
	}

	public function driverList()
	{
        if(isset($_SESSION['login'])){
            //echo "<pre>";
            //$test=$this->session->userdata('login');
            //var_dump($test);
            $val = $this->input->post('txtRegion');
            if($val != ''){
                $driver = $this->driver_model->selectDriver($val);
                $data = array(
                    'title' => 'my page',
                    'driver' => $driver
                );
            }
            else{
                $driver = $this->driver_model->selectDriver('#####');
                $data = array(
                    'title' => 'my page',
                    'driver' => $driver
                );
            }
            $this->load->view('user/report', $data);
        }
        else{
            $data=array(
                'title'=>'Login',
                'check'=> -1
            );
            header("location:".base_url()."index.php/login");
        }


	}
}