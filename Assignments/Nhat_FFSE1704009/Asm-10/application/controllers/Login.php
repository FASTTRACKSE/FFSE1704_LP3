<?php
class login extends CI_controller
{
	public function __construct(){
		parent:: __construct();
		$this->load->model('User_models');

	}
	public function index()
	{
		$this->form_validation->set_rules('User','tai khoan','required|min_length[5]');
		$this->form_validation->set_rules('pass','mat khau','required'); 
		if($this->form_validation->run()==false){
			$this->load->view('Login/index');
		}else{

			 $User= $this->input->post('User');//hien thi du lieu form
			 $pass= $this->input->post('pass');
			 $bien= $this->User_models->Login($User,$pass);//gan du lieu dang nhap tu  model
			  //echo count($bien);die();
			 //print_r($bien);die();
			 if(count($bien)!=0){//kiem tra du lieu ton tai khong
			 		$this->session->set_userdata('User',$User);//tao session
			 	//echo $this->session->User;
			 	//echo "Hack thanh cong";
			 		redirect("Admin/Users/index");
			 	}else{
			 		echo "sai mk";
			 		echo $this->session->set_flashdata('msg','tai khoan mat khau va email khong dung');
			 	redirect("Login/index"); //dieu huowng tr;
			 }


			 //echo $User."-".$email."-".$pass;
			 
			 	//$this->session->unset_tempdata('User')//xoa session


			}
		}
		public function Logout(){
			unset($_SESSION['user']);
			redirect('Login/index');
		}

	}
	?>


