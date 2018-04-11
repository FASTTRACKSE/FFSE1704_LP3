<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class user extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('admin/user/index');

	}
	public function create()
	{
		$this->load->view('admin/user/create');
		
	}
	public function read()
	{
		$this->load->view('admin/user/read');
		
	}
		public function update()
	{
		$this->load->view('admin/user/update');
		
	}
	public function delete()
	{
		$this->load->view('admin/user/delete');
		
	}

}

/* End of file user.php */
/* Location: ./application/controllers/user.php */