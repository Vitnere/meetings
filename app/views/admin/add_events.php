<div class="col-md-4">
<h3>Add new event</h3>
    <?php echo form_open('Event/insert_event'); ?>
<!--Field: title-->
<div>
    <?php echo form_label('Title:'); ?>
    <?php
    $data = array(
        'name'        => 'title',
        'value'       => set_value('title')
    );
    ?>
    <?php echo form_input($data); ?>
</div>


<!--Field: description-->
<div>
    <?php echo form_label('Description'); ?>
    <?php
    $data = array(
        'name'        => 'description',
        'value'       => set_value('description')
    );
    ?>
    <?php echo form_textarea($data); ?>
</div>

<!--Field: Date-->
<div>
    <?php echo form_label('Date:'); ?>
    <input type="date" name="date" />
</div>

<!--Submit Buttons-->
<?php $data = array("value" => "submit",
    "name"  => "update",
    "class" => "btn btn-primary"); ?>
<div><br>
    <?php echo form_submit($data); ?>
</div>
<?php echo form_close(); ?>
    <br>
</div>

