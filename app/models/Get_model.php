<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Get_model extends CI_Model
{
	function getData($id)
	{
		$query=$this->db->get_where(TBL_MAIN,array("id"=>$id));
		return $query->result();
	}
}

?>