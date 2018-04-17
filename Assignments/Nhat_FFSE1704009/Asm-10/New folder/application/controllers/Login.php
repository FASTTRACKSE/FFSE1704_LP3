<?php
	class Login extends CI_controller
	{
		public function __construct(){
			parent:: __construct();
			$this->load->model('User_model');
	    	
		}
		public function index()
	    {
	       $this->form_validation->set_rules('User','tai khoan','required|min_length[5]');
	       $this->form_validation->set_rules('pass','mat khau','required'); 
	       if($this->form_validation->run()==false){
	       	$this->load->view('Login/index');
	       }else{
	       	
			 $User= $this->input->post('User');//hien thi du lieu form
			 $email=  $this->input->post('email');
			 $pass= $this->input->post('pass');

			 //echo $User."-".$email."-".$pass;
			 if($User=='Joker'&&$pass=='941505'){
			 	$this->session->set_userdata('User',$User);//tao session
			 	//echo $this->session->User;
			 	//echo "Hack thanh cong";
			 	redirect("Admin/User/index");
			 }else{
			 	echo $this->session->set_flashdata('msg','tai khoan mat khau va email khong dung');
			 	redirect("Login/index"); //dieu huowng tr;//xoa session
			 }
			 	//$this->session->unset_tempdata('User')
	        	
	        
	       }
	    }
	    /*public function addItem($data){
	    	$this->db->insert("lms_users",$data);
	    	return $result;
	    }
	    public function deleteItem($data){
	    	$this->db->where("user_id",$id);
	    	$result = $this->db->delete("lms_users");
	    	return $result;
	    }*/

	}
?>