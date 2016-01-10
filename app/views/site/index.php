

<!--cover-->
<div class="row">
    <div class="col-lg-12" id="cover">
        <?php echo img('assets/img/cover.png'); ?>
    </div>
</div>
<!--/. cover-->

<!--main-->
<div class="col-lg-12" id="main">
    <div class="container">
        <div class="row">
            <div class="col-md-8">

                <?php
                foreach ($results as $row)
                {
                    $title=$row->title;
                    $text_left=$row->text_left;
                    $text_right=$row->text_right;
                }
                echo Heading($title,1);
                ?>
                <p><?php echo $text_left; ?> </p>
                <p><?php echo $text_right; ?> </p>

                <!-- <br />
                 <p>Get connected and take advantage of ICT networking
                 opportunities by discovering new international partnerships
                 to grow your business.</p>
                 <br />
                 <p>Enterprise Europe Network in Macedonia is pleased
                 to invite you to participate on business meetings that will
                 take place within Go International -<span id="blue_text"> ICT Brokerage Event 2015
                 on November 13 in Skopje in Hotel Continental, Skopje.</span></p>
                 <br />
                 <p>The event is free of charge and targets companies and organizations
                  working in the ICT sector interested in presenting and discovering
                   new products and services, exploring new business opportunities,
                   finding new potential clients and partners for creating new business
                   opportunities and industry partnerships for reaching international
                    markets.</p>
                 <br />
                 <p>The Go International - ICT Brokerage Event 2015 is organized by the
                  Foundation for Management and Industrial Research, Youth Entrepreneurial
                  Service Foundation and cooperating network partners: University of Novi Sad
                  - Serbia, ARC Consulting – Bulgaria and Chamber of Economy - Montenegro.</p>
                 <br />
                 <p>The event is supported by the Ministry of Economy of the Republic
                 of Macedonia and CEI – Central European Initiative.</p>
                 </div>
                 <div class="col-md-4" id="main_right">
                     <h3>BILATERAL TALKS</h3>
                     <span>PARTICIPANTS</span><br />
                     <span>MEETINGS REQUESTED</span><br />
                     <span>MEETINGS ACCEPTED</span><br />

                     <span>89</span><br />
                    <span>339</span><br />
                     <span>165</span><br />
                 </div>   -->
            </div>
        </div>
    </div>
    