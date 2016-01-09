<?php

class Site extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data = ['temp' => "This is temp data"];
		$this->title = "Register a new user";
		$this->content = $this->view('site/index', $data);
		$this->_show();
		 $this->home();//moj pokusaj load-a home funkcije

	}	
	
	public function home()
    {
        $this->load->view("main_login");
        $this->load->view("main_nav");
        $this->load->view("main_cover");
        $this->load->view("main_main");
        $this->load->view("main_footer");
    }
}