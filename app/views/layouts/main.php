<?php echo doctype("html5"); ?>

<html lang="en" style="position: relative; min-height: 100%;">
<head>
    <title>Go International - ICT Brokerage Event 2015 - Go International - ICT Brokerage Event 2015</title>
    <link href="<?=base_url()?>assets/css/style.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/bootstrap.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/font-awesome.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/modern-business.css" rel="stylesheet">
    <script src="<?=base_url()?>assets/js/jquery.js"></script>
    <script src="<?=base_url()?>assets/js/jquery.ui.shake.js"></script>
    <script src="<?=base_url()?>assets/js/bootstrap.js"></script>

    <script>
        $(document).ready(function() {
            $('#alert').delay(3000).slideUp("slow");
            window.setTimeout(function() {
                $(".alert").fadeTo(500, 0).slideUp(500, function(){
                    $(this).remove();
                });
            }, 3000);

        });
    </script>


</head>
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

<a class="navbar-brand" href="<?=site_url('index/index')?>">
    <img src="<?=base_url('assets/img/cover.png')?>"></a>
<!-- Page Content -->
<div class="container" id="back">
    <!-- Page Heading/Breadcrumbs -->
    <div class="row">
        <div class="col-lg-12">
            <br>
            <?php if ($this->session->flashdata('msg')): ?>
                <div class="row">
                    <div class="col-sm-offset-2 col-xs-12 col-sm-8" style="padding-top:20px">
                        <div id="alert" class="alert <?=$this->session->flashdata('msg_class')?>">
                            <?=$this->session->flashdata('msg')?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

        </div>
    </div>
    <!--/.main-->

    <div class="container-fluid" id="main_home">
        <div class="row-fluid">
            <div class="col-md-8"><!--div left-->
                <?php $this->load->view($content); ?>
            </div><!--div left close-->

            <div class=col-md-4><!--div right-->
                <?php /*$this->load->view($pic); */?>
            </div><!--div right close-->

        </div><!--div row-fluid close-->
    </div><!--div container fluid close-->




    <!-- Footer -->
    <footer>
        <div class="footer-shape"><!--footer-->
            <p>
                <a href="http://www.talkb2b.net" target="_blank">TalkB2B.net</a> | The Brokerage Event Platform |
                <a class="model-dialog" href="#privacy_policy">Privacy Policy
                </a>

        </div>
    </footer>

</div>
<!-- /.container -->
</body>

</html>