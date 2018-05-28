  <?php


  class User extends MY_Controller{
    public function __construct()
    {
      parent::__construct();
      $this->load->helper(array('url','form'));
      $this->load->library('form_validation');
      $this->load->model('User_model');
    }


    public function search()
    {
      $data['query'] = $this->User_model->get_search();
      $this->load->view('result', $data);
    }
    public function view($id)
    {
      $data['user'] = $this->User_model->view_user($id);
      $data['_view'] = 'user/view';

      $this->load->view('viewuser', $data);
    }
    public function index()
    {

      $config['base_url'] = base_url('index.php/user/index');
      $config['total_rows'] = $this->User_model->countAll();
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
      $this->load->model('User_model');
      $data['user'] = $this->User_model->get_all_user($start,$config['per_page']);
      $this->load->view("user/index",$data);
    }


    public function add()
    {
      $this->load->view('user/add');
      if(isset($_POST) && count($_POST) > 0)
      {

        $datas['username'] = $this->input->post('username');
        $datas['firstname'] = $this->input->post('firstname');
        $datas['lastname'] = $this->input->post('lastname');
        $datas['email'] = $this->input->post('email');
        $datas['password'] = $this->input->post('password');
        $datas['image']= $this->input->post('picture');

          // $config['upload_path'] = './uploads';
          // $config['allowed_types'] = 'jpg|jpeg|png|gif';

          // $this->load->library('upload', $config);
          // $this->upload->initialize($config);

          // if ($this->upload->do_upload('picture')) {
          //   $uploadData = $this->upload->data();
          //   $datas['image'] = $uploadData['file_name'];
          // } else{
          //   $datas['image'] = '';
          // }
        $config['upload_path']          = './avatar/';
        $config['allowed_types']="jpg|jpge|png";
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if ( ! $this->upload->do_upload('avatar'))
        {
         echo $this->upload->display_errors();
       }
       else
       {
        $uploadData=$this->upload->data();
        $datas['image'] = $uploadData['file_name'];

          // $this->load->view('upload_success', $datas);
      }

      $this->form_validation->set_rules("username","Username", "required");
      $this->form_validation->set_rules("firstname","Firstname", "required");
      $this->form_validation->set_rules("lastname","Lastname", "required");
      $this->form_validation->set_rules("email","Email", "required");
      $this->form_validation->set_rules("password","Password", "required");
      if ($this->form_validation->run()==TRUE) {
       $user_id = $this->User_model->add_user($datas);

       redirect('user/index');
     }else{
       $datas['_view'] = 'user/add';
       $this->load->view('user/add',$datas);
     }
   }
 }

 public function edit($id)
 {
  $data['user'] = $this->User_model->get_user($id);

  if(isset($data['user']['id']))
  {
    if(isset($_POST) && count($_POST) > 0)
    {
      $params = array(
       'password' => $this->input->post('password'),
       'firstname' => $this->input->post('firstname'),
       'lastname' => $this->input->post('lastname'),
       'email' => $this->input->post('email'),
       'image'=> $this->input->post('image')
     );
      $config['upload_path']          = './avatar/';
      $config['allowed_types']="jpg|jpge|png";
      $this->load->library('upload', $config);
      $this->upload->initialize($config);
      if ( ! $this->upload->do_upload('image'))
      {
       echo $this->upload->display_errors();
     }
     else
     {
      $uploadData=$this->upload->data();
      $params['image'] = $uploadData['file_name'];
    }
    $this->User_model->update_user($id,$params);
    // var_dump($params);
    // die();
    redirect('user/index');
  }
  else
  {
    $data['_view'] = 'user/edit';
    $this->load->view('user/edit',$data);
  }
}
else
  show_error('Tài khoản không tồn tại.');
}

public function remove($id)
{
  $user = $this->User_model->get_user($id);


  if(isset($user['id']))
  {
    $this->User_model->delete_user($id);
    redirect('user/index');
  }
  else
    show_error('Tài khoản không tồn tại.');
}
function viewuser($id)
{
  $data['user'] = $this->User_model->get_user($id);
  $this->load->view('user/viewuser', $data);
}



}



