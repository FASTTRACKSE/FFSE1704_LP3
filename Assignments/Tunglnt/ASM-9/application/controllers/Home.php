<?php
	class Home extends CI_Controller {
		public function index(){
			$this->load->view("admin/home/index");
		}
		public function contact(){
			$this->load->view("admin/home/contact");
		}
	}
?>