<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if($this->input->post()){
    $title          = set_value('title');
    $description    = set_value('description');
    $date           = set_value('date');
} else {
    $title          = $event->title;
    $description    = $event->description;
    $date           = $event->date;
}
?>

<?=form_open_multipart('Event/edit_event/'.$event->id)?>
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
