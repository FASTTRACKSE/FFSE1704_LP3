<?php
	class Home extends CI_Controller {
		public function index() {
			$this->load->view("Admin/header.php");
			$this->load->view("Admin/index.php");
			$this->load->view("Admin/footer.php");
		}
		public function abc($id="",$name=""){
$data['id']=$id;
$data['name']=$name;
			$this->load->view("Admin/User/read",$data);
		}
	}
?>