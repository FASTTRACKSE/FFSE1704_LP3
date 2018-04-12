<?php 
class Login extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('User_model');
	}
	public function index(){

		$this->form_validation->set_rules('username', 'Tài khoản', 'required|min_length[5]');
		$this->form_validation->set_rules('password', 'Mật khẩu', 'required');
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view("login/index");
		}
		else
		{
			$username=$this->input->post("username");
			$password=$this->input->post('password');
			$data = $this->User_model->getItemLogin($username,$password);
			if($data!=NULL){
				$this->session->set_userdata('user',$data);
				redirect('admin/home/index');
			}else{
				$this->session->set_flashdata('msg','Tài khoản hoặc mật khẩu không đúng!');
				redirect('login/index');
			}
		}
		
	}
	public function do_logout(){
		unset($_SESSION['user']);
		redirect('login/index');
	}
}
?>