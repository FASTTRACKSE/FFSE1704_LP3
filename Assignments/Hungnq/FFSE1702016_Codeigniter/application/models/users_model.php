<?php
	class Users_model extends CI_model{
		public $primaryKey='user_id';
		public $table='lms_users';
		public function __construct(){
			parent::__construct();
			$this->load->database();
		}
		public function getItemLogin($username, $password){
			$sql="SELECT * FROM lms_users WHERE user_name='$username' and user_password='$password'";
			$result=$this->db->query($sql);
			return $result->row_array();
		}
		public function getAll(){
			$sql="SELECT * FROM lms_users";
			$result=$this->db->query($sql);
			return $result->result_array();
		}
		public function addItem($data){
			$result = $this->db->insert($this->table, $data);
			return $result;
		}
		public function infoItem($id){
			$this->db->where('user_id',$id);
			$this->db->select('*');
			$result=$this->db->get('lms_users');
			return $result->result_array();
		}
		public function editItem($data,$id){
			$this->db->where('user_id',$id);
			$result=$this->db->update('lms_users',$data);
			return $result;
		}
		public function deleteItem($id){
			$this->db->where('user_id',$id);
			$result=$this->db->delete('lms_users');
			return $result;
		}
	}
?>