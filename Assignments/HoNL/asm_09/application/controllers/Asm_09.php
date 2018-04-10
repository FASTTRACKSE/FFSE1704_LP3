<?php
Class Home extends CI_Controller{
	public function index(){
		//echo "Lê Khả Hồng Nhật";
		$this->load->view("Templates/Admin/header");
		$this->load->view("Admin/Home/index");
		$this->load->view("Templates/Admin/footer");
	}

	
}
?>
