<?php 
class User extends CI_Controller {
  public function index(){
  	$this->load->view('userview/header.php');
  	$this->load->view('userview/user.php');
  	$this->load->view('userview/footer.php');
  }
  public function add(){
  	$this->load->view('userview/header.php');
  	$this->load->view('userview/add.php');
  	$this->load->view('userview/footer.php');
  }
}

 ?>