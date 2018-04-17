<?php 
	class Home extends MY_Controller{
		public function __construct(){
			parent::__construct();
		
		}
		public function index(){
			$this->load->view('Templates/Admin/header');
			$this->load->view('Admin/Home/index');
			$this->load->view('Templates/Admin/footer');
		}
		
	}
?>