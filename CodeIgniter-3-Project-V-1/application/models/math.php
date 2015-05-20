<?php 
	class Math extends CI_Model{
		public function adddata($x,$y){
			$z = $x + $y;
			return $z;
		}
		public function multidata($x,$y){
			$z = $x * $y;
			$data['result'] = $z;
			$this->load->view('result',$data);
		}
	}
?>