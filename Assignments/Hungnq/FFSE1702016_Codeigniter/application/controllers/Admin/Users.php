<?php
	class Users extends CI_Controller{
		public function index(){
			$this->load->view("Templates/users/header");
			$this->load->view("Admin/users/index");
			$this->load->view("Templates/users/footer");
		}
		public function add(){
			$this->load->view("Templates/users/header");
			$this->load->view("Admin/users/add");
			$this->load->view("Templates/users/footer");
		}
		public function info(){
			$this->load->view("Admin/users/info");
		}
		public function edit(){
			$this->load->view("Admin/users/edit");
		}
		public function delete(){
			$this->load->view("Admin/users/delete");
		}
	}
?>