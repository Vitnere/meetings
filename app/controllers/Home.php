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
        $this->load->model('Category_model');
    }


    public function index()//Show home page
    {
        $user_id = $this->session->userdata('user_id');
        $category = $this->Category_model->get_category();


        //$category = $this->Category_model->get_category();

        $data=array(
            'content'=>'pages/home',
            'pic'=>'pictures/pform',
            'foot'=>'layouts/footer',
            'gallery'=>'gallery/index',
            'images'   => $this->Gallery_model->all($user_id),
            'guest' =>'gallery/guest'
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

        $data=array(
            'content'=>'pages/home',
            'pic'=>'pictures/pform',
            'foot'=>'layouts/footer',
            'gallery'=>'gallery/index',
            'images'   => $this->Gallery_model->all($user_id),
            'r_images'   => $this->Gallery_model->org_filter()->first_row(),
            'guest' =>'gallery/guest'
        );

        $data['content']='pages/second';
        $this->load->view('layouts/main', $data);
    }

    public function show_third()//show "BILATERAL MEETINGS - HOW IT WORKS"
    {
        $user_id = $this->session->userdata('user_id');

        $data=array(
            'content'=>'pages/home',
            'pic'=>'pictures/pform',
            'foot'=>'layouts/footer',
            'gallery'=>'gallery/index',
            'images'   => $this->Gallery_model->all($user_id),
            'r_images'   => $this->Gallery_model->admin_all(),
            'guest' =>'gallery/guest'
        );

        $data['content']='pages/third';
        $this->load->view('layouts/main', $data);
    }

    public function show_fourth()//show "programme"
    {
        $user_id = $this->session->userdata('user_id');

        $data=array(
            'content'=>'pages/home',
            'pic'=>'pictures/pform',
            'foot'=>'layouts/footer',
            'gallery'=>'gallery/index',
            'images'   => $this->Gallery_model->all($user_id),
            'r_images'   => $this->Gallery_model->admin_all(),
            'guest' =>'gallery/guest'
        );

        $data['content']='pages/fourth';
        $this->load->view('layouts/main', $data);
    }

    public function show_fifth()//show "FAQ"
    {
        $user_id = $this->session->userdata('user_id');

        $data=array(
            'content'=>'pages/home',
            'pic'=>'pictures/pform',
            'foot'=>'layouts/footer',
            'gallery'=>'gallery/index',
            'images'   => $this->Gallery_model->all($user_id),
            'r_images'   => $this->Gallery_model->admin_all(),
            'guest' =>'gallery/guest'
        );

        $data['content']='pages/fifth';
        $this->load->view('layouts/main', $data);
    }

    public function show_sixth() //show "contact"
    {
        $user_id = $this->session->userdata('user_id');

        $data=array(
            'content'=>'pages/home',
            'pic'=>'pictures/pform',
            'foot'=>'layouts/footer',
            'gallery'=>'gallery/index',
            'images'   => $this->Gallery_model->all($user_id),
            'r_images'   => $this->Gallery_model->admin_all(),
            'guest' =>'gallery/guest'
        );

        $data['content']='pages/sixth';
        $this->load->view('layouts/main', $data);
    }

}
?>