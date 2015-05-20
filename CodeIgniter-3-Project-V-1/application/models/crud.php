<?php 
	class Crud extends CI_Model{
		public function login($email,$password){
			$query = $this->db->query("select * from users where Email='$email' and Password='$password'");
			$data = $query->num_rows();
			return $data;
		}	
	}
?>