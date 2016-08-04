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

<button id="btn_white" type="submit" class="btn btn-primary">
    <a href="<?php echo base_url();?>Event/show">Add new</a>
</button>
<table id="tbuser">
    <thead>
    <tr>
        <th>Title</th>
        <th>Description</th>
        <th>Date</th>
        <th>Creator</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach($event as $row){ ?>
        <tr>
            <div class="col-md-12">
                <td><?php print_r ($row->title); ?></td>
                <td><?php print_r ($row->description); ?></td>
                <td><?php print_r ($row->date); ?></td>
                <td><?php print_r ($row->username); ?></td>
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