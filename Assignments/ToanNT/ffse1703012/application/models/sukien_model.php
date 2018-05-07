<?php
class Sukien_model extends CI_Model{

	public function get_baiviet($id)
	{
		$this->db->where('id',$id);
		$data = $this->db->get('ffse1703012_baiviet');
		return $data-> row_array();
	}

	public function get_all_baiviet($start,$per_page)
	{
        $this->db->limit($per_page,$start);
        $this->db->order_by('id', 'desc');
        return $this->db->get('ffse1703012_baiviet')->result_array();
    }

    public function add_baiviet($data)
    {
     return $this->db->insert('ffse1703012_baiviet',$data);
    }

    public function update_baiviet($id,$data)
    {
    $this->db->where('id',$id);
    return $this->db->update('ffse1703012_baiviet',$data);
    }

    public function delete_baiviet($id)
    {
    return $this->db->delete('ffse1703012_baiviet',array('id'=>$id));
    }

    public function getAll($start,$per_page){
    $this->db->limit($per_page,$start);
    $query=$this->db->get('ffse1703012_baiviet');
    $data = $query->result_array();
    return $data;
    }

    public function countAll(){
    return $this->db->count_all("ffse1703012_baiviet");
    }
}
?>