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

        //query
        $result = $this->db->get('users');

        //return result to User controller
        foreach ($result->result() as $user)
        {
            return $user;
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


}

?>