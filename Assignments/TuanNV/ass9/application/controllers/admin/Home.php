<?php
	class Home extends CI_Controller {
		public function index(){
			$this->load->view("templates/admin/header.php");
			$this->load->view("admin/home/index.php");
			$this->load->view("templates/admin/footer.php");
		}
	}
?>
