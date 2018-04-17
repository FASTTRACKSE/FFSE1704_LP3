<?php
class Login extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('Users_model');
	}
	public function index(){
		$this->form_validation->set_rules('username','Tài khoản','required|min_length[2]');
		$this->form_validation->set_rules('password','Mật khẩu','required');
		if($this->form_validation->run() == FALSE){
			$this->load->view("login/index");
		} else {
			$username = $this->input->post("username");
			$password = $this->input->post("password");
			$data = $this->Users_model->getItemLogin($username,$password);
			if($data!=NULL){
				$this->session->set_userdata('user',$username);
				redirect('admin/home/index');
			} else {
				$this->session->set_flashdata('msg','Tài khoản hoặc mật khẩu không đúng!');
				redirect('login/index');
				/*
					$config['base_url']=base_url('index.php/admin/user/index');
					$config['totel_rows']=$this->User_model->countItems();
					$config['per_page']=2;
					$config['full_tag_open']='<ul class="pagination">';
					$config['full_tag_close']='</ul>';
					$config['full_tag_open'] = '<li><a>';
					$config['full_tag_close'] = '</a></li>';
					$config['first_link'] = 'Lui';
					$config['first_tag_open'] = '<div>';
					$config['first_tag_close'] = '</div>';
					$config['prev_link'] = 'Cuối Cùng';
					$config['prev_tag_open'] = '<div>';
					$config['prev_tag_close'] = '</div>';
				*/
			}
		}
	}
	public function add(){
		$this->form_validation->set_rules('username','Tài khoản','required');
		if($this->form_validation->run()==FALSE){
			$this->load->view('Templates/admin/header');
			$this->load->view('admin/user/add');
			$this->load->view('Templates/admin/footer');
		} else {
			$username=$this->input->post('username');
			if($this->Users_model->checkUsername($username)==1){
				$this->session->set_flashdata('msg','Da trung username');
				redirect("admin/user/add");
			}
			$fullname = $this->input->post('fullname');
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$data = array(
				'user_name'=>$username,
				'user_fullname'=>$fullname,
				'user_email'=>$email,
				'user_password'=>$password,
			);
			$result=$this->Users_model->addItem($data);
			if($result){
				
			}
		}
	}
	public function check_user(){
		$username = $this->input->post("username");
		$password = $this->input->post("password");
		if($username=="admin" && $password=="12345"){
			$this->session->set_userdata('user',$username);
			redirect('admin/home/index');
		} else {
			$this->session->set_flashdata('msg','Tài khoản hoặc mật khẩu không đúng!');
			redirect('login/index');
		}
	}
	public function do_logout(){
		unset($_SESSION['user']);
		redirect('login/index');
	}
}
?>