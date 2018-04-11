<?php 
class Home extends MY_controller{
	public function index()
	{
		$this->load->view("templates/admin/header");
		$this->load->view("admin/home/index");
		$this->load->view("templates/admin/footer");
	}
	
} 
	

?>