<?php
	class Users extends CI_Controller {
		public function index(){
			$this->load->view("templates/admin/header.php");
			$this->load->view("admin/user/index.php");
			$this->load->view("templates/admin/footer.php");
		}
		public function add(){
			$this->load->view("templates/admin/header.php");
			$this->load->view("admin/user/add.php");
			$this->load->view("templates/admin/footer.php");
		}
	};

	
?>
