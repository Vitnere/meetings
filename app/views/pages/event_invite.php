<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="<?php echo base_url();?>assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Event invite</title>
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
        <li class="breadcrumb-item active">Invite</li>
    </ol>
    <form action="<?php base_url()?>Event/invite" method="post" class="form-inline">
        <div class="form-group">
            <label for="name">Name</label>
            <input  type="text" name="name" class="form-control" id="exampleInputName2" placeholder="your name here">
        </div><br>
        <div  class="form-group">
            <label  for="email">Sender</label>
            <input type="email" name="sender" class="form-control" id="exampleInputEmail2" placeholder="your mail here">
        </div><br>
        <div class="form-group">
            <label for="email">Receiver</label>
            <input  type="email" name="receiver" class="form-control" id="exampleInputEmail2" placeholder="receiver mail here">
        </div><br>
        <div class="form-group">
            <label for="invitation">Invitation</label>
            <textarea  name="message" rows="4" type="text" class="form-control" id="exampleInputInvitation1">You are invited to event</textarea>
        </div><br>
        <button id="btn_invite" type="submit" class="btn btn-primary">Send invitation</button>
    </form>
</div>

