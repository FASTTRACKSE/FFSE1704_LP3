<?php

Class User extends MY_Controller{
	public function __construct(){
			parent::__construct();
			$this->load->model("User_model");
	}
	public function index(){
			$this->load->view("Admin/User/index");
		}
	public function create(){
		//$this->form_validation->set_ruls('user','tai khoan','require');
		//if($this->form_validation->run()==false){
		$this->load->view("Admin/User/create");
		//}else{
			//$User= $this->input->post('username');
			//$pass= $this->input->post('password');
			//$email=$this->input->post("email");
			//$fullname=$this->input->post('fullname');
			//$data=array(
					//'user_name'=>$User,
					//'user_password'=>$pass,
					//'user_email'=>$email,
					//'user_fullname'=>$fullname
			//);
			//$result = $this->user_model->addItem($data);
			//if($result){
				//$this->session->set_flashdata("msg","them thanh cong");
				//redirect("Admin/User/create");
			//}
		//}
	}
	public function read(){
		
		$this->load->view("Admin/User/read");
	}
	public function update(){
		$this->load->view("Admin/User/update");
	}
	public function delete(){
		$this->load->view("Admin/User/delete");
	}
};


?>