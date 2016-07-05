<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<head>
    <meta charset="utf-8">

    <link href='http://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
    <link href="<?=base_url()?>assets/css/bootstrap.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/gallery.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>

</head>
        <div class="col-md-12" align="center">
            <h1>Welcome master jedi.You can add new images to right side.</h1>
        </div>


        <?php if($images->num_rows() > 0) : ?>

            <?php if($this->session->flashdata('message')) : ?>
                <div class="alert alert-success" role="alert" align="center">
                    <?=$this->session->flashdata('message')?>
                </div>
            <?php endif; ?>

<body>

<div class="col-md-12" align="center">
    <a class="btn btn-primary" href="<?php echo base_url()?>">Index</a>
    <?=anchor('gallery/add','Add photo',['class'=>'btn btn-primary'])?>
    <!-- Large modal -->
    <button class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Gallery</button>
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg col-md-8">
            <div class="modal-content">

                <!-- Gallery-->
                <div class="col-md-12">
                    <?php foreach($images->result() as $img) : ?>
                        <div class="col-md-4">
                            <div class="thumbnail">
                                <?=img($img->file)?>
                                <div class="caption">
                                    <h3><?=$img->caption?></h3>
                                    <p><?=substr($img->description, 0,100)?>...</p>
                                    <p>
                                        <?=anchor('gallery/edit/'.$img->id,'Edit',['class'=>'btn btn-warning', 'role'=>'button'])?>
                                        <?=anchor('gallery/delete/'.$img->id,'Delete',['class'=>'btn btn-danger', 'role'=>'button','onclick'=>'return confirm(\'Are you sure?\')'])?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <!-- Gallery end-->
            </div>
        </div>
    </div>
</div>
<hr />
<?php else : ?>
    <div align="center">We don't have any image yet, go ahead and <?=anchor('gallery/add','add a new one')?>.</div>
<?php endif; ?>


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
</body>
