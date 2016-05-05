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
        $url = $this->do_upload();
        $title = $_POST["title"];
        $this->Photo_model->save($title, $url);
    }
    private function do_upload()
    {
        $type = explode('.', $_FILES["pic"]["name"]);
        $type = strtolower($type[count($type)-1]);
        $url = "./assets/img".uniqid(rand()).'.'.$type;
        if(in_array($type, array("jpg", "jpeg", "gif", "png")))
            if(is_uploaded_file($_FILES["pic"]["tmp_name"]))
                if(move_uploaded_file($_FILES["pic"]["tmp_name"],$url))
                    return $url;
        return "";
    }
}
