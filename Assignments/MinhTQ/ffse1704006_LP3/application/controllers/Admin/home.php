<?php 
class Home extends CI_Controller {
  public function index(){
  	$this->load->view('homeview/header.php');
  	$this->load->view('homeview/index.php');
  	$this->load->view('homeview/footer.php');
  }
}

 ?>