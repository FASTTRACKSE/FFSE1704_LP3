<?php
class Home extends CI_Controller{
public function index(){
	
	$this->load->view("Template/admin/header");
	$this->load->view("admin/home/index");
	$this->load->view("Template/admin/footer");

}
public function contact(){
	$this->load->view("Home/contact");
}

}
 ?>
