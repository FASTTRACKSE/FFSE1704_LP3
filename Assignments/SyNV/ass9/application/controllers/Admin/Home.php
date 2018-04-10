<?php
	class Home extends CI_Controller{
		public function index(){
			$this->load->view("Templates/Admin/header");
			$this->load->view("Admin/Home/index");
			$this->load->view("Templates/Admin/footer");
		}
	}
?>