<div class="content">
  <div id="body">
        <?php if(validation_errors() || isset($error)) : ?>
            <div class="alert alert-danger" role="alert" align="center">
                <?=validation_errors()?>
                <?=(isset($error)?$error:'')?>
            </div>
        <?php endif; ?>

        <?php if($this->session->flashdata('add')) : ?>
            <p class="alert alert-dismissable alert-success">
                <?php echo $this->session->flashdata('add');?>
            </p>
        <?php endif; ?>

        <?= form_open('Admin/insert_cat');?>

        <p align="center">Manage your photo categories here</p>
       <!-- <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#home">Add</a></li>
            <li><a data-toggle="tab" href="#menu1">Edit</a></li>
            <!--<li><a data-toggle="tab" href="#menu2">Delete</a></li>-->
       <!-- </ul>-->

        <div class="form-group"><!--category-->
            <br>
            <label for="title">New category</label>
            <div class="tab-content">
                <div id="home" class="tab-pane fade in active">
                    <div class="form-group in collapse"><!--add cattegory-->
                        <input type="text" class="form-control" name="title" value="Enter name">
                        <br>
                        <button type="submit" class="btn btn-primary">Insert</button>
                    </div>
                </div>

                <? form_close();?>


                <div>
                    <table>
                        <thead>
                            <tr>
                                <th>id</th>
                                <th align="center">title</th>
                                <br>
                            </tr>
                        </thead>

                        <tbody>
                            <?php foreach($cat as $row){ ?>
                                <tr>
                                    <td><?php print_r ($row->id); ?></td>

                                    <div class="col-lg-8">
                                    <td>&nbsp<?php print_r ($row->title); ?>
                                       <!-- <p align="right">
                                        <?/*=anchor('Admin/edit/'.$row->id,'Edit',['class'=>'btn btn-warning', 'role'=>'button'])*/?>
                                        <?/*=anchor('Admin/delete/'.$row->id,'Delete',['class'=>'btn btn-danger', 'role'=>'button','onclick'=>'return confirm(\'Are you sure?\')'])*/?>
                                        </p>-->
                                    </td>
                                    </div>
                                </tr>
                            <?php }?>
                            </tbody>

                    </table>


                   <!-- <div id="menu2" class="tab-pane fade">
                    <h3>Delete</h3>
                    <p>Some content in menu 2.</p>
                </div>-->
            </div>
        </div>


    </div>

</div>