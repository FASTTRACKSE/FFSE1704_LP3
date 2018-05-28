<?php
class Sukien_model extends CI_Model{

	public function get_baiviet($id)
	{
		$this->db->where('id',$id);
		$data = $this->db->get('ffse1703012_sukien');
		return $data-> row_array();
	}

	public function get_all_baiviet($start,$per_page)
	{
        $this->db->limit($per_page,$start);
        $this->db->order_by('id', 'desc');
        return $this->db->get('ffse1703012_sukien')->result_array();
    }

    public function add_baiviet($data)
    {
     return $this->db->insert('ffse1703012_sukien',$data);
    }

    public function update_baiviet($id,$data)
    {
    $this->db->where('id',$id);
    return $this->db->update('ffse1703012_sukien',$data);
    }

    public function delete_baiviet($id)
    {
    return $this->db->delete('ffse1703012_sukien',array('id'=>$id));
    }

    public function getAll($start,$per_page){
    $this->db->limit($per_page,$start);
    $query=$this->db->get('ffse1703012_sukien');
    $data = $query->result_array();
    return $data;
    }

    public function countAll(){
    return $this->db->count_all("ffse1703012_sukien");
    }
    public function sukien()
    {
        // $query= "SELECT * FROM ffse1703012_baiviet WHERE start > CURDATE() ORDER BY start";
        // $data=$this->db->query($query);
        // $data=$query->result_array();
        // return $data;
         $query = $this->db->query('SELECT * FROM ffse1703012_sukien WHERE start > CURDATE() ORDER BY start');
        return $query->result_array();
    }
    public function noibat()
    {
        $query=$this->db->query('SELECT * FROM `ffse1703012_sukien` WHERE noibat= 1');
        return $query->result_array();
    }

    public function get_events($start, $end)
{
    return $this->db->where("start >=", $start)->where("end <=", $end)->get("ffse1703012_sukien");
}
}
?>