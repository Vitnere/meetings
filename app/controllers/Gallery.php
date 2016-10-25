<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Gallery_model');
        $this->load->model('Category_model');
    }

    public function index()
    {
        $user_id=$this->session->userdata('user_id');

        $data=[
            'images'=>$this->Gallery_model->all($user_id)
        ];

        $this->load->view('gallery/index', $data);

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

        $data=array(
            'cat'=>$this->Category_model->find_cat(),
        );

        if ($this->form_validation->run() == FALSE) {

            $this->load->view('gallery/add_image', $data);

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

                $this->load->view('gallery/add_image', $error);
            } else {
                $file=$this->upload->data();
                //print_r($file);
                $data=[
                    'file'=>'data/baners/' . $file['file_name'],
                    "categories_id"=>set_value("categories_id"),
                    'caption'=>set_value('caption'),
                    'description'=>set_value('description'),
                    'user_id'=>$this->session->userdata('user_id')
                ];

                $this->Gallery_model->create($data);
                $this->session->set_flashdata('message', 'New image has been added..');
                redirect('home/index');

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
            $this->load->view('gallery/edit_image', ['image'=>$image]);
        } else {
            if (isset($_FILES["userfile"]["name"])) {
                /* Start Uploading File */
                $config=[
                    'upload_path'=>'data/baners/',
                    'allowed_types'=>'gif|jpg|png|jpeg',
                    'max_size'=>100,
                    'max_width'=>1024,
                    'max_height'=>768
                ];

                $this->load->library('upload', $config);

                if (!$this->upload->do_upload()) {
                    $error=array('error'=>$this->upload->display_errors());
                    $this->load->view('gallery/edit_image', ['image'=>$image, 'error'=>$error]);
                } else {
                    $file=$this->upload->data();
                    $data['file']='data/baners/' . $file['file_name'];
                    unlink($image->file);
                }
            }
            $data['caption']=set_value('caption');
            $data['description']=set_value('description');
            $data['categories_id']=set_value("categories_id");

            $this->Gallery_model->update($id, $data);
            $this->session->set_flashdata('message', 'New image has been updated..');
            redirect('home/index');
        }
    }


    public function delete($id)/*delete photo*/
    {
        $this->Gallery_model->delete($id);
        $this->session->set_flashdata('message', 'Image has been deleted..');
        redirect('home/index');
    }
}