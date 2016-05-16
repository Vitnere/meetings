<?php foreach($images->result() as $img) : ?>
    <div class="col-md-3">
        <div class="thumbnail">
            <?=img($img->file)?>
        </div>
    </div>
<?php endforeach; ?>