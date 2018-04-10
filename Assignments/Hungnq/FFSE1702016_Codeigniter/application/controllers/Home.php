<?php
	class Home extends CI_Controller{
		public function index(){
			$this->load->view("Templates/admin/header");
			$this->load->view("Admin/home/index");
			$this->load->view("Templates/admin/footer");
		}
	}
?>