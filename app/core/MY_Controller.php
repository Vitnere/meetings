<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
    public $content = "**no content**";

    public $title = "Meeting";
    public $document_title = "Meeting";

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model('user_model');
    }

    public function _show()
    {
        if ($this->title != "") {
            $this->document_title = $this->title . " | " . $this->document_title;
        }
        $loged_name = $this->user_model->get_user($this->session->userdata('user'));
        if (!isset($loged_name)) {
            $user_name = null;
            $admin = 0;
        } else {
            $user_name = $loged_name->first_name . ' '. $loged_name->last_name;
            $admin = $loged_name->admin;
        }

        $this->load->view('main', array('content' => $this->content,
            'title' => $this->title,
            'document_title' => $this->document_title,
            'loged_name' => $user_name,
            'loged_admin' => $admin));
    }

    public function view($file, $data = array())
    {
        return $this->load->view($file, $data, true);
    }

    protected function limit_access()
    {
        $user = $this->session->userdata('user');
        if ($user == "") {
            redirect('user/login');
        }
    }

    protected function free_access()
    {
        $user = $this->session->userdata('user');
        if ($user != "") {
            redirect('user/index');
        }
    }

    protected function admin_access()
    {
        $this->limit_access();
        $user = $this->user_model->get_user($this->session->userdata('user'));
        if ($user->admin != 1) {
            redirect('user/login');
        }
    }
}//class
