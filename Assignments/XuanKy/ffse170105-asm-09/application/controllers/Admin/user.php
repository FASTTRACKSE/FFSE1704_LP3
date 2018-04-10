<?php
	class User extends CI_Controller {
		public function index(){
			$this->load->view("user/header.php");
			$this->load->view("user/users.php");
			$this->load->view("user/footer.php");
		}
		public function add(){
			$this->load->view("add/header.php");
			$this->load->view("add/add.php");
			$this->load->view("add/footer.php");
		}
	}
?>