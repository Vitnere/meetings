<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">

                        <?php if($this->session->flashdata('delete')) : ?>
                            <p class="alert alert-dismissable alert-success">
                                <?php echo $this->session->flashdata('delete');?>
                            </p>
                        <?php endif; ?>


                        <ul class="pagination">
                            <li>
                                <a href="<?php echo base_url();?>Admin/users" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li><a href="<?php echo base_url();?>Admin/users">Manage Users</a></li>
                            <li><a href="<?php echo base_url();?>Admin/add_user">Add User</a></li>
                            <li>
                                <a href="<?php echo base_url();?>Admin/users" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="content">

                        <table id="tbuser">
                            <thead>
                            <tr>
                                <th>First name</th>
                                <th>Last Name</th>
                                <th>Username</th>
                                <th>Admin</th>
                                <br>
                            </tr>
                            </thead>

                            <tbody>
                            <!-- fetch data from users table into user view-->
                            <?php foreach($user as $row){ ?>
                                <tr>
                                    <div class="col-md-12">
                                    <td><?php print_r ($row->first_name); ?></td>
                                    <td><?php print_r ($row->last_name); ?></td>
                                    <td><?php print_r ($row->username); ?></td>
                                    <td><?php print_r ($row->admin); ?>
                                        &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
                                   <span id="right">
                                        <?=anchor('Admin/edit/'.$row->id,'Edit',['class'=>'btn btn-warning', 'role'=>'button'])?>
                                        <?=anchor('Admin/del_user/'.$row->id,'Delete',['class'=>'btn btn-danger', 'role'=>'button','onclick'=>'return confirm(\'Are you sure?\')'])?>
                                        </span></td>
                                    </div>
                                </tr>
                            <?php }?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <p align="center"> <br>
                    “Never tell me the odds.”  <br>
                    Han Solo"
                </p>
            </div>

        </div>
    </div>
</div>