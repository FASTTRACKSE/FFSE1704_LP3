	<?php 
	class Home extends CI_Controller{
		public function __construct(){
			parent::__construct();
			if($this->session->has_userdata('user')==false){
				redirect('login/index');
			}
		
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