<?php
	class User_model extends CI_Model{
		public $primaryKey='user_id';
		public $table="lms_users";
		public function __construct(){
			parent::__construct();
			$this->load->database();
			
		}
		
	}
?>