<div class="content">
    <div class="container-fluid">
        <div class="row">
            <?php if($images->num_rows() > 0) : ?>
            <?php if($this->session->flashdata('message')) : ?>
                <div class="alert alert-success" role="alert" align="center">
                    <?=$this->session->flashdata('message')?>
                </div>
            <?php endif; ?>
            <div>
                <button id="btn_white" type="submit" class="btn btn-primary">
                    <a href="<?php echo base_url();?>Admin/add">Add photos</a>
                </button>
            </div>
            <hr />
        </div>

        <div class="row">
            <div class="col-md-12">
                <?php foreach($images->result() as $img) : ?>
                    <div class="col-md-4">
                        <div class="thumbnail">
                            <?=img($img->file)?>
                            <div class="caption">
                                <h3><?=$img->caption?></h3>
                                <p><?=substr($img->description, 0,100)?>...</p>
                                <p>
                                    <?=anchor('Admin/edit/'.$img->id,'Edit',['class'=>'btn btn-warning', 'role'=>'button'])?>
                                    <?=anchor('Admin/delete/'.$img->id,'Delete',['class'=>'btn btn-danger', 'role'=>'button','onclick'=>'return confirm(\'Are you sure?\')'])?>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="row">
            <?php else : ?>
                <div align="center">We don't have any image yet, go ahead and <?=anchor('Admin/add','add a new one')?>.</div>
            <?php endif; ?>
        </div>
    </div>
</div>
