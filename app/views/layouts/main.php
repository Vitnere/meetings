<?php echo doctype("html5"); ?>

<html lang="en" style="position: relative; min-height: 100%;">
<header>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <link rel="icon" type="image/png" href="<?php echo base_url();?>assets/img/favicon.ico">
        <title>Go International - ICT Brokerage Event 2015 - Go International - ICT Brokerage Event 2015</title>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <meta name="viewport" content="width=device-width" />
        <!-- CSS -->
        <link href="<?=base_url();?>assets/css/bootstrap.css" rel="stylesheet">
        <link rel="stylesheet" href="<?=base_url();?>assets/css/bootstrap.min.css">
        <link href="<?=base_url();?>assets/css/style.css" rel="stylesheet">
        <link href="<?=base_url();?>assets/css/font-awesome.css" rel="stylesheet">
        <link href="<?=base_url()?>assets/css/modern-business.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" />
    </head>
</header>

<!-- Navigation -->
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
                <?php if($this->session->userdata('logged_in')) : ?>
                    <!--<li>?php echo $this->session->userdata('username'); ?></li>-->
                    <li><a href="<?php echo base_url()?>User/logout">Log out</a></li>
                <?php else : ?>

                    <li><a href="<?php echo base_url()?>User/login">Log in</a></li>

                <?php endif; ?>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>


<!--cover-->
    <section>
    <div class="col-md-12" id="cover">
        <img src="<?=base_url('assets/img/cover.png')?>" alt="cover">
    </div>
    </section>

<!-- Main -->
<div class="container-fluid" id="back">

    <div class="row" id="main">

    <?php if($this->session->userdata('logged_in')) : ?>
    <aside>
        <div class="col-md-12" id="pform">
            <?php $this->load->view($gallery); ?>
        </div>
    </aside>
    <?php endif; ?>


        <article><!--home view-->
            <div class="col-md-8">
                <?php $this->load->view($content); ?>
            </div>
        </article>

        <?php if($this->session->userdata('logged_in')) : ?>
        <aside><!-- guest gallery-->
            <div class="col-md-4">
                <?php $this->load->view($guest); ?>
            </div>
        </aside>
        <?php endif; ?>



        </div><!--row close-->
    </div><!--container fludi close-->



    <!-- Footer -->
    <footer>
        <div class="col-md-12">
        <?php $this->load->view($foot); ?>
        </div>
    </footer>
<!-- /.container -->

<script src="<?=base_url()?>assets/js/jquery.js"></script>
<script src="<?=base_url()?>assets/js/jsbootstrap.min.js"></script>
<script src="<?=base_url()?>assets/js/bootstrap.js"></script>
<script src="<?=base_url()?>assets/js/jquery.ui.shake.js"></script>
</body>




</html>