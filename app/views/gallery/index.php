<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<head>
    <meta charset="utf-8">

    <link href='http://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
    <link href="<?=base_url()?>assets/css/bootstrap.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
    <style type="text/css">

        ::selection { background-color: #E13300; color: white; }
        ::-moz-selection { background-color: #E13300; color: white; }



        a {
            color: #003399;
            background-color: transparent;
            font-weight: normal;
        }

        h1 {
            color: #444;
            background-color: transparent;
            border-bottom: 1px solid #D0D0D0;
            font-size: 19px;
            font-weight: normal;
            margin: 0 0 14px 0;
            padding: 14px 15px 10px 15px;
        }

        code {
            font-family: Consolas, Monaco, Courier New, Courier, monospace;
            font-size: 12px;
            background-color: #f9f9f9;
            border: 1px solid #D0D0D0;
            color: #002166;
            display: block;
            margin: 14px 0 14px 0;
            padding: 12px 10px 12px 10px;
        }

        #body {
            margin: 0 15px 0 15px;
        }

        p.footer {
            text-align: right;
            font-size: 11px;
            border-top: 1px solid #D0D0D0;
            line-height: 32px;
            padding: 0 10px 0 10px;
            margin: 20px 0 0 0;
        }

        #container {
            margin: 10px;
            border: 1px solid #D0D0D0;
            box-shadow: 0 0 8px #D0D0D0;
        }
    </style>
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
            <div class="row">
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
