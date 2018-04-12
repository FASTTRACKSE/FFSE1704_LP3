<?php
class User_model extends CI_Model
{
  function __construct()
  {
    parent::__construct();
    $this->load->database();
  }
public function checklogin($username,$password) {
    $query = "SELECT * FROM ffse1703012_user WHERE username ='$username' AND password = '$password' ";
    $result = $this->db->query($query);
    if ($result->num_rows()==1) {
      return true;
    } else {
      return false;
    }
  }
public function getAll($search,$start,$per_page)
{   $this->db->like('id', $search);
  $this->db->limit($per_page,$start);
  $query=$this->db->get('ffse1703012_user');
  $data = $query->result_array();
  return $data;
}
public function pt(){
  $result = $this->db->get('ffse1703012_user');
  return $result->num_rows();
}
public function countAll(){
  return $this->db->count_all($this->_user);
}

public function get_search() {
  $match = $this->input->post('search');
  $this->db->like('username',$match);
  $this->db->or_like('firstname',$match);
  $this->db->or_like('lastname',$match);
  $this->db->or_like('email',$match);
  $query = $this->db->get('ffse1703012_user');
  return $query->result();
}
public function get_user($id)
{
  return $this->db->get_where('ffse1703012_user',array('id'=>$id))->row_array();
}

public function get_all_user()
{
 $querys = "SELECT * FROM ffse1703012_user";
 $result = $this->db->query($querys);
 return $result->result_array();
}


public function add_user($datas)
{
  $this->db->insert('ffse1703012_user',$datas);
  return $this->db->insert_id();
}


public function update_user($id,$params)
{
  $this->db->where('id',$id);
  return $this->db->update('ffse1703012_user',$params);
}

public function delete_user($id)
{
  return $this->db->delete('ffse1703012_user',array('id'=>$id));
}

}
?>