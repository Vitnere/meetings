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