<?php

Class Users extends CI_Controller{
	public function index(){
		$this->load->view("Templates/admin/header");
		$this->lsoad->view("admin/users/index");
		$this->load->view("Templates/admin/footer");
	}
	public function add(){
		$this->load->view("Templates/admin/header");
		$this->load->view("admin/users/add");
		$this->load->view("Templates/admin/footer");
	}	
};
?>