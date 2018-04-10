<?php
	class Home extends CI_Controller{
		public function index(){
			$this->load->view("Templates/admin/header");
			$this->load->view("Admin/home/index");
			$this->load->view("Templates/admin/footer");
		}
		public function contact(){
			$this->load->view("Home/contact");
		}
	}
?>