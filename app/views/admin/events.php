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

<table id="tbuser">
    <thead>
    <tr>
        <th>Title</th>
        <th>Description</th>
        <th>Date</th>
    </tr>
    </thead>
    <tbody>
    <!-- fetch data from events table into event view-->
    <?php foreach($event as $row){ ?>
        <tr>
            <div class="col-md-12">
                <td><?php print_r ($row->title); ?></td>
                <td><?php print_r ($row->description); ?></td>
                <td><?php print_r ($row->date); ?></td>
                &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
                <td>
                       <span id="right">
                           <?=anchor('Event/edit_event/'.$row->id,'Edit',['class'=>'btn btn-warning', 'role'=>'button'])?>
                           <?=anchor('Event/delete_event/'.$row->id,'Delete',['class'=>'btn btn-danger', 'role'=>'button','onclick'=>'return confirm(\'Are you sure?\')'])?>
                       </span>
                </td>
            </div>
        </tr>
    <?php }?>
    </tbody>
</table>