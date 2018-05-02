<?php
	class User extends CI_Controller{
		public function index(){
			$this->load->view("Admin/User/index");
		}
		public function create(){
			$this->load->view("Admin/User/create");
		}
		public function delete(){
			$this->load->view("Admin/User/delete");
		}
		public function read(){
			$this->load->view("Admin/User/read");
		}
		public function update(){
			$this->load->view("Admin/User/update");
		}
	}
?>