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
	public function read($name="",$password=""){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		if($username=="admin" && $password=="12345"){
			$data['username'] = $username;
			$this->load->view('Admin/Users/read',$data);
		} 
		else {
			$data['error'] = 'Account is invalid';
			$this->load->view('Admin/Users/read',$data);
		}
	}
}
?>