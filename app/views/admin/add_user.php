<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="<?php echo base_url();?>assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Add User</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Custom CSS style-->
    <link href="<?=base_url()?>assets/css/style.css" rel="stylesheet">

    <!-- Bootstrap core CSS     -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" />


    <!--  Light Bootstrap Table core CSS    -->
    <link href="<?php echo base_url();?>assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url();?>assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="azure" data-image="<?php echo base_url();?>assets/img/sidebar-5.jpg">

        <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->


        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
                   Add User
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="<?php echo base_url();?>Admin/home">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <li>
                    <a href="<?php echo base_url();?>Admin/gallery">
                        <i class="pe-7s-note2"></i>
                        <p>Gallery</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url();?>Admin/add">
                        <i class="pe-7s-graph"></i>
                        <p>Add photos</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url();?>Admin/cattegories">
                        <i class="pe-7s-graph"></i>
                        <p>Cattegories</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url();?>Admin/users">
                        <i class="pe-7s-news-paper"></i>
                        <p>Users</p>
                    </a>
                </li>

            </ul>
        </div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Profile</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-dashboard"></i>
                            </a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-globe"></i>
                                <b class="caret"></b>
                                <span class="notification">5</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Notification 1</a></li>
                                <li><a href="#">Notification 2</a></li>
                                <li><a href="#">Notification 3</a></li>
                                <li><a href="#">Notification 4</a></li>
                                <li><a href="#">Another notification</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="">
                                <i class="fa fa-search"></i>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="">
                                Account
                            </a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                Dropdown
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                Log out
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <?php if($this->session->flashdata('registered')) : ?>
                                    <p class="alert alert-dismissable alert-success">
                                        <?php echo $this->session->flashdata('registered');?>
                                    </p>
                                <?php endif; ?>

                                <ul class="pagination">
                                    <li>
                                        <a href="<?php echo base_url();?>Admin/users" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                        </a>
                                    </li>
                                    <li><a href="<?php echo base_url();?>Admin/users">Manage Users</a></li>
                                    <li><a href="<?php echo base_url();?>Admin/add_user">Add User</a></li>
                                    <li>
                                        <a href="<?php echo base_url();?>Admin/users" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                        </a>
                                    </li>
                                </ul>


                            </div>
                            <div class="content">
                                <div class="col-m-8 card">
                                    <!--Display Errors-->
                                    <?php echo validation_errors('<p class="alert alert-dismissable alert-danger">'); ?>
                                    <?php echo form_open('Admin/register'); ?>
                                    <!--Field: First Name-->
                                    <ul>

                                        <li><?php echo form_label('First Name:'); ?></li>
                                        <?php
                                        $data = array(
                                            'name'        => 'first_name',
                                            'value'       => set_value('first_name')
                                        );
                                        ?>
                                        <li><?php echo form_input($data); ?></li>


                                    <!--Field: Last Name-->

                                        <li><?php echo form_label('Last Name:'); ?></li>
                                        <?php
                                        $data = array(
                                            'name'        => 'last_name',
                                            'value'       => set_value('last_name')
                                        );
                                        ?>
                                        <li><?php echo form_input($data); ?></li>



                                    <!--Field: Email Address-->

                                       <li><?php echo form_label('Email Address:'); ?></li>
                                        <?php
                                        $data = array(
                                            'name'        => 'email',
                                            'value'       => set_value('email')
                                        );
                                        ?>
                                        <li><?php echo form_input($data); ?></li>


                                        <!--Field: Username-->

                                        <li><?php echo form_label('Username:'); ?></li>
                                        <?php
                                        $data = array(
                                            'name'        => 'username',
                                            'value'       => set_value('username')
                                        );
                                        ?>
                                        <li><?php echo form_input($data); ?></li>


                                    <!--Field: Password-->

                                        <li><?php echo form_label('Password:'); ?></li>
                                        <?php
                                        $data = array(
                                            'name'        => 'password',
                                            'value'       => set_value('password')
                                        );
                                        ?>
                                        <li><?php echo form_password($data); ?></li>

                                    <!--Field: Password2-->

                                        <li><?php echo form_label('Confirm Password:'); ?></li>
                                        <?php
                                        $data = array(
                                            'name'        => 'password2',
                                            'value'       => set_value('password2')
                                        );
                                        ?>
                                        <li><?php echo form_password($data); ?></li>

                                        <!--Field: Role-->

                                        <li><?php echo form_label('Role'); ?></li>
                                        <?php

                                        $options = array(
                                            '0' => 'user',
                                            '1' => 'admin',
                                            '2' => 'super_user'
                                        );

                                        echo form_dropdown('admin', $options, 'user');

                                        ?>
                                    </ul>


                                    <!--Submit Buttons-->
                                    <?php $data = array("value" => "Add",
                                        "name" => "submit",
                                        "class" => "btn btn-primary"); ?>
                                    <span id="btn_add">
                                        <?php echo form_submit($data); ?>
                                    </span>
                                    <?php echo form_close(); ?>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="col-md-4">
                        <p class="description text-center"> <br>
                            “Never tell me the odds.”  <br>
                            Han Solo"
                        </p>
                    </div>

                </div>
            </div>
        </div>


        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="#">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Company
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Portfolio
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Blog
                            </a>
                        </li>
                    </ul>
                </nav>
                <p class="copyright pull-right">
                    &copy; 2016 <a href="http://nemanjakolar.bitballoon.com/">Nemanja Kolar</a>, web developer
                </p>
            </div>
        </footer>

    </div>
</div>


</body>

<!--   Core JS Files   -->
<script src="<?php echo base_url();?>assets/js/jquery-1.10.2.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js" type="text/javascript"></script>

<!--  Checkbox, Radio & Switch Plugins -->
<script src="<?php echo base_url();?>assets/js/bootstrap-checkbox-radio-switch.js"></script>

<!--  Charts Plugin -->
<script src="<?php echo base_url();?>assets/js/chartist.min.js"></script>

<!--  Notifications Plugin    -->
<script src="<?php echo base_url();?>assets/js/bootstrap-notify.js"></script>


</html>
