<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Go International - ICT Brokerage Event 2015 - Go International - ICT Brokerage Event 2015</title>
    <link href="<?=base_url()?>assets/css/style.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/bootstrap.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/bootstrap-theme.min.css" rel="stylesheet">
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

<body><!--register form-->
    <div class="col-md-4 col-md-offset-4">
        <h1>Register</h1>
        <p>Please fill out the form to create an account</p>

        <!--Display Errors-->
        <?php echo validation_errors('<p class="alert alert-dismissable alert-danger">'); ?>
        <?php echo form_open('User/register'); ?>
        <!--Field: First Name-->
        <p>
            <?php echo form_label('First Name:'); ?>
            <?php
            $data = array(
                'name'        => 'first_name',
                'value'       => set_value('first_name')
            );
            ?>
            <?php echo form_input($data); ?>
        </p>
        <!--Field: Last Name-->
        <p>
            <?php echo form_label('Last Name:'); ?>
            <?php
            $data = array(
                'name'        => 'last_name',
                'value'       => set_value('last_name')
            );
            ?>
            <?php echo form_input($data); ?>
        </p>

        <!--Field: Email Address-->
        <p>
            <?php echo form_label('Email Address:'); ?>
            <?php
            $data = array(
                'name'        => 'email',
                'value'       => set_value('email')
            );
            ?>
            <?php echo form_input($data); ?>
        </p>

        <!--Field: Username-->
        <p>
            <?php echo form_label('Username:'); ?>
            <?php
            $data = array(
                'name'        => 'username',
                'value'       => set_value('username')
            );
            ?>
            <?php echo form_input($data); ?>
        </p>

        <!--Field: Password-->
        <p>
            <?php echo form_label('Password:'); ?>
            <?php
            $data = array(
                'name'        => 'password',
                'value'       => set_value('password')
            );
            ?>
            <?php echo form_password($data); ?>
        </p>

        <!--Field: Password2-->
        <p>
            <?php echo form_label('Confirm Password:'); ?>
            <?php
            $data = array(
                'name'        => 'password2',
                'value'       => set_value('password2')
            );
            ?>
            <?php echo form_password($data); ?>
        </p>

        <!--Submit Buttons-->
        <?php $data = array("value" => "Register",
            "name" => "submit",
            "class" => "btn btn-primary"); ?>
        <p>
            <?php echo form_submit($data); ?>
        </p>
        <?php echo form_close(); ?>

    </div>
</body>
</html>