<?php 
class Calendar_Model extends CI_Model
{

public function get_events($start, $end)
{
    return $this->db->where("start >=", $start)->where("end <=", $end)->get("calendar_events");
}
}
 ?>