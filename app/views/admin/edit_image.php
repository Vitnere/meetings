<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if($this->input->post()){
    $caption       = set_value('caption');
    $description    = set_value('description');
    $categories_id = set_value('categories_id');
} else {
    $caption       = $image->caption;
    $description    = $image->description;
    $categories_id = $this->Category_model->find_cat();
}
?>
<div class="content">
    <h4>Update Image</h4>
    <?php if(validation_errors() || isset($error)) : ?>
        <div class="alert alert-danger" role="alert" align="center">
            <?=validation_errors()?>
            <?=(isset($error)?$error:'')?>
        </div>
    <?php endif; ?>
    <?=form_open_multipart('Admin/edit/'.$image->id)?>

    <div class="form-group">
        <label for="userfile">Image File</label>
        <div class="row" style="margin-bottom:5px"><div class="col-xs-12 col-sm-6 col-md-3"><?=img(['src'=>$image->file,'width'=>'100%'])?></div></div>
        <input type="file" class="form-control" name="userfile">
    </div>

    <div class="form-group"><!--category select-->
        <label for="categories_id">Category</label>
        <select name="categories_id" >
            <?php foreach($categories_id as $row){ ?><!--dynamic dropdown-->

            <option label="<?php echo $row->title;?>"
                    value="<?php echo $row->id; ?>">
                <?php echo $row->title;?>
            </option>
            <?php }?>
        </select>&nbsp
        <a href="<?php echo base_url();?>Admin/cattegories">Manage cattegories</a>
    </div>

    <div class="form-group">
        <label for="caption">Caption</label>
        <input type="text" class="form-control" name="caption" value="<?=$caption?>">
    </div>

    <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" name="description"><?=$description?></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Save</button>
    <?=anchor('gallery','Cancel',['class'=>'btn btn-warning'])?>
    </form>
</div>

