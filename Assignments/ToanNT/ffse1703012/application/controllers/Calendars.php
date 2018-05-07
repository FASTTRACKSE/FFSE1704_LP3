<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Calendars extends CI_Controller 
{

    public function __construct() {
        Parent::__construct();
        $this->load->model("Calendar_model");
    }

    public function index() 
    {
        $this->load->view("calendar/index.php", array());
    }

    public function get_events() 
    {
        // Our Stand and End Dates
        $start = $this->common->nohtml($this->input->get("start"));
        $end = $this->common->nohtml($this->input->get("end"));

        $startdt = new DateTime('now'); // setup a local datetime
        $startdt->setTimestamp($start); // Set the date based on timestamp
        $format = $startdt->format('Y-m-d');

        $enddt = new DateTime('now'); // setup a local datetime
        $enddt->setTimestamp($end); // Set the date based on timestamp
        $format2 = $enddt->format('Y-m-d');

        $events = $this->Calendar_model->get_events($format, 
            $format2);

        $data_events = array();

        foreach($events->result() as $r) { 

            $data_events[] = array(
                "id" => $r->ID,
                "title" => $r->title,
                "description" => $r->description,
                "end" => $r->end,
                "start" => $r->start
            );
        }

        echo json_encode(array("events" => $data_events));
        exit();
    }
}