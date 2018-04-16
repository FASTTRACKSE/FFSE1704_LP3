<?php /*if ( ! defined('BASEPATH')) exit('No direct script access allowed');*/

class Login extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('User_model');
	}
	public function index(){
		$this->form_validation->set_rules('username', 'tài khoản', 'required|min_length[5]');
		$this->form_validation->set_rules('password', 'mật khẩu', 'required');
		if ($this->form_validation->run()==FALSE ) {
			$this->load->view("login/index");	
		}

		else {
			



	// public function check_user()
	// {
			$username =$this->input->post('username');
			$password = $this->input->post('password');
			$data =$this->User_model->getItemLogin($username,$password);
			if($data!=NULL){
				// if($username=='admin' && $password=='123456'){
					$this->session->set_userdata('user',$username);

					redirect('admin/home/index');
				}
				else {
					$this->session->set_flashdata('msg','tài khoản hoặc mạt khẩu k đúng!');
			// unset($_SESSION['user']);
			// echo $this->session->user;
					redirect('login/index');
				}

			}
		
	// public function do_logout(){
	// 	unset($_SESSION['user']);
	// 	redirect('login/index');

	}
}
?>




<!--  // End of file login.php 
 // Location: ./application/controllers/login.php  -->