<?php 
	class User extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->model("User_model");
		
		}
		public function index(){
			$this->load->view("templates/admin/header");
			$this->load->view("admin/user/index");
			$this->load->view("templates/admin/footer");
		}
		public function read($id="",$name=""){
			$data['id']=$id;
			$data['name']=$name;
			$this->load->view('admin/user/read',$data);
		}
		public function add(){
			$this->form_validation->set_rules('username','Tai khoan','required');
			if($this->form_validation->run()==FALSE){
				$this->load->view('templates/admin/header');
				$this->load->view('admin/user/add');
				$this->load->view("templates/admin/footer");
			}else{
				$username= $this->input->post('username');
				$password= $this->input->post('password');
				$email=$this->input->post("email");
				$fullname=$this->input->post('fullname');
				$data=array(
					'user_name'=>$username,
					'user_password'=>$password,
					'user_email'=>$email,
					'user_fullname'=>$fullname
				);
				$result = $this->User_model->addItem($data);
				if($result){
					$this->session->set_flashdata("msg",'Them thanh cong');
					redirect("admin/user/index");
				}else{
					$this->session->set_flashdata("msg",'Them that bai');
					$this->load->view('templates/admin/header');
					$this->load->view('admin/user/add');
					$this->load->view("templates/admin/footer");
				}
			}
			
		}
	}
?>
