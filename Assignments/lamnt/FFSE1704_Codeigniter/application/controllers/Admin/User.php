<?php 
	class User extends MY_Controller{
		public function __construct(){
			parent::__construct();
		
		}
		public function index(){
			$this->load->view("templates/admin/header");
			$this->load->view("admin/user/index");
			$this->load->view("templates/admin/footer");
		}
		public function read($id="",$name=""){
			$data['id']=$id;
			$data['name']=$name;
			$this->load->view('admin/user/read',$data);
		}
		public function add(){
			$this->load->view('templates/admin/header');
			$this->load->view('admin/user/add');
			$this->load->view("templates/admin/footer");
		}
		public function do_add(){
			echo $this->input->post('username');
			echo $this->input->post('password');
			echo $this->input->post('email');
		}
	}
?>
