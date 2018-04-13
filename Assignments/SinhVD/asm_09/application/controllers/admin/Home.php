<?php 
 class home extends MY_Controller{
 	public function index(){
 		$this->load->view("teamplates/admin/header");
 	  	$this->load->view("admin/home/index");
 	  	$this->load->view("teamplates/admin/footer");

 	}
 }

 ?>