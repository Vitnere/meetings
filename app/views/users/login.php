<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Go International - ICT Brokerage Event 2015 - Go International - ICT Brokerage Event 2015</title>
    <link href="<?=base_url()?>assets/css/style.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/bootstrap.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/font-awesome.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/modern-business.css" rel="stylesheet">
    <script src="<?=base_url()?>assets/js/jquery.js"></script>
    <script src="<?=base_url()?>assets/js/jquery.ui.shake.js"></script>
    <script src="<?=base_url()?>assets/js/bootstrap.js"></script>
</head>

<!--navbar-->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="<?=base_url()?>">Home</a>
                </li>
                <li>
                    <a href="<?=base_url()?>Home/show_second">How it works</a>
                </li>
                <li>
                    <a href="<?php echo base_url()?>Home/show_third">Bilateral Meeting-How it works</a>
                </li>
                <li>
                    <a href="<?php echo base_url()?>Home/show_fourth">Programme</a>
                </li>
                <li>
                    <a href="<?php echo base_url()?>Home/show_fifth">FAQ</a>
                </li>
                <li>
                    <a href="<?php echo base_url()?>Home/show_sixth">Contact</a>
                </li>
                <?php if (isset($loged_name)) { ?>
                    <li>
                        <a href="<?php echo base_url()?>User/index">Profile</a>
                    </li>
                    <?php if ($loged_admin==1) { ?>
                        <li>
                            <a href="<?php echo base_url()?>User/register">Register</a>
                        </li>
                    <?php } ?>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Welcome: @<?= $loged_name ?> <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="<?php echo base_url('user/logout')?>">Logout</a>
                            </li>
                        </ul>
                    </li>
                <?php } else  { ?>
                    <li>
                        <a href="<?php echo base_url()?>User/login">Log in</a>

                    </li>
                <?php } ?>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

<body>
<div class="row">
    <div id="login" class="col-md-4 col-md-offset-4"><!-- login form -->
        <h1 align="center">LOGIN</h1><br>
        <?php if($this->session->userdata('logged_in')) : ?>


            <p>You are logged in as <?php echo $this->session->userdata('username'); ?>
            </p>

            <!--Start Logout Form-->
            <?php $attributes = array(
                'id'    => 'logout_form',
                'class' => 'form-horizontal'); ?>

            <?php echo form_open('User/logout',$attributes); ?>

            <!--Submit Buttons-->
            <?php $data = array("value" => "Logout",
                "name"  => "submit",
                "class" => "btn btn-primary"); ?>
            <?php echo form_submit($data); ?>
            <?php echo form_close(); ?>

        <?php else : ?>

            <!--atributi forme-->
            <?php $attributes = array('id' => 'login_form', 'class' =>'form-horizontal'); ?>

            <?php echo form_open('User/login', $attributes); ?>

            <p align="center"><!-- USERNAME -->
                <?php echo form_label('Username'); ?>
                <?php

                $data = array(
                    'name' => 'username',
                    'placeholder' => 'Enter Username',
                    'style'      => 'width:50%',
                    'value'      =>  set_value('username'));

                ?>

                <?php echo form_input($data); ?>
            </p>

            <p align="center"><!-- PASSWORD -->
                <?php echo form_label('Password'); ?>
                <?php

                $data = array(
                    'name'        => 'password',
                    'placeholder' => 'Enter Password',
                    'style'       => 'width:50%',
                    'value'       =>  set_value('password'));
                ?>

                <?php echo form_password($data); ?>
            </p>

            <p align="center"><!-- SUBMIT -->
                <?php

                $data = array('name'        => 'submit',
                    'class'      => 'btn btn-primary',
                    'value'     =>  'Login');
                ?>

                <?php echo form_submit($data); ?>
            </p>
            <?php echo form_close(); ?>

            <br>
            <p>Dont have account? Please <a href="<?php echo base_url()?>User/register">register</a></p>
        <?php endif; ?>
    </div><!--login form close-->
</div> <!--row close-->



</body>
</html>