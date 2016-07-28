<div class="content">
    <h4>Add New Image</h4>
    <div id="body">
        <?php if(validation_errors() || isset($error)) : ?>
            <div class="alert alert-danger" role="alert" align="center">
                <?=validation_errors()?>
                <?=(isset($error)?$error:'')?>
            </div>
        <?php endif; ?>

        <?=form_open_multipart('Admin/add')?>
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
            <a href="<?php echo base_url();?>Admin/cattegories">Manage cattegories</a>
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
</div>


