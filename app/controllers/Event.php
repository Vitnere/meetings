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
            'content'=>'admin/events',
             'event'  =>$this->Event_model->get_events()
        );
        $this->load->view('admin/main',$data);
    }

    public function show(){//add new event
        $data=array(
            'content'=>'admin/add_events',
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
                "title"     =>set_value("title"),
                "description"=>set_value("description"),
                "date"      =>set_value("date")
            ];
            $this->Event_model->insert_event($data);
            $this->session->set_flashdata('add', 'New event has been added..');
            redirect('Event/home_event');
        }
    }

    public function edit_event($id)/*edit category*/
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
           $data=array(
                'content'=>'admin/edit_event',
                'eve'=>$this->Event_model->rename_event($id)->row(),
            );
            $this->load->view('admin/main',$data);
        } else {
            $data=[
                "title"     =>set_value("title"),
                "description"=>set_value("description"),
                "date"      =>set_value("date")
            ];

            $this->Event_model->update_event($id, $data);
            $this->session->set_flashdata('update', 'Event has been updated..');
            redirect('Event/home_event');
        }
    }

    public function delete_event($id)/*delete category*/
    {
        $this->Event_model->delete_event($id);
        $this->session->set_flashdata('delete','Event has been deleted..');
        redirect('Event/home_event');
    }


}