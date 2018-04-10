<?php
	class Menu extends CI_Controller{
		public function index(){
			echo "localhost/ffse1702016_codeigniter/index.php/menu/index";
			$this->load->view("Menu/index");
		}
	}
?>