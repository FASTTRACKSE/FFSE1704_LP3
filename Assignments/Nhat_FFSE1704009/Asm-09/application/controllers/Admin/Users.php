<?php

Class Users extends CI_Controller{
	public function index(){
		//echo "Lê Khả Hồng Nhật";
		$this->load->view("Templates/Admin/header");
		$this->load->view("Admin/Users/index");
		$this->load->view("Templates/Admin/footer");
	}
	public function add(){
		//echo "Lê Khả Hồng Nhật";
		$this->load->view("Templates/Admin/header");
		$this->load->view("Admin/Users/add");
		$this->load->view("Templates/Admin/footer");
	}
	public function read(){
		//echo "Lê Khả Hồng Nhật";

		echo $this->input->post("username");

	}
	
};


?>