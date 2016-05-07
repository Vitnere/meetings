<?php
/**
 * Created by PhpStorm.
 * User: Vitnere
 * Date: 20-Mar-16
 * Time: 9:16 AM
 */

class Home extends CI_Controller
{
    public function index()//Show home page
    {
        $data['content'] = 'pages/home';
        $this->load->view('layouts/main',$data);
    }


    public function show_second()//show how it works
    {
        $data['content'] = 'pages/second';
        $this->load->view('layouts/main',$data);
    }

    public function show_third()//show BILATERAL MEETINGS - HOW IT WORKS
    {
        $data['content'] = 'pages/third';
        $this->load->view('layouts/main',$data);
    }

    public function show_fourth()//show programme
    {
        $data['content'] = 'pages/fourth';
        $this->load->view('layouts/main',$data);
    }

    public function show_fifth()//show FAQ
    {
        $data['content'] = 'pages/fifth';
        $this->load->view('layouts/main',$data);
    }

    public function show_sixth()
    {
        $data['content'] = 'pages/sixth';
        $this->load->view('layouts/main',$data);
    }
}

?>