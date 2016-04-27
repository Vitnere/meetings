<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Get_model extends CI_Model
{
	function getData($main_id)
	{
		$query=$this->db->get_where(TBL_MAIN,array("id"=>$id));
		return $query->first_row();
	}
}

?>