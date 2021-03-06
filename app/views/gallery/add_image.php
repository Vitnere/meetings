<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Add New Image</title>

    <link href='http://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
    <link href="<?=base_url()?>assets/css/style.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/bootstrap.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/font-awesome.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/modern-business.css" rel="stylesheet">
    <script src="<?=base_url()?>assets/js/jquery.js"></script>
    <script src="<?=base_url()?>assets/js/jquery.ui.shake.js"></script>
    <script src="<?=base_url()?>assets/js/bootstrap.js"></script>
    <style type="text/css">

        ::selection { background-color: #E13300; color: white; }
        ::-moz-selection { background-color: #E13300; color: white; }

        body {
            background-color: #fff;
            margin: 40px;
            color: #4F5155;
        }

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

    </style>
</head>
<body>

<div id="container">
    <h1>Add New Image</h1>

    <div class="col-md-12">
        <a class="btn btn-primary" href="<?php echo base_url()?>">Index</a>
        <br /><br />
    </div>

    <div id="body">
        <?php if(validation_errors() || isset($error)) : ?>
            <div class="alert alert-danger" role="alert" align="center">
                <?=validation_errors()?>
                <?=(isset($error)?$error:'')?>
            </div>
        <?php endif; ?>
        <?=form_open_multipart('gallery/add')?>

        <div class="form-group"><!--choose image-->
            <label for="userfile">Image File</label>
            <input type="file" class="form-control" name="userfile">
        </div>

        <div class="form-group"><!--category-->
            <label for="categories_id">Category</label>


            <select name="categories_id" >
                <?php foreach($cat as $row){ ?><!--dynamic dropdown-->

                <option label="<?php echo $row->title;?>"
                        value="<?php echo $row->id; ?>">
                    <?php echo $row->title;?>
                </option>
                <?php }?>


            </select>&nbsp

        </div>

        <div class="form-group"><!--caption-->
            <label for="caption">Caption</label>
            <input type="text" class="form-control" name="caption" value="">
        </div>

        <div class="form-group"><!--description-->
            <label for="description">Description</label>
            <textarea class="form-control" name="description"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Upload</button>
        <?=anchor('gallery','Cancel',['class'=>'btn btn-warning'])?>

        </form>
    </div>


    <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>