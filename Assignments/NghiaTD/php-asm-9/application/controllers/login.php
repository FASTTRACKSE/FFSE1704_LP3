<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login extends MY_Controller {

		public function index(){
		$this->load->view("login/index");
	}

	public function check_user()
	{
		$username = $this -> input -> post('username');
		$password =  $this -> input -> post('password');
	

		if($username=='admin' && $password=='123456'){
			$this->session->set_userdata('user',$username);
			
			redirect('admin/home/index');
		}
		else {
			
			// unset($_SESSION['user']);
			// echo $this->session->user;
			redirect('login/index');
		}
	}
	public function do_logout(){
		unset($_SESSION['user']);
		redirect('login/index');

	}
}



/* End of file login.php */
/* Location: ./application/controllers/login.php */