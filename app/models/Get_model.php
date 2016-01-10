<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Get_model extends CI_Model
{
	function getData($page)
	{
		$query=$this->db->get_where(TBL_MAIN_MAIN,array("page"=>$page));
		return $query->result();
	}
}

?>