<?php
	class User extends CI_Controller{
		public function index(){
			$this->load->view("Templates/Admin/header");
			$this->load->view("Admin/User/index");
			$this->load->view("Templates/Admin/footer");
		}

		public function add(){
			$this->load->view("Templates/Admin/header");
			$this->load->view("Admin/User/add");
			$this->load->view("Templates/Admin/footer");
		}
	}
?>