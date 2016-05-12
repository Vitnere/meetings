    <!--flashdata mesages-->
        <!--registration sucsess-->
        <?php if($this->session->flashdata('registered')) : ?>
            <p class="alert alert-dismissable alert-success">
                <?php echo $this->session->flashdata('registered');?>
            </p>
        <?php endif; ?>


        <!--login sucsess-->
        <?php if($this->session->flashdata('login_success')) : ?>
            <p class="alert alert-dismissable alert-success">
                <?php echo $this->session->flashdata('login_success');?>
            </p>
        <?php endif; ?>


        <!--log out-->
        <?php if($this->session->flashdata('logged_out')) : ?>
            <p class="alert alert-dismissable alert-success">
                <?php echo $this->session->flashdata('logged_out');?>
            </p>
        <?php endif; ?>

        <!--no access-->
        <?php if($this->session->flashdata('noaccess')) : ?>
            <p class="alert alert-dismissable alert-danger">
                <?php echo $this->session->flashdata('noaccess');?>
            </p>
        <?php endif; ?>
    <!--flashdata mesages close-->
    <div class="col-md-8">

    </div>
    <h2>GO INTERNATIONAL - ICT BROKERAGE EVENT 2015</h2>
    <p>Get connected and take advantage of ICT networking opportunities
                by discovering new international partnerships to grow your business.

                Enterprise Europe Network in Macedonia is pleased to invite you to
                participate on business meetings that will take place within Go International
                - ICT Brokerage Event 2015 on November 13 in Skopje in Hotel Continental, Skopje.

                The event is free of charge and targets companies and organizations working in
                the ICT sector interested in presenting and discovering new products and services,
                exploring new business opportunities, finding new potential clients and partners
                for creating new business opportunities and industry partnerships for reaching
                international markets.

                The Go International - ICT Brokerage Event 2015 is organized by the Foundation for
                Management and Industrial Research, Youth Entrepreneurial Service Foundation and
                cooperating network partners: University of Novi Sad - Serbia, ARC Consulting â€“
                Bulgaria and Chamber of Economy - Montenegro.The event is supported by the Ministry
                of Economy of the Republic of Macedonia and CEI â€“ Central European Initiative.
    </p>




