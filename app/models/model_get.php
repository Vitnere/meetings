<?php 

class model_get extends meetings
{
	function getData($page)
	{
		$query=$this->$db->get_where("main_main",array("page"=>$page));
		return $query->result();
	}
}

?>