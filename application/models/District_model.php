<?php
class District_model extends CI_Model {
	public function __construct() {
		parent::__construct();
		$this->load->database();
		
	}

	// public function getUsers() {
	// 	$query = $this->db->get('users');
	// 	return $query->result();
	// }

	public function selectDistrict() {
        try{
            $query = $this->db->query("SELECT d.id as dis_id, p.id as pro_id, CONCAT( d.name,', ', p.name,', ', 							c.name ) AS NAME
								FROM district d, province p, country c
								WHERE d.id_province = p.id and p.id_country=c.id");
            return $query->result();
        }
        catch(Exception $e){

        }

	}
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