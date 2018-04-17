<?php
class Users extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('Users_model');
	}
	public function index(){
		$this->load->library('pagination');
		$config['base_url']=base_url('index.php/admin/users/index');
		$config['total_rows']=$this->Users_model->countItems();
		$config['per_page']=2;
		$config['full_tag_open']='<ul class="pagination">';
		$config['full_tag_close']='</ul>';
		/*$config['full_tag_open'] = '<li><a>';
		$config['full_tag_close'] = '</a></li>';
		$config['first_link'] = 'Lui';
		$config['first_tag_open'] = '<div>';
		$config['first_tag_close'] = '</div>';
		$config['prev_link'] = 'Cuối Cùng';
		$config['prev_tag_open'] = '<div>';
		$config['prev_tag_close'] = '</div>';*/
		$this->pagination->initialize($config);
		$result['user']=$this->Users_model->getAll();
		$this->load->view("Templates/users/header");
		$this->load->view("Admin/users/index",$result);
		$this->load->view("Templates/users/footer");
	}
	public function add(){
		$this->form_validation->set_rules('user_name','Tai khoan','required');
		if($this->form_validation->run()==FALSE){
			$this->load->view('Templates/admin/header');
			$this->load->view('admin/users/add');
			$this->load->view("Templates/admin/footer");
		}else{
			$username= $this->input->post('user_name');
			$password= $this->input->post('user_password');
			$email=$this->input->post("user_email");
			$fullname=$this->input->post('user_fullname');
			$data=array(
				'user_name'=>$username,
				'user_password'=>$password,
				'user_email'=>$email,
				'user_fullname'=>$fullname
			);
			$result = $this->Users_model->addItem($data);
			if($result){
				$this->session->set_flashdata("msg",'Them thanh cong');
				redirect("admin/users/index");
			}else{
				$this->session->set_flashdata("msg",'Them that bai');
				$this->load->view('Templates/admin/header');
				$this->load->view('admin/users/add');
				$this->load->view("Templates/admin/footer");
			}
		}
	}
	public function info($id){
		$result['user']=$this->Users_model->infoItem($id);
		$this->load->view("Templates/users/header");
		$this->load->view("Admin/users/info",$result);
		$this->load->view("Templates/users/footer");
	}
	public function edit($id){
		$this->form_validation->set_rules('user_name','Tai khoan','required');
		if($this->form_validation->run()==FALSE){
			$this->load->view('Templates/admin/header');
			$this->load->view('admin/users/add');
			$this->load->view("Templates/admin/footer");
		}else{
			$username= $this->input->post('user_name');
			$password= $this->input->post('user_password');
			$email=$this->input->post("user_email");
			$fullname=$this->input->post('user_fullname');
			$data=array(
				'user_name'=>$username,
				'user_password'=>$password,
				'user_email'=>$email,
				'user_fullname'=>$fullname
			);
			$result = $this->Users_model->editItem($data,$id);
			if($result){
				$this->session->set_flashdata("msg",'Them thanh cong');
				redirect("admin/users/index");
			}else{
				$this->session->set_flashdata("msg",'Them that bai');
				$this->load->view('Templates/admin/header');
				$this->load->view('admin/users/edit');
				$this->load->view("Templates/admin/footer");
			}
		}
	}
	public function delete($id){
		$result['user']=$this->Users_model->deleteItem($id);
		redirect("admin/users/index");
	}
	public function do_add(){
		echo $this->input->post('username');
		echo $this->input->post('password');
	}
}
?>