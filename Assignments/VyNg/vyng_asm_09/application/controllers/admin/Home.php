<?php
	class Home extends CI_Controller{
		public function index(){
			$this->load->view("templates/Admin/header");
			$this->load->view("Admin/Home/index");
			$this->load->view("templates/Admin/footer");

		}
	}
?>