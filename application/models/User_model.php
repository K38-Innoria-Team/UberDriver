<?php
class User_model extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function getUsers($username,$password) {
        $query = $this->db->query("SELECT NAME, ID FROM user WHERE NAME='".$username."' AND PASSWORD='".$password."'");
        if($query->num_rows()==1)
            return $query->result_array();
        else
            return NULL;
    }

    public function checkUser($username, $password) {
        $this->db->select('1');
        $this->db->from('user');
        $this->db->where('NAME',$username);
        $this->db->or_where('PASSWORD',$password);
        $query = $this->db->get();
        return $query->num_rows() == 1;
    }
}