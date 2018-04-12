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

    public function index()
    {
        $this->load->model('User_model');
        $data['user'] = $this->User_model->get_all_user();
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

            $this->form_validation->set_rules("username","Username", "required");
            $this->form_validation->set_rules("firstname","Firstname", "required");
            $this->form_validation->set_rules("lastname","Lastname", "required");
            $this->form_validation->set_rules("email","Email", "required");
            $this->form_validation->set_rules("password","Password", "required");
            if ($this->form_validation->run()==TRUE) {
               $user_id = $this->User_model->add_user($datas);
               redirect('user/index');
           }else{
               $data['_view'] = 'user/add';
               $this->load->view('user/add',$data);
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
             'email' => $this->input->post('email')
         );

            $this->User_model->update_user($id,$params);
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
        $this->load->view('viewuser', $data);
}



}



