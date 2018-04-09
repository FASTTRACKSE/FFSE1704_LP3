<?php 
class user extends CI_controller{
	public function index()
	{
		$this->load->view("templates/admin/header");
		$this->load->view("admin/user/index");
	
		$this->load->view("templates/admin/footer");
	}
	public function add()
	{
		$this->load->view("templates/admin/header");
		$this->load->view("admin/user/add");
	
		$this->load->view("templates/admin/footer");
	}
} 

	 

?>