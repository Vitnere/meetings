<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Event_model');
    }

    public function home_event(){//all events show
        $data=array(
            'content'=>'admin/events'
        );
        $this->load->view('admin/main',$data);
    }

    public function show(){//add new event
        $data=array(
            'content'=>'admin/add_events'
        );
        $this->load->view('admin/main',$data);
    }

    public function insert_event()//insert event
    {
        $rules=[
            [
                'field'=>'title',
                'label'=>'Title',
                'rules'=>'required'
            ],
            [
            'field'=>'description',
            'label'=>'Description',
            'rules'=>'required'
            ]
        ];

        $this->form_validation->set_rules($rules);

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('Event/insert_event');
        } else {
            $data=[
                "title"=>set_value("title"),
                "description"=>set_value("description"),
                "date"=>set_value("date")
            ];
            $this->Event_model->insert_event($data);
            $this->session->set_flashdata('add', 'New event has been added..');
            redirect('Event/show');
        }
    }


}