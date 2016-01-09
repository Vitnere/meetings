<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function register()
    {
        $this->admin_access();
        $this->title = "Register a new user";
        $data = array();
        $this->content = $this->view('user/register', $data);
        $this->_show();
    }

    public function login()
    {
        $this->free_access();
        $this->title = "Login";
        $data = array();
        $this->content = $this->view('user/login', $data);
        $this->_show();
    }

    public function ajaxLogin()
    {
        $email = trim($this->input->post('email'));
        $password = trim($this->input->post('password'));

        $user = $this->user_model->checkLogin($email, $password);

        if (!empty($user)) {
            $data = array(
                'user' => $user->id
            );
            $this->session->set_userdata($data);
            echo $user->id;
        }
    }

    public function ajaxRegister()
    {
        $email = trim($this->input->post('email'));
        $password = trim($this->input->post('password'));
        $first_name = trim($this->input->post('first_name'));
        $last_name = trim($this->input->post('last_name'));
        if(valid_mail($email) && strlen($password)>5 && strlen($last_name)>5 && strlen($first_name)>5) {
            $user = $this->user_model->checkRegister($email, $password, $first_name,last_name);

            if (!empty($user)) {
                echo true;
            }
            else {
                echo false;
            }
        }
        echo false;
    }
    public function ajaxChangeEmail(){
        $email = trim($this->input->post('email'));
        if(valid_mail($email)) {
            $user = $this->user_model->changeEmail($email,$this->session->userdata('user'));

            if (!empty($user)) {
                echo true;
            }
            else {
                echo false;
            }
        }
        echo false;
    }


    public function logout()
    {
        $this->session->unset_userdata('user');
        redirect('user/index');
    }


    public function index()
    {
        $this->limit_access();
        $user = $this->user_model->get_user($this->session->userdata('user'));
        $data = array('user_email' => $user->email);
        $this->content = $this->view('user/index', $data);
        $this->_show();
    }
}

?>