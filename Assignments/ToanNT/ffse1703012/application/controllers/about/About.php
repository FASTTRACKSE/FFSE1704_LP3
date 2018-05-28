<?php 

class About extends CI_controller
{
	public function index()
	{
		$data = array();
		$this->load->model('muser');
        // Gọi function trong model
		$data['result'] = $this->muser->getAll();
		$this->load->view('about', $data);
	}
}

?>