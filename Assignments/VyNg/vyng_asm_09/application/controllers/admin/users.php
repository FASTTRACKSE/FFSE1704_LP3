<?php
	class users extends CI_Controller{
		public function index(){
			$this->load->view("templates/Admin/header");
			$this->load->view("Admin/users/index");
			$this->load->view("templates/Admin/footer");

		}

		public function add(){
			$this->load->view("templates/Admin/header");
			$this->load->view("Admin/users/add");
			$this->load->view("templates/Admin/footer");

		}
	}
?>