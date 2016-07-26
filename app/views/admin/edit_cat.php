<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if($this->input->post()){
    $title       = set_value('title');

} else {
    $title = $category->title;
}
?>
<div class="content">
    <h4>Update category</h4>


    <?php if(validation_errors() || isset($error)) : ?>
        <div class="alert alert-danger" role="alert" align="center">
            <?=validation_errors()?>
            <?=(isset($error)?$error:'')?>
        </div>
    <?php endif; ?>
    <?=form_open_multipart('Category/edit_cat/'.$category->id)?>

    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" name="title" value="<?=$title?>">
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
    <? form_close();?>
</div>



