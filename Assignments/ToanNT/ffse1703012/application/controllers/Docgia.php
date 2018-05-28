<?php
class Docgia extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}
	function index()
	{
		$this->load->model('Baiviet_model');
		$this->load->library('pagination');
        	// lay du lieu tu bang pagination
		$this->db->select('*');
		$this->db->from('ffse1703012_baiviet');
		$this->db->order_by('');
		$offset=$this->uri->segment(5);
		$limit=3;
		$this->db->limit($limit,$offset);
		$query_poster = $this->db->get();
		$config['base_url'] = base_url('docgia/index/page/');
		$config['total_rows'] = $this->db->count_all('ffse1703012_baiviet');
		$config['uri_segment']  = 5;
		$config['per_page'] = $limit;
		$config['prev_link'] 	= 'prev';
		$config['next_link'] 	= 'next';
		$config['last_link'] 	= 'Last';
		$config['first_link']	= 'First';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li><strong>';
		$config['cur_tag_close'] = '</strong></li>';
		$this->pagination->initialize($config);
		$paginator=$this->pagination->create_links();
		$input = array();
		$data['list'] = $this->Baiviet_model->get_list($input);
		$data['paginator'] = $paginator;
		$data['sobaitren1trang'] = $query_poster;
		$data['hello'] = $this->uri->segment(1);
		$data['temp'] = 'content' ;
		$this->load->view('content',$data);
	}
}
?>