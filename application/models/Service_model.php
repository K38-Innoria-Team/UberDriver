<?php
class Service_model extends CI_Model {
	public function __construct() {
		parent::__construct();
		$this->load->database();
		
	}

	// public function getUsers() {
	// 	$query = $this->db->get('users');
	// 	return $query->result();
	// }

	public function selectService($idProvince) {
        try{
            $query = $this->db->query("SELECT id, name
            FROM service s, pro_ser p
            WHERE s.id = p.id_ser and id_pro = '$idProvince'");
            return $query->result();
        }
        catch(Exception $e){

        }

	}
}