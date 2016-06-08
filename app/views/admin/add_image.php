<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="<?php echo base_url();?>assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Gallery</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- Gallery-->
    <link href='http://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
    <link href="<?=base_url();?>assets/css/bootstrap.css" rel="stylesheet">
    <link href="<?=base_url();?>assets/css/gallery.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>


    <!-- Bootstrap core CSS     -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="<?php echo base_url();?>assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="<?php echo base_url();?>assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url();?>assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

</head>

<body>

<div class="wrapper">
    <div class="sidebar" data-color="red" data-image="<?php echo base_url();?>assets/img/sidebar-5.jpg">

        <!--

            Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
            Tip 2: you can also add an image using data-image tag

        -->

        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
                    Gallery
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
                    <a class="navbar-brand" href="#">Dashboard</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-dashboard"></i>
                            </a>
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

                            <a href="<?php echo base_url()?>User/logout">Log out</a>

                        </li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="content">

            <h4>Add New Image</h4>

            <div id="body">
                <?php if(validation_errors() || isset($error)) : ?>
                    <div class="alert alert-danger" role="alert" align="center">
                        <?=validation_errors()?>
                        <?=(isset($error)?$error:'')?>
                    </div>
                <?php endif; ?>
                <?=form_open_multipart('Admin/add')?>

                <div class="form-group"><!--choose image-->
                    <label for="userfile">Image File</label>
                    <input type="file" class="form-control" name="userfile">
                </div>

                <div class="form-group"><!--category select-->
                    <label for="categories_id">Category</label>

                    <?php

                    $options = array(
                        '1' => 'participants',
                        '2' => 'organizers',
                        '3' => 'co-organizers',
                        '4' => 'supporters',
                        '5' => 'location',
                    );

                    $category = array('small', 'large');

                    echo form_dropdown('categories_id', $options, 'organizers');

                    ?>


                </div>

                <div class="form-group"><!--caption-->
                    <label for="caption">Caption</label>
                    <input type="text" class="form-control" name="caption" value="">
                </div>

                <div class="form-group"><!--description-->
                    <label for="description">Description</label>
                    <textarea class="form-control" name="description"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Upload</button>
                <?=anchor('gallery','Cancel',['class'=>'btn btn-warning'])?>

                </form>
            </div>



        </div>


    <footer class="footer">
        <div class="container-fluid">
            <nav class="pull-left">
                <ul>
                    <li>
                        <a href="<?php base_url();?>">
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

<!--  Google Maps Plugin    -->
<script type="<?php echo base_url();?>text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
<script src="<?php echo base_url();?>assets/js/light-bootstrap-dashboard.js"></script>

</html>

