<?php 
class Users extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model("User_models");
		
	}
	public function index(){
				 $this->db->order_by("user_id", "desc");//xap xep id giam dan
			//$this->load->view("Templates/Admin/header");
				 $this->load->view("Admin/Users/index");
			//$this->load->view("Templates/Admin/footer");

		//$query=$this->db->query("SELECT * FROM lms_users order By user_id");//lay du lieu dtabase
		//$query=$this->db->get("lms_users");//rut nagn cau lenh lay du lieu database

		// $data=$query->result_array();//chuyen du lieu ve kieu mang
		// echo "<pre>";
		// print_r($data);
		// echo "</pre>";



				}
				public function read($id){
					$data['user']=$this->User_models->read($id);
					$this->load->view('Admin/Users/read',$data);
					//print_r($data);
				}

			
			public function add(){
					$this->form_validation->set_rules('username','Name','required');//kiem tra o Name dda nhap chua
					if($this->form_validation->run()==FALSE){
							//$this->load->view('Templates/Admin/header');						
						$this->load->view('Admin/Users/add');
							//$this->load->view("Templates/Admin/footer");
					}else{
						//$this->load->view('Admin/Users/add');
						$username= $this->input->post('username');
						$query=$this->db->query("SELECT * FROM lms_users WHERE user_name = '$username'");
						$data=$query->result_array();
						//echo count($data);die();
						if(count($data)!=0){
							echo "user name trung";
						}else{
							$fullname= $this->input->post('fullname');
							$password= $this->input->post('password');
							$email=$this->input->post("email");
							$data=array(
								'user_name'=>$username,
								'user_fullname'=>$fullname,
								'user_email'=>$email,
								'user_password'=>$password,

							);
							$result =$this->db->insert("lms_users", $data);
						//$result = $this->User_models->add($data);
							if($result){
								echo $this->session->set_flashdata("msg",'Them thanh cong');
								redirect("Admin/Users/index");
							}else{
								echo $this->session->set_flashdata("msg",'Them that bai');
								//$this->load->view('Templates/Admin/header');
								$this->load->view('Admin/Users/add');
								//$this->load->view("Templates/Admin/footer");
							}
						}

		 // $data=array(
   //          "user_name" => "kaito",
   //          "user_fullname" => "kaito",
   //          "user_password" => "941505",
   //          "User_email"    => "2"
   //      );
   //      $this->db->insert("lms_users", $data);

					}

				}
				public function update($id){
					$this->form_validation->set_rules('fullname','Name','required');

					if($this->form_validation->run()==FALSE){
						$this->load->view('Admin/Users/update',$id);
					}else{
						//$username= $this->input->post('username');
						$fullname= $this->input->post('fullname');
						$password= $this->input->post('password');
						$email=$this->input->post("email");
						$data=array(
							//'user_name'=>$username,
							'user_fullname'=>$fullname,
							'user_email'=>$email,
							'user_password'=>$password,
						);
						$this->db->where("user_id", $id);
						if($this->db->update("lms_users", $data)){
							redirect('Admin/Users/index');
						}else{
							echo "Update That bai";
						}
					}
				}
				public function delete($id){
					$this->User_models->delete($id);
					$this->load->view('Admin/Users/index');
				}

				// public function update($id){
				// 	$data['item']= $this->User_models->getItem($id);
				// 	$this->form_validation->set_rules('user_name','Name','required');

				// 	if($this->form_validation->run()==FALSE){
				// 		$this->load->view('Admin/Users/update',$data);
				// 	}else{
				// 		$fullname= $this->input->post('fullname');
				// 		$password= $this->input->post('password');
				// 		$email=$this->input->post("email");
				// 		if(empty($password)){
				// 			$password=$data['item']['password'];
				// 		}
				// 	};	
				// 	$data_update=array(
				// 			'user_fullname'=>$user_fullname,
				// 			'user_email'=>$user_email,
				// 			'user_password'=>$user_password,
				// 		);
				// 	if($this->User_models->editItem($data_update,$id)){
				// 		echo $this->session->set_flashdata("msg",'sua thanh cong');
				// 			redirect("Admin/Users/index");
				// 		}else{
				// 			echo $this->session->set_flashdata("msg",'sua that bai');
				// 				//$this->load->view('Templates/Admin/header');
				// 			$this->load->view('Admin/Users/index');
				// 				//$this->load->view("Templates/Admin/footer");
				// 		}

				// }
			}
			?>
