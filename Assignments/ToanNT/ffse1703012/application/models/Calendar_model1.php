<?php

class Calendar_model extends CI_Model{

	public function get_events($start, $end)
	{
		$result= $this->db->where("start >=", $start)->where("end <=", $end)->get("ffse1703012_baiviet");
		 return $result;
		 
	}
public function get_event($id)
{
    return $this->db->where("ID", $id)->get("ffse1703012_baiviet");
}


	public function view($id)
	{
		$this->db->where('id',$id);
		$data = $this->db->get('ffse1703012_baiviet');
		return $data-> result_array();
	}
}

?>