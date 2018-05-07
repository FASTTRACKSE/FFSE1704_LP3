<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Calendar1 extends CI_Controller {
	public function __construct() {
		Parent::__construct();
		$this->load->helper('url');
		$this->load->model("Calendar_model");
  }
  public function index()
  {
    $this->load->view('calendar');
  }

  public function get_events()
  {
    $start =$this->input->get("start");
    $end = $this->input->get("end");

    $startdt = new DateTime('now');
    $startdt->setTimestamp($start);
    $format = $startdt->format('Y-m-d');

    $enddt = new DateTime('now');
    $enddt->setTimestamp($end);
    $format2 = $enddt->format('Y-m-d');

    $events = $this->Calendar_model->get_events($format,$format2);
// var_dump($events);die();
    $data_events = array();

    foreach($events->result() as $r) {

     $data_events[] = array(
      "id" => $r['ID'],
      "title" => $r['title'],
      "start" => $r['start'],
      "end" => $r['end'],
      "description" => $r['description']
    );
   }

   echo json_encode(array("events" => $data_events));
        // var_dump($data_events);die();

 }
 public function view($id)
 {
  $data['list']=$this->Calendar_model->view($id);
  $this->load->view('thongtinsukien', $data);
  }
}
?>