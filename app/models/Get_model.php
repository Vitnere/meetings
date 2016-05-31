<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Get_model extends CI_Model
{
	function get_user()
	{

        $this->db->select('admin');
        $this->db->where('id', '10');
        $q = $this->db->get('users');
        $data = $q->row();


    }
}

?>