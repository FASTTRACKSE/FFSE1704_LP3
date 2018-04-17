<?php 
	class Home extends CI_Controller{
		public function index(){		
			$this->load->view("Home/index");
		}
		public function contact(){
			$this->load->view("Home/contact");
		}
	}
?>
