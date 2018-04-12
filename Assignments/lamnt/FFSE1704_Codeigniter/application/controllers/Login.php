<?php 
class Login extends CI_Controller{
	public function index(){
		$this->form_validation->set_rules('username', 'Tai khoan', 'required');
		$this->form_validation->set_rules('password', 'Mat khau', 'required');
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view("login/index");
		}
		else
		{
			$username=$this->input->post("username");
			$password=$this->input->post('password');
			if($username=='admin'&&$password=='123456'){
				$this->session->set_userdata('user',$username);
				redirect('admin/home/index');
			}else{
				redirect('login/index');
			}
		}
		
	}
	public function check_user(){
		
	}
	public function do_logout(){
		unset($_SESSION['user']);
		redirect('login/index');
	}
}
?>