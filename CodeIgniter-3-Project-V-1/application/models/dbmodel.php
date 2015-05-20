<?php 
	class Dbmodel extends CI_Model{
		public function get(){
			$query = $this->db->query('select * from users');
			$data = $query->result();
			echo $data->num_rows();
		}
		public function set($data){
			$this->db->insert("users",$data);
		}
		public function set2($data){
			$this->db->insert_batch("users",$data);
		}
		public function change($data){
			$this->db->update("users",$data,"id=1");
		}
		public function change2($data){
			$this->db->update_batch("users",$data,"id");
		}
		public function remove($data){
			$this->db->delete("users",$data);
		}
		public function removeall($data){
			$this->db->empty_table($data);
		}
	}
?>