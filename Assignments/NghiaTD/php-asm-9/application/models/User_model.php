<?php
  class User_model extends CI_Model{
    public $primaryKey='user_id';
    public $table="lms_users";
    public function __construct(){
      parent::__construct();
      $this->load->database();
    }
      public function getItemLogin($username,$password){
       // $sql = "SELECT * FROM lms_users WHERE 
       //  user_name='$username' and user_password='$password'";
       // $result= $this->db->query($sql);
        $this->db->where('user_name',$username);
        $this->db->where('user_password',$password);  
        $this->db->select('user_name');
        $result=$this->db->get($this->table);
        return $result->row_array();
    }
    public function getAll($cur_page,$per_page){
      $sql="SELECT * FROM lms_users LIMIT $cur_page,$per_page; ";
      $this->db->order_by('user_name','desc');
      // $result=$this->db->get( $this->table);
       $result=$this->db->query($sql);
      return $result->result_array();
    }
    public function countItems()
    {
       $sql="SELECT * FROM lms_users  ";
       $result=$this->db->query($sql);
       return $result->num_rows();

    }
    public function addItem($data){
      $result = $this->db->insert( $this->table, $data);//$result = $this->db->insert( $this->table, $data);để this để hàm hiểu table//insert vô data base
      return $result;
    }
    public function editItem($data,$id){
      $this->db->where($this->primaryKey,$id);
      $result = $this->db->update( $this->table,$data);
      return $result;
    }
    public function deleteItem($id){
      $this->db->where($primaryKey, $id);
      $result = $this->db->delete( $this->table);
      return $result;
    }
    public function checkUsername($us){
      $this->db->where('user_name',$us);

      $result =$this->db->get($this->table);
      // echo $result->num_rows();die();
      return $result->num_rows();
    }
    public function getItem($id){
      $this->db->where('user_id', $id);
      $this->db->select('user_name');
       $result =$this->db->get($this->table);
       return $result->row_array();

    }
    public function search($name){
      $this->db->like('user_name',$name);
      $this->db->select('*');
      $result =$this->db->get($this->table);
      return $result->result_array();

    }
}
?>