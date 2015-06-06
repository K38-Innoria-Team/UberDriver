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
            $this->load->model('district_model');
            $values = $this->district_model->selectDistrict();
            //var_dump($district);
            if(isset($_POST['district'])) {
                    $driver = $this->driver_model->selectDriver($_POST['district']);
                    $data = array(
                        'title' => 'my page',
                        'driver' => $driver,
                        'district'=>$values,
                    );
                } else {
                    $driver = $this->driver_model->selectDriver('#####');
                    $data = array(
                        'title' => 'my page',
                        'driver' => $driver,
                        'district'=>$values,
                    );
                }
           // }
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