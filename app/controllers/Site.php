<?php

class Site extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data = ['temp' => "This is temp data", 'results'=>$this->model_get->getData("main")];
		$this->title = "Register a new user";
		$this->content = $this->view('site/index', $data);
		$this->_show();

	}	
	
}