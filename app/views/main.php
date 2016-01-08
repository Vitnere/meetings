<!DOCTYPE html>
<html lang="en" style="position: relative; min-height: 100%;">
<head>
    <title><?= $document_title ?></title>
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
    <style>
        .nav li a{
            color:#000!important;
            padding-bottom: 25px!important;
        }
        .navbar-inverse{
            border-color:#000!important;
        }
        a.navbar-brand{
            padding-bottom: 10px!important;
        }
        table { border-collapse: separate!important; }
        td { border: solid 1px #666666!important; }
        tr:first-child td:first-child { border-top-left-radius: 10px!important; }
        tr:first-child td:last-child { border-top-right-radius: 10px!important;}
        tr:last-child td:first-child { border-bottom-left-radius: 10px!important; }
        tr:last-child td:last-child { border-bottom-right-radius: 10px!important; }
        #cover{width:100%;padding: 0px!important}
        #main{height:800px;background-color:#ffffff;margin:-30px 3px 0 3px;}
        #back{height: 900px;position: relative;width:100%;background-color:#CECECE;
        display: block;float:left;margin: 0 0px 0 0px; }
        #footer1{background-color: ;height: 62px;}
        #footer2{background: url(/img/footer_background.jpg) repeat left bottom;
            height: 62px;}
    </style>
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
            <a class="navbar-brand" href="<?=site_url('index/index')?>"><img src="<?=base_url('media/img/logo-sm.png')?>"></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="<?=site_url('site/index')?>">Home</a>
                </li>
                <li>
                    <a href="<?=site_url('site/index')?>">How it works</a>
                </li>
                <li>
                    <a href="<?=site_url('site/index')?>">Bilateral Meeting-How it works</a>
                </li>
                <li>
                    <a href="<?=site_url('site/index')?>">Programme</a>
                </li>
                <li>
                    <a href="<?=site_url('site/index')?>">FAQ</a>
                </li>
                <li>
                    <a href="<?=site_url('site/index')?>">Contact</a>
                </li>
                <?php if (isset($loged_name)) { ?>
                    <li>
                        <a href="<?=site_url('user/index')?>">Profile</a>
                    </li>
                    <?php if ($loged_admin==1) { ?>
                        <li>
                            <a href="<?=site_url('user/register')?>">Register</a>
                        </li>
                    <?php } ?>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Welcome: @<?= $loged_name ?> <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="<?=site_url('user/logout')?>">Logout</a>
                            </li>
                        </ul>
                    </li>
                <?php } else  { ?>
                    <li>
                        <a href="<?=site_url('user/login')?>">Log in</a>
                    </li>
                <?php } ?>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

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
            <?= $content ?>
        </div>
    </div>
    <br />
    <!-- /.row -->

    <!--cover-->
   <div class="row">
        <div class="col-lg-12" id="cover">
            <img src="http://i.imgur.com/UgTtpka.png" alt="img">
        </div>
    </div>     
    <!--/. cover-->

    <!--main-->
    <div class="col-lg-12" id="main">
        <p>test</p>                                 

    </div>
    <!--/.main-->

    <!-- Footer -->
    <footer>
        <div class="row">
            <div class="col-lg-12" id="footer1">
                
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12" id="footer2">
                
            </div>   
        </div>

        <div class="row">
            <div class="col-lg-12">
                <p>Copyright &copy; Meetings <?=date('Y')?></p>
            </div>
        </div>

    </footer>
</div>
<!-- /.container -->
</body>

</html>
