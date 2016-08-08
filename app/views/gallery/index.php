<?php if($images->num_rows() > 0) : ?>
<?php if($this->session->flashdata('message')) : ?>
    <div class="alert alert-success" role="alert" align="center">
        <?=$this->session->flashdata('message')?>
    </div>
<?php endif; ?>

<div class="col-md-12" align="center">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
        Gallery
    </button>

    <!-- Modal -->
    <div class="modal fade modal-wide" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">
                            <?=anchor('gallery/add','Add photo',['class'=>'btn btn-primary'])?>
                    </h4>
                </div>
                <div class="modal-body">
                        <?php foreach($images->result() as $img) : ?>
                            <div id="fe_"class="col-md-4">
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
                <div class="modal-footer">

                </div>
            </div>
        </div>
    </div>
</div>

<hr />
<?php else : ?>
    <div align="center">We don't have any image yet, go ahead and <?=anchor('gallery/add','add a new one')?>.</div>
<?php endif; ?>

