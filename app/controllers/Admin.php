<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Gallery_model');
        $this->load->model('User_model');
        $this->load->model('Category_model');
    }

    public function home()//load dashboard
    {
        $data=array(
            'content'=>'admin/dashboard'
        );
        $this->load->view('admin/main', $data);
    }

    /*--------------------Admin gallery----------------------------------------*/

    public function gallery()//load gallery
    {
        $data=array(
            'images'=>$this->Gallery_model->admin_all(),
            'content'=>'admin/gallery'
        );
        $this->load->view('admin/main', $data);
    }

    public function add()
    {/*add new photo*/
        $rules=[
            [
                'field'=>'categories_id',
                'label'=>'Category',
                'rules'=>'required'
            ],
            [
                'field'=>'caption',
                'label'=>'Caption',
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
                'content'=>'admin/add_image',
                'cat'=>$this->Category_model->find_cat(),
            );
            $this->load->view('admin/main', $data);
        } else {
            /* Start Uploading File */
            $config=[
                'upload_path'=>'./data/baners/',
                'allowed_types'=>'gif|jpg|png|jpeg',
                'max_size'=>200,
                'max_width'=>1024,
                'max_height'=>768
            ];
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload()) {
                $error=array('error'=>$this->upload->display_errors());
                $this->load->view('admin/add_image', $error);
            } else {
                $file=$this->upload->data();
                $data=[
                    'file'=>'data/baners/' . $file['file_name'],
                    "categories_id"=>set_value("categories_id"),
                    'caption'=>set_value('caption'),
                    'description'=>set_value('description'),
                    "user_id"=>$this->session->userdata('user_id')
                ];
                $this->Gallery_model->create($data);
                $this->session->set_flashdata('message', 'New image has been added..');
                redirect('admin/gallery');
            }
        }
    }

    public function edit($id)
    {/*edit photo*/
        $rules=[
            [
                'field'=>'categories_id',
                'label'=>'Category',
                'rules'=>'required'
            ],
            [
                'field'=>'caption',
                'label'=>'Caption',
                'rules'=>'required'
            ],
            [
                'field'=>'description',
                'label'=>'Description',
                'rules'=>'required'
            ],
        ];
        $this->form_validation->set_rules($rules);
        $image=$this->Gallery_model->find($id)->row();

        if ($this->form_validation->run() == FALSE) {
            $data=array(
                'content'=>'admin/edit_image',
                'image'=>$this->Gallery_model->find($id)->row(),
                'categories_id'=>$this->Category_model->find_cat()
            );
            $this->load->view('admin/main', $data);
        } else {
            if (isset($_FILES["userfile"]["name"])) {
                /* Start Uploading File */
                $config=[
                    'upload_path'=>'data/baners/',
                    'allowed_types'=>'gif|jpg|png|jpeg',
                    'max_size'=>1000,
                    'max_width'=>1920,
                    'max_height'=>1200
                ];
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload()) {
                    $error=array('error'=>$this->upload->display_errors());
                    $this->load->view('admin/edit_image', ['image'=>$image, 'error'=>$error]);
                } else {
                    $file=$this->upload->data();
                    $data['file']='data/baners/' . $file['file_name'];
                    unlink($image->file);
                }
            }
            $data['categories_id']=set_value("categories_id");
            $data['caption']=set_value('caption');
            $data['description']=set_value('description');

            $this->Gallery_model->update($id, $data);
            $this->session->set_flashdata('message', 'Image has been updated..');
            redirect('admin/gallery');
        }
    }

    public function delete($id)/*delete photo*/
    {
        $this->Gallery_model->delete($id);
        $this->session->set_flashdata('message', 'Image has been deleted..');
        redirect('Admin/gallery');
    }

    /*-----------------------Admin gallery end--------------------------------------------*/

    public function cattegories()//load cattegories
    {
        $data=array(
            'content'=>'admin/cattegories',
            'cat'=>$this->Category_model->find_cat(),
        );
        $this->load->view('admin/main', $data);
    }

    public function users()//load users
    {
        $data=array(
            'content'=>'admin/user',
            'user'=>$this->User_model->find_user()
        );
        $this->load->view('admin/main', $data);
    }

    public function add_user()/*load add_user view*/
    {
        $data=array(
            'content'=>'admin/add_user'
        );
        $this->load->view('admin/main', $data);
    }

    public function register()/*add new user from dashboard*/
    {
        /*validation rules*/
        $this->form_validation->set_rules('first_name', 'First_Name', 'trim|required|max_length[50]|min_length[2]');
        $this->form_validation->set_rules('last_name', 'Last_Name', 'trim|required|max_length[50]|min_length[2]');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|max_length[100]|min_length[5]|valid_email');
        $this->form_validation->set_rules('username', 'Username', 'trim|required|max_length[20]|min_length[4]|is_unique[users.username]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|max_length[50]|min_length[8]');
        $this->form_validation->set_rules('password2', 'Confirm Password', 'trim|required|max_length[50]|min_length[8]|matches[password]');
        $this->form_validation->set_rules('admin', 'Role', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/add_user');
        } else {
            if ($this->User_model->add_user()) {
                $this->session->set_flashdata('registered', 'You added new user');
                redirect('admin/add_user');
            }
        }
    }

    public function del_user($id)/*delete user*/
    {
        $this->User_model->del_user($id);
        $this->session->set_flashdata('delete', 'User has been deleted..');
        redirect('Admin/users');
    }
}