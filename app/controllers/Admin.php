<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Gallery_model');
        $this->load->model('User_model');
    }

    public function home()
    {

        $data=array(
            'dahsboard'=>'admin/dashboard',
        );


        $this->load->view('admin/dashboard',$data);
    }

    public function gallery()
    {
        $data=array(
            'images'   => $this->Gallery_model->all(),
            'gallery'=>'admin/gallery'
        );


        $this->load->view('admin/gallery',$data);
    }

    public function users()
    {
        $data=array(
          'users'=>'admin/user'
        );

        $this->load->view('admin/user',$data);

    }

    public function get_user()/*get user data for user page*/
    {
        //load the method of model
        $data['result']=$this->User_model->get_user();
        //return the data in view
        $this->load->view('admin/user', $data);
    }


    public function add(){/*add new photo*/
        $rules =    [
            [
                'field' => 'categories_id',
                'label' => 'Category',
                'rules' => 'required'
            ],
            [
                'field' => 'caption',
                'label' => 'Caption',
                'rules' => 'required'
            ],
            [
                'field' => 'description',
                'label' => 'Description',
                'rules' => 'required'
            ]

        ];

        $this->form_validation->set_rules($rules);

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('Admin/add_image');
        }
        else
        {

            /* Start Uploading File */
            $config =   [
                'upload_path'   => './data/baners/',
                'allowed_types' => 'gif|jpg|png|jpeg',
                'max_size'      => 200,
                'max_width'     => 1024,
                'max_height'    => 768
            ];

            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload())
            {
                $error = array('error' => $this->upload->display_errors());

                $this->load->view('gallery/add_image', $error);
            }
            else
            {
                $file = $this->upload->data();
                //print_r($file);
                $data = [
                    'file'          => 'data/baners/' . $file['file_name'],
                    "categories_id"       => set_value("categories_id"),
                    'caption'      => set_value('caption'),
                    'description'   => set_value('description')

                ];

                $this->Gallery_model->create($data);
                $this->session->set_flashdata('message','New image has been added..');
                redirect('Admin/gallery');
            }
        }
    }



    public function edit($id){/*edit photo*/
        $rules =    [
            [
                'field' => 'caption',
                'label' => 'Caption',
                'rules' => 'required'
            ],
            [
                'field' => 'description',
                'label' => 'Description',
                'rules' => 'required'
            ],
            [
                'field' => 'category',
                'label' => 'Category',
                'rules' => 'required'
            ]
        ];

        $this->form_validation->set_rules($rules);
        $image = $this->Gallery_model->find($id)->row();

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('admin/edit_image',['image'=>$image]);
        }
        else
        {
            if(isset($_FILES["userfile"]["name"]))
            {
                /* Start Uploading File */
                $config =   [
                    'upload_path'   => 'data/baners/',
                    'allowed_types' => 'gif|jpg|png|jpeg',
                    'max_size'      => 100,
                    'max_width'     => 1024,
                    'max_height'    => 768
                ];

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload())
                {
                    $error = array('error' => $this->upload->display_errors());
                    $this->load->view('admin/edit_image',['image'=>$image,'error'=>$error]);
                }
                else
                {
                    $file = $this->upload->data();
                    $data['file'] = 'data/baners/' . $file['file_name'];
                    unlink($image->file);
                }
            }
            $data['categories_id']   = set_value("categories_id");
            $data['caption']      = set_value('caption');
            $data['description']   = set_value('description');


            $this->Gallery_model->update($id,$data);
            $this->session->set_flashdata('message','New image has been updated..');
            redirect('Admin/gallery');
        }
    }

    public function delete($id)/*delete photo*/
    {
        $this->Gallery_model->delete($id);
        $this->session->set_flashdata('message','Image has been deleted..');
        redirect('Admin/gallery');
    }



}