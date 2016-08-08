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

        $user_id = $this->session->userdata('user_id');

        $data=array(
            'content'=>'admin/events',
             'event'  =>$this->Event_model->get_events($user_id)
        );
        $this->load->view('admin/main',$data);
    }

    public function show(){//show add new event page
        $data=array(
            'content'=>'admin/add_events',
        );
        $this->load->view('admin/main',$data);
    }

    public function insert_event()//add new event
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
                "date"      =>set_value("date"),
                "user_id" => $this->session->userdata('user_id')
            ];
            $this->Event_model->insert_event($data);
            $this->session->set_flashdata('add', 'New event has been added..');
            redirect('Event/home_event');
        }
    }

    public function edit_event($id)/*edit event admin*/
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
                'event'=>$this->Event_model->rename_event($id)->row(),
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

    public function user_edit_event($id)/*edit event user*/
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
                'content'=>'pages/event_edit',
                'event'=>$this->Event_model->rename_event($id)->row(),
            );
            $this->load->view('pages/event_edit',$data);
        } else {
            $data=[
                "title"     =>set_value("title"),
                "description"=>set_value("description"),
                "date"      =>set_value("date")
            ];

            $this->Event_model->update_event($id, $data);
            $this->session->set_flashdata('update', 'Event has been updated..');
            redirect('home/index');
        }
    }

    public function delete_event($id)/*delete event*/
    {
        $this->Event_model->delete_event($id);
        $this->session->set_flashdata('delete','Event has been deleted..');
        redirect('Event/home_event');
    }

    public function invite($id){//admin invite to event
        $this->load->library('email');
        $rules =    [
            [
                'field' => 'name',
                'label' => 'Name',
                'rules' => 'required'
            ],
            [
                'field' => 'sender',
                'label' => 'Sender',
                'rules' => 'required'
            ],
            [
                'field' => 'receiver',
                'label' => 'Receiver',
                'rules' => 'required'
            ],
            [
                'field' => 'message',
                'label' => 'Invitation',
                'rules' => 'required'
            ]
        ];
        $this->form_validation->set_rules($rules);

        if ($this->form_validation->run() == FALSE)
        {
            $data=array(
                'content'=>'admin/invite',
                'event'=>$this->Event_model->rename_event($id)->row()
            );
            $this->load->view('admin/main',$data);
        }
        else
        {
            $this->email->from($this->input->post('sender'),$this->input->post('name'));
            $this->email->to($this->input->post('receiver'));
            $this->email->subject('Invite');
            $this->email->message($this->input->post('message'));

            if( $this->email->send() )
            {
               $this->session->set_flashdata('invite','You send invite');
                redirect('Event/home_event');
            }
            else {
                echo $this->email->print_debugger();
            }
        }
    }

    public function user_invite($id){//user invite to event
        $this->load->library('email');
        $rules =    [
            [
                'field' => 'name',
                'label' => 'Name',
                'rules' => 'required'
            ],
            [
                'field' => 'sender',
                'label' => 'Sender',
                'rules' => 'required'
            ],
            [
                'field' => 'receiver',
                'label' => 'Receiver',
                'rules' => 'required'
            ],
            [
                'field' => 'message',
                'label' => 'Invitation',
                'rules' => 'required'
            ]
        ];
        $this->form_validation->set_rules($rules);

        if ($this->form_validation->run() == FALSE)
        {
            $data=array(
                'content'=>'pages/event_invite',
                'event'=>$this->Event_model->rename_event($id)->row()
            );
            $this->load->view('pages/event_invite',$data);
        }
        else
        {
            $this->email->from($this->input->post('sender'),$this->input->post('name'));
            $this->email->to($this->input->post('receiver'));
            $this->email->subject('Invite');
            $this->email->message($this->input->post('message'));

            if( $this->email->send() )
            {
                $this->session->set_flashdata('invite','You send invite');
                redirect('home/index');
            }
            else {
                echo $this->email->print_debugger();
            }
        }
    }
}