<?php 
class user extends CI_controller{
	public function index()
	{
		$this->load->view("templates/admin/header");
		$this->load->view("admin/user/index");
	
		$this->load->view("templates/admin/footer");
	}
	public function add()
	{
		$this->load->view("templates/admin/header");
		$this->load->view("admin/user/add");
	
		$this->load->view("templates/admin/footer");
	}
	// public function read($username="admin",$password="123456"){
	// 	$username = $this -> input -> post('username');
	// 	$password = $this -> input -> post('password');

	// 	$data['ten']=$username;
	// 	$data['mk']=$password;
	// 	$this->load->view("admin/user/read",$data);
	// 	if($username = $this -> input -> post('username') && $password = $this -> input -> post('password')){
	// 		$this->load->view("admin/user/read");
	// 	}
	// 	else {
	// 		echo " đăng nhập thất bại";
	// 	}
	public function them(){
		$this->load->view("templates/admin/header");
		$this->load->view("admin/user/them");
	
		$this->load->view("templates/admin/footer");
	}
	public function do_add($username="",$password=""){
		$username = $this -> input -> post('username').'<br>';
		$password =  $this -> input -> post('password');
		if ($this -> input -> post($username)=='admin' &&  $this -> input -> post($password)=='123456') {
			echo 'Đăng nhập thành công';
		}
		else {
			echo "đăng nhập thất bại";
		}

	}

	}



	 

?>