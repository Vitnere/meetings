<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User_model extends CI_Model
{
    // Is user logedin
    public function is_user_logedin()
    {
        if ($this->session->userdata('user') < 1) {
            return false;
        }
        $user = $this->model_user->get_user($this->session->userdata('user'));
        if (!$user) {
            return false;
        }
        return true;
    }

    public function get_user($id)
    {
        $row = $this->db->get_where(TBL_USERS, array('id' => $id))->first_row();
        $result = null;
        if (isset($row->id)) {
            $result = $row;
        }
        return $result;
    }

    public function checkLogin($email, $pass)
    {
        $row = $this->db->get_where(TBL_USERS, array('email' => $email, 'password' => sha1($pass)))->first_row();

        $result = array();
        if (isset($row->id)) {
            $result = $row;
        }
        return $result;
    }

    public function checkRegister($email, $pass, $first_name,$last_name)
    {
        $row = $this->db->get_where(TBL_USERS, array('email' => $email))->first_row();

        $result = array();
        if (!isset($row->id)) {

            $this->db->insert(TBL_USERS, array(
                'email' => $email,
                'password' => sha1($pass),
                'first_name' => $first_name,
                'last_name' => $last_name,
            ));
            $result = $this->db->get_where(TBL_USERS, array('email' => $email))->first_row();
        }
        return $result;
    }
    public function changeEmail($email,$user_id)
    {
        $row = $this->db->get_where(TBL_USERS, array('email' => $email))->first_row();
        $result = array();
        if (!isset($row->id) || $row->id==$user_id) {

            $this->db->where('id', $user_id);
            $this->db->update(TBL_USERS, array('email' => $email));

            $result = $this->db->get_where(TBL_USERS, array('id' => $user_id))->first_row();
        }
        return $result;

    }

}

?>