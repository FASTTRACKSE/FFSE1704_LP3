<?php 
	class Home extends MY_Controller{
		public function __construct(){
			parent::__construct();
		
		}
		public function index(){
			$this->load->view('templates/admin/header');
			$this->load->view('admin/home/index');
			$this->load->view('templates/admin/footer');
		}
		public function info(){

		}
	}
?>