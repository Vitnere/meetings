<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Gallery_model');
        $this->load->model('User_model');
        $this->load->model('Category_model');
    }

    public function insert_cat()//insert new category
    {
        $rules=[
            [
                'field'=>'title',
                'label'=>'New category',
                'rules'=>'required'
            ]

        ];

        $this->form_validation->set_rules($rules);

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('Admin/insert_cat');
        } else {
            $data=[
                "title"=>set_value("title"),
            ];

            $this->Category_model->add_cat($data);
            $this->session->set_flashdata('add', 'New category has been added..');
            redirect('admin/cattegories');
        }
    }

    public function edit_cat($id)/*edit category*/
    {
        $rules=[
            [
                'field'=>'title',
                'label'=>'Title',
                'rules'=>'required'
            ],
        ];

        $this->form_validation->set_rules($rules);
        $category=$this->Category_model->rename_cat($id)->row();


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/edit_cat', ['category'=>$category]);
        } else {
            $data['title']   = set_value("title");

            $this->Category_model->update_cat($id, $data);
            $this->session->set_flashdata('update', 'Category has been updated..');
            redirect('admin/cattegories');
        }
    }

    public function del_cat($id)/*delete category*/
    {
        $this->Category_model->del_cat($id);
        $this->session->set_flashdata('delete','Category has been deleted..');
        redirect('Admin/cattegories');
    }

}

?>