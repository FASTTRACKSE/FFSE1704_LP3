<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller{

  public function __construct(){

    parent::__construct();
    $this->load->helper("form","url");
    $this->load->library('form_validation');
    $this->load->model("User_model");
    $this->load->library('session');

  }
  public function index(){
    $this->form_validation->set_rules('username',"username",'required|min_length[1]',array('required'=>'vui lòng nhập %s'));
    $this->form_validation->set_rules('password',"password",'required', array('required'=>'vui lòng nhập password'));
    if($this->form_validation->run()== FALSE){
      $this->load->view('login');
    } else {
      $username= $this->input->post("username");
      $password= $this->input->post("password");
      if($this->User_model->checklogin($username,$password)){
       $this->session->set_userdata("user","$username");
       redirect("user/index");
     } else {
       $this->session->set_flashdata('msg','Tài Khoản Hoặc Mật Khẩu Không Đúng');
       redirect('login');
     }
   }
 }
 public function logout(){
  $this->session->sess_destroy();
  redirect('login/index');
}

}