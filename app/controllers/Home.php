<?php

class Home extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Gallery_model');
        $this->load->model('Category_model');
        $this->load->model('Event_model');
    }

    public function index()//Show home page
    {
        $user_id = $this->session->userdata('user_id');
        $username = $this->session->userdata('username');
        $category = $this->Category_model->get_category();

        $data=array(
            'guest' =>'gallery/guest',
            'content'=>'pages/home',
            'pic'=>'pictures/pform',
            'foot'=>'layouts/footer',
            'gallery'=>'gallery/index',
            'images'   => $this->Gallery_model->all($user_id),
            'count_events'=>$this->Event_model->count_events(),
            'event'=>$this->Event_model->user_get_events($username),
        );

        foreach ($category as $key => $value) {
            $data['category'][$key]['title']=$value->title;
            $data['category'][$key]['r_images']=$this->Gallery_model->filter_by_category($value->id);
            }
        $this->load->view('layouts/main', $data);
    }

    public function show_second()//show "how it works"
    {
        $user_id = $this->session->userdata('user_id');
        $username = $this->session->userdata('username');
        $category = $this->Category_model->get_category();

        $data=array(
            'content'=>'pages/second',
            'pic'=>'pictures/pform',
            'foot'=>'layouts/footer',
            'gallery'=>'gallery/index',
            'images'   => $this->Gallery_model->all($user_id),
            'guest' =>'gallery/guest',
             'count_events'=>$this->Event_model->count_events(),
            'event'=>$this->Event_model->user_get_events($username),
        );

        foreach ($category as $key => $value) {
            $data['category'][$key]['title']=$value->title;
            $data['category'][$key]['r_images']=$this->Gallery_model->filter_by_category($value->id);
        }
        $this->load->view('layouts/main', $data);
    }

    public function show_third()//show "BILATERAL MEETINGS - HOW IT WORKS"
    {
        $user_id = $this->session->userdata('user_id');
        $username = $this->session->userdata('username');
        $category = $this->Category_model->get_category();

        $data=array(
            'content'=>'pages/third',
            'pic'=>'pictures/pform',
            'foot'=>'layouts/footer',
            'gallery'=>'gallery/index',
            'images'   => $this->Gallery_model->all($user_id),
            'guest' =>'gallery/guest',
            'count_events'=>$this->Event_model->count_events(),
            'event'=>$this->Event_model->user_get_events($username),
        );

        foreach ($category as $key => $value) {
            $data['category'][$key]['title']=$value->title;
            $data['category'][$key]['r_images']=$this->Gallery_model->filter_by_category($value->id);
        }
        $this->load->view('layouts/main', $data);
    }

    public function show_fourth()//show "programme"
    {
        $user_id = $this->session->userdata('user_id');
        $username = $this->session->userdata('username');
        $category = $this->Category_model->get_category();

        $data=array(
            'content'=>'pages/fourth',
            'pic'=>'pictures/pform',
            'foot'=>'layouts/footer',
            'gallery'=>'gallery/index',
            'images'   => $this->Gallery_model->all($user_id),
            'guest' =>'gallery/guest',
            'count_events'=>$this->Event_model->count_events(),
            'event'=>$this->Event_model->user_get_events($username),
        );

        foreach ($category as $key => $value) {
            $data['category'][$key]['title']=$value->title;
            $data['category'][$key]['r_images']=$this->Gallery_model->filter_by_category($value->id);
        }
        $this->load->view('layouts/main', $data);
    }

    public function show_fifth()//show "FAQ"
    {
        $user_id = $this->session->userdata('user_id');
        $username = $this->session->userdata('username');
        $category = $this->Category_model->get_category();

        $data=array(
            'content'=>'pages/fifth',
            'pic'=>'pictures/pform',
            'foot'=>'layouts/footer',
            'gallery'=>'gallery/index',
            'images'   => $this->Gallery_model->all($user_id),
            'guest' =>'gallery/guest',
            'count_events'=>$this->Event_model->count_events(),
            'event'=>$this->Event_model->user_get_events($username),
        );

        foreach ($category as $key => $value) {
            $data['category'][$key]['title']=$value->title;
            $data['category'][$key]['r_images']=$this->Gallery_model->filter_by_category($value->id);
        }

        $this->load->view('layouts/main', $data);
    }

    public function show_sixth() //show "contact"
    {
        $user_id = $this->session->userdata('user_id');
        $username = $this->session->userdata('username');
        $category = $this->Category_model->get_category();

        $data=array(
            'content'=>'pages/sixth',
            'pic'=>'pictures/pform',
            'foot'=>'layouts/footer',
            'gallery'=>'gallery/index',
            'images'   => $this->Gallery_model->all($user_id),
            'guest' =>'gallery/guest',
            'count_events'=>$this->Event_model->count_events(),
            'event'=>$this->Event_model->user_get_events($username),
        );

        foreach ($category as $key => $value) {
            $data['category'][$key]['title']=$value->title;
            $data['category'][$key]['r_images']=$this->Gallery_model->filter_by_category($value->id);
        }
        $this->load->view('layouts/main', $data);
    }
}
?>