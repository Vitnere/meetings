<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User_model extends CI_Model
{
    public function login_user($username, $password)
    {
        $enc_password = md5($password);


        $this->db->where('username',$username);
        $this->db->where('password',$enc_password);


        $result = $this->db->get('users');
       /* if($result->num_rows() == 1)
        {
            return $result->row(0)->id;
            return $result->row(0)->admin;
        }else
        {
            return false;
        }*/

        foreach ($result->result() as $user)
        {
            return $user->id;
            return $user->admin;


        }

    }

    public function create_member()
    {
        $enc_password = md5($this->input->post('password'));

        $data = array(

            'first_name' => $this->input->post('first_name'),
            'last_name'  => $this->input->post('last_name'),
            'email'      => $this->input->post('email'),
            'username'   => $this->input->post('username'),
            'password'   => $enc_password
        );

        $insert = $this->db->insert('users', $data);
        return $insert;
    }

    public function get_user()
    {
        $query=$this->db->get('users');
        return $query->row();
    }
}

?>