<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Gallery_model');
        $this->load->model('User_model');
    }

    public function register()/*register user*/
    {
        /*validation rules*/
        $this->form_validation->set_rules('first_name','First_Name', 'trim|required|max_length[50]|min_length[2]');
        $this->form_validation->set_rules('last_name','Last_Name','trim|required|max_length[50]|min_length[2]');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|max_length[100]|min_length[5]|valid_email');
        $this->form_validation->set_rules('username','Username','trim|required|max_length[20]|min_length[4]|is_unique[users.username]');
        $this->form_validation->set_rules('password','Password','trim|required|max_length[50]|min_length[8]');
        $this->form_validation->set_rules('password2', 'Confirm Password', 'trim|required|max_length[50]|min_length[8]|matches[password]');


        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('users/register');

        }
        else
        {
            if($this->User_model->create_member())
            {
                $this->session->set_flashdata('registered','You are now registered and can log in');
                redirect('home/index');
            }
        }
    }


    public function login()/*login user*/
    {
        /*validation*/
        $this->form_validation->set_rules('username','Username','trim|required|min_length[3]');
        $this->form_validation->set_rules('password','Password','trim|required|min_length[4]|max_length[50]');

        if($this->form_validation->run() == FALSE)
        {
            $this->load->view('users/login');
        }

        else
        {
            //Get from post
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            //get id
            $result = $this->User_model->login_user($username, $password);

            //Validate user
            if($result)
            {

                //set user data array
                $user_data=array(
                  'user_id'=>$result->id,
                    'username'=>$username,
                    'admin'=>$result->admin,
                    'logged_in'=>true
                );

                /*set user_data*/
                $this->session->set_userdata($user_data);

                    if($result->admin==1)
                {

                    $data=array(
                        'content'=>'admin/dashboard'
                    );

                    $this->load->view('admin/main',$data);
                }

                   /* else if($result->admin==2)
                    {
                        echo ('super_user');*/

                        /*info data*/
                       /* echo '<pre>';
                        print_r($this->session->userdata());
                        echo '<pre>';
                    }*/

                    else
                        {
                            redirect('home/index');
                        }

                $this->session->set_flashdata('login_success', 'You are now logged in');
                /*redirect('home/index');*/
            } else {
                //Set error
                $this->session->set_flashdata('login_failed', 'Sorry, the login info that you entered is invalid');
                /*redirect('home/index');*/
            }
        }
    }

    public function logout()/*logout user*/
    {
        //unset session data
        $this->session->unset_userdata('admin');
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('logged_in');
        $this->session->unset_userdata('username');
        $this->session->sess_destroy();


        redirect('home/index');

    }












}

?>