<?php
class Driver_model extends CI_Model {
	public function __construct() {
		parent::__construct();
		$this->load->database();
		
	}

	// public function getUsers() {
	// 	$query = $this->db->get('users');
	// 	return $query->result();
	// }

	public function selectDriver($name) {
        try{
            $query = $this->db->query("SELECT dr.ID, FIRSTNAME, LASTNAME, PHONE, EMAIL, CONCAT(d.NAME,', ',p.NAME,', ',c.NAME) AS DIS_NAME, s.NAME AS SER_NAME, ENABLE
									FROM driver dr, service s, district d, province p, country c
									WHERE dr.ID_DISTRICT = d.ID and dr.ID_SERVICE = s.ID and d.ID_PROVINCE = p.ID and p.ID_COUNTRY = c.ID AND d.NAME like '%$name%'");
            return $query->result();
        }
        catch(Exception $e){

        }

	}

	public function insertDriver($password, $firstname, $lastname, $birthday, $phone, $email, $createdate, $enable, $id_district, $id_service)
	{
        try{
            $sql = "insert into driver(PASSWORD,FIRSTNAME,
			LASTNAME,BIRTHDAY,PHONE,EMAIL,CREATE_DATE,
			ENABLE,ID_DISTRICT,ID_SERVICE) values('$password',
			'$firstname','$lastname','$birthday','$phone','$email',
			'$createdate','$enable','$id_district','$id_service')";
            $query = $this->db->query($sql);
//            return $sql;
        }
        catch(Exception $e){

        }

	}
}