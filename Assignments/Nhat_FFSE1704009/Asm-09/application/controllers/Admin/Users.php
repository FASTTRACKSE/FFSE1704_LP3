<?php
Class Users extends CI_Controller{
	public function index(){
		$this->load->view("Admin/Users/index");
	}
	public function add(){
		$this->load->view("Admin/Users/add");
	}
	public function info(){
		$this->load->view("Admin/Users/info");
	}
	public function edit(){
		$this->load->view("Admin/Users/edit");
	}
	public function delete(){
		$this->load->view("Admin/Users/delete");
	}
	
}
?>
