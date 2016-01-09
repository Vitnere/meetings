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