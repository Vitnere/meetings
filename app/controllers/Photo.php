<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Photo extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Photo_model');
    }

    public function index()
    {
        $this->load->view('home');
    }
    public function save()
    {
        $file_name = $this->do_upload();
        $title = $_POST["title"];
        $this->Photo_model->save($title, $file_name);

        $this->session->set_flashdata('saved','You picture is saved!');
        redirect('home/index');
    }
    private function do_upload()
    {
        $type = explode('.', $_FILES["pic"]["name"]);
        $type = strtolower($type[count($type)-1]);
        $file_name = uniqid(rand()).'.'.$type;
        $url = "./data/baners/".$file_name;
        if(in_array($type, array("jpg", "jpeg", "gif", "png")))
            if(is_uploaded_file($_FILES["pic"]["tmp_name"]))
                if(move_uploaded_file($_FILES["pic"]["tmp_name"],$url))
                    return $file_name;
        return "";
    }

}
