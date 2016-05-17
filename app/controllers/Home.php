<?php
/**
 * Created by PhpStorm.
 * User: Vitnere
 * Date: 20-Mar-16
 * Time: 9:16 AM
 */

class Home extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Gallery_model');
        $this->load->helper(['url','html','form']);
        $this->load->database();
        $this->load->library(['form_validation','session']);
    }

    public function index()//Show home page
    {
        $data=array(
            'content'=>'pages/home',
            'pic'=>'pictures/pform',
            'foot'=>'layouts/footer',
            'gallery'=>'gallery/index',
            'images'   => $this->Gallery_model->all(),
            'guest' =>'gallery/guest'
        );


        $this->load->view('layouts/main', $data);


    }




    public function show_second()//show how it works
    {
        $data=array(
            'content'=>'pages/home',
            'pic'=>'pictures/pform',
            'foot'=>'layouts/footer'
        );

        $data['content']='pages/second';
        $this->load->view('layouts/main', $data);
    }

    public function show_third()//show BILATERAL MEETINGS - HOW IT WORKS
    {
        $data=array(
            'content'=>'pages/home',
            'pic'=>'pictures/pform',
            'foot'=>'layouts/footer'
        );

        $data['content']='pages/third';
        $this->load->view('layouts/main', $data);
    }

    public function show_fourth()//show programme
    {
        $data=array(
            'content'=>'pages/home',
            'pic'=>'pictures/pform',
            'foot'=>'layouts/footer'
        );

        $data['content']='pages/fourth';
        $this->load->view('layouts/main', $data);
    }

    public function show_fifth()//show FAQ
    {
        $data=array(
            'content'=>'pages/home',
            'pic'=>'pictures/pform',
            'foot'=>'layouts/footer'
        );

        $data['content']='pages/fifth';
        $this->load->view('layouts/main', $data);
    }

    public function show_sixth()
    {
        $data=array(
            'content'=>'pages/home',
            'pic'=>'pictures/pform',
            'foot'=>'layouts/footer'
        );

        $data['content']='pages/sixth';
        $this->load->view('layouts/main', $data);
    }

}
?>