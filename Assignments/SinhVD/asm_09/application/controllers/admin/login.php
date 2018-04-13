<?php 
 class login extends CI_Controller{
 	 public function index(){
 	 	$this->load->view("login/index");
 	 }
  public function check_user(){
  	$username=$this->input->post("username");
   	$passwork=$this->input->post("passwork");
if ($username=='admin' && $passwork=='123456') {
	$this->session->set_userdata('user',$username);

         redirect('admin/home/index');
         //redirect điều hướng lạitrang

  }else{
 redirect('login/index');
      }
   }
   public function do_logout(){
   	unset($_session['user']);
   	redirect('login/index');
   }
 }

 ?>