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

      <?php if($this->session->flashdata('delete')) : ?>
          <p class="alert alert-dismissable alert-success">
              <?php echo $this->session->flashdata('delete');?>
          </p>
      <?php endif; ?>

      <?php if($this->session->flashdata('update')) : ?>
          <p class="alert alert-dismissable alert-success">
              <?php echo $this->session->flashdata('update');?>
          </p>
      <?php endif; ?>

        <?= form_open('Category/insert_cat');?>

        <p align="center">Manage your photo categories here</p>

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
                    <table id="tbuser">
                        <thead>
                            <tr>
                                <th>id</th>&nbsp
                                <th align="center">title</th>
                                <br>
                            </tr>
                        </thead>

                        <tbody>
                            <?php foreach($cat as $row){ ?>
                                <tr>
                                    <div class="col-md-12">
                                    <td><?php print_r ($row->id); ?></td>
                                    </div>


                                    <div class="col-md-12">
                                    <td><br><?php print_r ($row->title); ?>
                                        &nbsp;&nbsp;
                                    <span id="right">
                                        <?=anchor('Category/edit_cat/'.$row->id,'Edit',['class'=>'btn btn-warning', 'role'=>'button'])?>
                                        <?=anchor('Category/del_cat/'.$row->id,'Delete',['class'=>'btn btn-danger', 'role'=>'button','onclick'=>'return confirm(\'Are you sure?\')'])?>
                                    </span>
                                    </td>
                                    </div>
                                </tr>
                            <?php }?>
                            </tbody>

                    </table>

            </div>
        </div>


    </div>

</div>