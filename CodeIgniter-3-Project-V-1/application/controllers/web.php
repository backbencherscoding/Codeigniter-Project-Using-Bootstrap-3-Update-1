<?php 
	class Web extends CI_Controller{
		public function index(){
			$this->load->view('header');
			$this->load->view('home');
			$this->load->view('footer');
		}
		public function about(){
			$this->load->view('header');
			$this->load->view('about');
			$this->load->view('footer');
		}
		public function login(){
			$this->load->view('header');
			$this->load->view('login');
			$this->load->view('footer');
		}
		public function signup(){
			$this->load->view('header');
			$this->load->view('signup');
			$this->load->view('footer');
		}
	}
?>