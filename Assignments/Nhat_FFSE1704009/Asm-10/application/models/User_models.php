<?php
class User_models extends CI_Model{
	public $primaryKey='user_id';
	public $table="lms_users";
	public function __construct(){
		parent::__construct();
		$this->load->database();//kết nối data base
		
	}
	public function Login($name,$pass){//đăng nhập
                $sql = "SELECT * FROM `lms_users` WHERE user_name='$name' AND user_password='$pass'";//
                $result = $this->db->query($sql);//up lenh SELECT * FROM.... len database
                return $result->result_array();//chuyen du lieu ve kieu mang
            }
            
            public function index($id){
            	$this->db->where($this->primaryKey,$id);
            	$result = $this->db->get($this->table);
            	return $result->row_array();
            }
            public function getAll(){
            	$this->db->order_by('name','desc');
            	$result=$this->db->get( $table);
            	return $result->result_array();
            }
            public function add($data){
            	$result = $this->db->insert($this->table, $data);
            	return $result;
            }
            public function update($data,$id){
            	$this->db->where($this->primaryKey, $id);
            	$result = $this->db->update($this->table,$data);
            	return $result;
            }
            public function delete($id){
            	$this->db->where($this->primaryKey, $id);
            	$result = $this->db->delete($this->table);
            	return $result;
            }
            public function read($id){
                
                // $result = $this->db->query($sql);
                // return $result->result_array();//chuyen du lieu ve kieu mang

                $this->db->where('user_id',$id);// $sql = "SELECT * FROM `lms_users` WHERE user_id='$id'";//
                $this->db->select('*');//up lenh SELECT * FROM.... len database
             $result =$this->db->get($this->table);
             return $result->row_array();            }
         }
         ?>