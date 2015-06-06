<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('user_model');
        $this->load->helper('url');
	}
	public function index() {
		$user = $this->user_model->getUsers();
		//var_dump($user);
		echo 'User: '.$user[0]->NAME;
	}

    public function login() {
        $this->session->unset_userdata('login');
        if(!isset($_POST['username']) && !isset($_POST['password'])){
            $data = array(
                'title' => 'Login',
                'check' => -1
            );

            $this->load->view('user/index',$data);
        }
        else
        {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $check = $this->user_model->checkUser($username, $password);
            if($check==true){
                $user = $this->user_model->getUsers($username,$password);
//                echo "<pre>";
//                var_dump($user); die();
                $data = array(
                    'title' => 'Login',
                    'check' => $check,
                    'username'=> $user[0]['NAME'],
                    'id'=>$user[0]['ID']
                );
                //var_dump($data);
                $data_login=$this->session->set_userdata('login',$data);
                $this->load->view('user/index',$data);
            }
            else{
                $data = array(
                    'title' => 'Login',
                    'check' => $check
                );
                $this->load->view('user/index',$data);
            }
        }

    }

    public function report() {
        // $data = array('title'=>'Region Report');
        // $this->load->view('layout/header',$data);

        if(isset($_SESSION['login'])){
            //echo "<pre>";
            //$test=$this->session->userdata('login');
            //var_dump($test);
            $this->load->view('user/report');
        }
        else{
            $data=array(
                'title'=>'Login',
                'check'=> -1
            );
            header("location:".base_url()."index.php/login");
        }

        // $this->load->view('layout/footer',$data);
        //$user = $this->user_model->getUsers();
        //var_dump($user);
    }
    public function test() {
        $data=array(
            'title'=>'Login',
            'check'=> -1
        );
        $this->session->unset_userdata('login');
        header("location:".base_url()."index.php/login");
        /*$data = array(
            'username' => 'phucnguyen'
        );
        $this->session->set_userdata($data);*/
        //var_dump($this->session->userdata());
    }
}