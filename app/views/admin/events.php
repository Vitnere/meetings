<?php if($this->session->flashdata('add')) : ?>
    <p class="alert alert-dismissable alert-success">
        <?php echo $this->session->flashdata('add');?>
    </p>
<?php endif; ?>

<?php if($this->session->flashdata('update')) : ?>
    <p class="alert alert-dismissable alert-success">
        <?php echo $this->session->flashdata('update');?>
    </p>
<?php endif; ?>

<?php if($this->session->flashdata('delete')) : ?>
    <p class="alert alert-dismissable alert-success">
        <?php echo $this->session->flashdata('delete');?>
    </p>
<?php endif; ?>

<?php if($this->session->flashdata('invite')) : ?>
    <p class="alert alert-dismissable alert-success">
        <?php echo $this->session->flashdata('invite');?>
    </p>
<?php endif; ?>


<!--add new event button-->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal5">Add new</button>
<!--add new event modal-->
<div class="modal fade ad_add_event" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="col-md-4">
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
                        <div><?php echo form_label('Description'); ?>
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
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


<table id="tbuser">
    <thead>
    <tr>
        <th>Title</th>
        <th>Description</th>
        <th>Date</th>
        <th>Creator_ID</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach($event as $row){ ?>
        <tr>
            <div class="col-md-12">
                <td><?php print_r ($row->title); ?></td>
                <td><?php print_r ($row->description); ?></td>
                <td><?php print_r ($row->date); ?></td>
                <td><?php print_r ($row->user_id); ?></td>
                &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
                <td>
                       <span id="right">
                           <?=anchor('Event/edit_event/'.$row->id,'Edit',['class'=>'btn btn-warning', 'role'=>'button'])?>
                           <?=anchor('Event/delete_event/'.$row->id,'Delete',['class'=>'btn btn-danger', 'role'=>'button','onclick'=>'return confirm(\'Are you sure?\')'])?>
                           <?=anchor('Event/invite/'.$row->id,'Invite',['class'=>'btn btn-success', 'role'=>'button'])?>

                       </span>
                </td>
            </div>
        </tr>
    <?php }?>
    </tbody>
</table>