<?php 
class User extends CI_controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
		$this->load->helper('url','form');
		$this->load->library('form_validation');
	}
	public function index($cur_page=0)
	{	
		if($this->input->post('search')){
			$name=$this->input->post('sub');
			echo $name;
			$items=$this->User_model->search($name);
			if($items){
				$data['items']=$items;
				echo'<pre>';
				print_r($items);
				echo'</pre>';
				$dem=count($items);
				echo $dem;	
				$this->load->library('pagination');
		$config['base_url']=base_url('index.php/admin/user/index');

		$config['total_rows']=$dem;
		// var_dump($config['total_rows']);die();
		$config['per_page']=2;
		$config['full_tag_open']='<ul class="pagination">';
		$config['full_tag_close']='</ul>';
		$config['num_tag_open']="<li>";
		$config['num_tag_close']="</li>";
		$config['cur_tag_open']="<li> <a>";
		$config['cur_tag_close']="</li> </a>";
		$config['next_link']="TIếp theo";
		$config['next_tag_open']="<li>";
		$config['next_tag_close']="</li>";
		$config['prev_link']="Quay lại";
		$config['prev_tag_open']="<li>";
		$config['prev_tag_close']="</li>";
		$config['last_link']="Cuối cùng";
		$config['last_tag_open']="<li>";
		$config['last_tag_close']="</li>";
		$config['first_link']="Đầu tiên";
		$config['first_tag_open']="<li>";
		$config['first_tag_close']="</li>";







		$items= $this->User_model->search($cur_page,$config['per_page']);
		$data['items']=$items;
		$this->pagination->initialize($config);
		$this->load->view("templates/admin/header");
		$this->load->view("admin/user/index",$data);
	
		$this->load->view("templates/admin/footer");
			}
			else {
				echo "cancel";
			}
		}
		else {
			$this->load->library('pagination');
		$config['base_url']=base_url('index.php/admin/user/index');

		$config['total_rows']=$this->User_model->countItems();
		// var_dump($config['total_rows']);die();
		$config['per_page']=2;
		$config['full_tag_open']='<ul class="pagination">';
		$config['full_tag_close']='</ul>';
		$config['num_tag_open']="<li>";
		$config['num_tag_close']="</li>";
		$config['cur_tag_open']="<li> <a>";
		$config['cur_tag_close']="</li> </a>";
		$config['next_link']="TIếp theo";
		$config['next_tag_open']="<li>";
		$config['next_tag_close']="</li>";
		$config['prev_link']="Quay lại";
		$config['prev_tag_open']="<li>";
		$config['prev_tag_close']="</li>";
		$config['last_link']="Cuối cùng";
		$config['last_tag_open']="<li>";
		$config['last_tag_close']="</li>";
		$config['first_link']="Đầu tiên";
		$config['first_tag_open']="<li>";
		$config['first_tag_close']="</li>";







		$items= $this->User_model->getAll($cur_page,$config['per_page']);
		$data['items']=$items;
		$this->pagination->initialize($config);
		$this->load->view("templates/admin/header");
		$this->load->view("admin/user/index",$data);
	
		$this->load->view("templates/admin/footer");
	}
		}
		
	public function read($id="1")
	{
		$data['items']=$this->User_model->getItem($id);
		$this->load->view('admin/user/read',$data);
	}
	public function them()
	{
	
		$this->load->view('admin/user/them');
	}
	public function add()
	{	
		$this->form_validation->set_rules('username','Tài khoản','required');
		if($this->form_validation->run()==FALSE){

		$this->load->view("templates/admin/header");
		$this->load->view("admin/user/add");
	
		$this->load->view("templates/admin/footer");
	}else {
		$username= $this->input->post('username');
		if ($this->User_model->checkUsername($username)>=1) {
			$this->session->set_flashdata("msg",'Đã trùng username');
			redirect("admin/user/add");	
		}
		$password= $this->input->post('password');
		$email = $this->input->post('email');
		$fullname = $this->input->post('fullname');
		$data=array(
			'user_name'=>$username,
			'user_password'=>$password,
			'user_email'=>	$email,
			'user_fullname'=>$fullname
		);
		$result = $this->User_model->addItem($data);
	if($result){
					$this->session->set_flashdata("msg",'Them thanh cong');
					redirect("admin/user/index");
				}else{
					$this->session->set_flashdata("msg",'Them that bai');
					// $this->load->view('templates/admin/header');
					// $this->load->view('admin/user/add');
					// $this->load->view("templates/admin/footer");
				}
			}
			
		}
		public function edit($id)
		{
			$this->form_validation->set_rules('username','Tài khoản','required');
		if($this->form_validation->run()==FALSE){

$result = $this->User_model->getItem($id);
		$data['users']=$result;
		$this->load->view("templates/admin/header");
		$this->load->view("admin/user/edit",$data);
		
		$this->load->view("templates/admin/footer");
		$this->load->view("admin/user/edit");
	
	}else {
		

		$username= $this->input->post('username');
	
		$password= $this->input->post('password');
		$email = $this->input->post('email');
		$fullname = $this->input->post('fullname');
		$data=array(
			'user_name'=>$username,
			'user_password'=>$password,
			'user_email'=>	$email,
			'user_fullname'=>$fullname
		);
		$result = $this->User_model->editItem($data,$id);
		if($result){
			$this->session->set_flashdata('msg', 'sua thành công');
			redirect('admin/user/index');
		}
		else {
			$this->session->set_flashdata('msg', 'sửa thất bại');
			redirect('admin/user/index');
		}
		}
		}
	}
?>