<?php defined('BASEPATH') OR exit('No direct script access allowed');
if($this->input->post())
{
    $title          = set_value('title');
    $description    = set_value('description');
    $date           = set_value('date');
} else
{
    $title          = $event->title;
    $description    = $event->description;
    $date           = $event->date;
}
?>
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="<?php echo base_url();?>assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Event_Edit</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!--  CSS    -->
    <link href="<?php echo base_url();?>assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>
    <link href="<?=base_url();?>assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/css/animate.min.css" rel="stylesheet"/>
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url();?>assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
</head>
<div class="col-md-4">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo base_url();?>">Home</a></li>
        <li class="breadcrumb-item">Event</li>
        <li class="breadcrumb-item active">Edit</li>
    </ol>
    <?php form_open_multipart('Event/user_edit_event/'.$event->id)?>
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" name="title" value="<?=$title?>">
    </div>

    <div class="form-group">
        <label for="description">Description</label>
        <input type="text" class="form-control" name="description" value="<?=$description?>">
    </div>

    <div class="form-group">
        <label for="date">Date</label>
        <input type="date" class="form-control" name="date" value="<?=$date?>">
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
    <? form_close();?>
</div>





