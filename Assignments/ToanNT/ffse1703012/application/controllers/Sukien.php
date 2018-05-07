<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sukien extends MY_Controller{

	public function __construct() {
		Parent::__construct();
    $this->load->library('form_validation');
    $this->load->model("Sukien_model");
  } 
   public function test()
    {
      $this->load->view('Events');
    }
  public function index()
  {
    $config['base_url'] = base_url('index.php/sukien/index');
    $config['total_rows'] = $this->Sukien_model->countAll();
    $config['per_page'] = 6;
    $config['use_page_numbers'] = TRUE;

    $config['full_tag_open'] = '<ul class="pagination my_pagination">';
    $config['full_tag_close'] = '</ul>';

    $config['first_link'] = '&laquo; First ';
    $config['first_tag_open'] = ' <li>';
    $config['first_tag_close'] = '</li> ';

    $config['last_link'] = ' Last &raquo;';
    $config['last_tag_open'] = '<li> ';
    $config['last_tag_close'] = '</li> ';

    $config['next_link'] = ' Next &raquo;';
    $config['next_tag_open'] = '<li> ';
    $config['next_tag_close'] = '</li> ';

    $config['prev_link'] = '&laquo; Previous ';
    $config['prev_tag_open'] = '<li>  ';
    $config['prev_tag_close'] = '</li> ';

    $config['cur_tag_open'] = '<li><a href="#" class="number current" title="3">';
    $config['cur_tag_close'] = '</a></li>';
    $config['num_tag_open'] = '<li>';
    $config['num_tag_close'] = '</li>';

    if (is_null($this->uri->segment(3))) {
      $start = 0;
    } else {
      $start=($this->uri->segment(3)-1)*$config['per_page'];
    }
    $this->load->library('pagination', $config);
    $this->pagination->initialize($config);
    $data['list'] = $this->Sukien_model->get_all_baiviet($start,$config['per_page']);
    $this->load->view('user_sukien/index',$data);

  }


  public function add()
  {
    if ($this->input->post("btnadd")) {
      $data["start"] = $this->input->post("bat_dau","Y-m-d");
      $data["end"] = $this->input->post("ket_thuc","Y-m-d");
      $data["title"] = $this->input->post("tieu_de");
      $data["noi_dung"] = $this->input->post("noi_dung");

      if (!empty($_FILES['picture']['name'])) {
        $config['upload_path'] = 'upload';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['file_name'] = $_FILES['picture']['name'];

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if ($this->upload->do_upload('picture')) {
          $uploadData = $this->upload->data();
          $data["hinh_anh"] = $uploadData['file_name'];
        } else{
          $data["hinh_anh"] = '';
        }
      }else{
        $data["hinh_anh"] = '';
      }
      $data["description"] = $this->input->post("mo_ta");
      $data["noibat"] = implode(",",$this->input->post("noibat"));

      $this->form_validation->set_rules("bat_dau", "Ngay bat dau", "required");
      $this->form_validation->set_rules("ket_thuc", "Ngay ket thuc", "required");
      $this->form_validation->set_rules("tieu_de", "Tieu de", "required");
      $this->form_validation->set_rules("noi_dung", "Noi dung", "required");
      $this->form_validation->set_rules("mo_ta", "mota", "required");
      if ($this->form_validation->run() == TRUE) {
        $this->db->insert("ffse1703012_baiviet", $data);
        redirect('sukien/index');
      }
    }
    $this->load->view("user_sukien/add_events");
  }

  public function edit($id)
  {
    $data['user'] = $this->Sukien_model->get_baiviet($id);
    $this->load->view("user_sukien/edit_events",$data);
  }
  public function update($id)    {
    $data["start"] = $this->input->post("bat_dau","Y-m-d");
    $data["end"] = $this->input->post("ket_thuc","Y-m-d");
    $data["title"] = $this->input->post("tieu_de");
    $data["noi_dung"] = $this->input->post("noi_dung");
    $data["description"] = $this->input->post("mo_ta");
    $data["noibat"] = implode(",",$this->input->post("noibat"));
    if (!empty($_FILES['picture']['name'])) {
      $config['upload_path'] = 'upload';
      $config['allowed_types'] = 'jpg|jpeg|png|gif';
      $config['file_name'] = $_FILES['picture']['name'];

      $this->load->library('upload', $config);
      $this->upload->initialize($config);

      if ($this->upload->do_upload('picture')) {
        $uploadData = $this->upload->data();
        $data["hinh_anh"] = $uploadData['file_name'];
      } else{
        $baiviet = $this->Sukien_model->get_baiviet($id);
        $data["hinh_anh"] = $baiviet['hinh_anh'];
      }

    }


    $this->Sukien_model->update_baiviet($id, $data);
    redirect('sukien/index');
  }



  public function remove($id)
  {
    $data = $this->Sukien_model->get_baiviet($id);

    if(isset($data['id']))
    {
      $this->Sukien_model->delete_baiviet($id);
      redirect('sukien/index');
    }
    else{
      show_error('Bài viết bạn muốn xóa không tồn tại.');
    }
}
}

?>