<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_Controller
{

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
            'gallery'=>'admin/gallery',
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

}