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


            <div class="col-md-12" align="center">
                <a class="btn btn-primary" href="<?php echo base_url()?>">Index</a>
                <?=anchor('gallery/add','Add a new image',['class'=>'btn btn-primary'])?>
                <br /><br />
            </div>


            <hr />


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




        <?php else : ?>
            <div align="center">We don't have any image yet, go ahead and <?=anchor('gallery/add','add a new one')?>.</div>
        <?php endif; ?>
