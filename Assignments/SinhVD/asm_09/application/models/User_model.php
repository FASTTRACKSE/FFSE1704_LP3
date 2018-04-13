<?php
	class User_model extends CI_Model{
		public $primaryKey='user_id';
		public $table="lms_users";
		public function __construct(){
			parent::__construct();
			$this->load->database();
			
		}
		public function getItemLogin($username,$password){
		//	$sql = "SELECT * FROM lms_users WHERE 
		//	user_name='$username' and user_password='$password'";
		//	$result= $this->db->query($sql);
			$this->db->where('user_name',$username);
			$this->db->where('user_password',$password);
			$this->db->select('user_name');
			$result=$this->db->get($this->table);
			return $result->row_array();
		}
		public function getItem($id){
			$this->db->where($this->primaryKey,$id);
			$result = $this->db->get($this->table);
			return $result->row_array();
		}
		public function getAll(){
			//$sql="SELECT * FROM lms_users";
			$this->db->order_by('name','desc');
			$result=$this->db->get( $table);
			return $result->result_array();
		}
		public function addItem($data){
			$result = $this->db->insert($this->table, $data);
			return $result;
		}
		public function editItem($data,$id){
			$this->db->where($this->primaryKey, $id);
			$result = $this->db->update($this->table,$data);
			return $result;
		}
		public function deleteItem($id){
			$this->db->where($this->primaryKey, $id);
			$result = $this->db->delete($this->table);
			return $result;
		}
		public function checkUsername($us){
			$this->db->where('user_name',$us);
			$result =$this->db->get($this->table);
			return $result->num_rows();
		}
	}
?>