<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="header">
                        <?php if($this->session->flashdata('registered')) : ?>
                            <p class="alert alert-dismissable alert-success">
                                <?php echo $this->session->flashdata('registered');?>
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
                        <div class="col-m-8 card">
                            <!--Display Errors-->
                            <?php echo validation_errors('<p class="alert alert-dismissable alert-danger">'); ?>
                            <?php echo form_open('Admin/register'); ?>
                            <!--Field: First Name-->
                            <ul>

                                <li><?php echo form_label('First Name:'); ?></li>
                                <?php
                                $data = array(
                                    'name'        => 'first_name',
                                    'value'       => set_value('first_name')
                                );
                                ?>
                                <li><?php echo form_input($data); ?></li>


                                <!--Field: Last Name-->

                                <li><?php echo form_label('Last Name:'); ?></li>
                                <?php
                                $data = array(
                                    'name'        => 'last_name',
                                    'value'       => set_value('last_name')
                                );
                                ?>
                                <li><?php echo form_input($data); ?></li>



                                <!--Field: Email Address-->

                                <li><?php echo form_label('Email Address:'); ?></li>
                                <?php
                                $data = array(
                                    'name'        => 'email',
                                    'value'       => set_value('email')
                                );
                                ?>
                                <li><?php echo form_input($data); ?></li>


                                <!--Field: Username-->

                                <li><?php echo form_label('Username:'); ?></li>
                                <?php
                                $data = array(
                                    'name'        => 'username',
                                    'value'       => set_value('username')
                                );
                                ?>
                                <li><?php echo form_input($data); ?></li>


                                <!--Field: Password-->

                                <li><?php echo form_label('Password:'); ?></li>
                                <?php
                                $data = array(
                                    'name'        => 'password',
                                    'value'       => set_value('password')
                                );
                                ?>
                                <li><?php echo form_password($data); ?></li>

                                <!--Field: Password2-->

                                <li><?php echo form_label('Confirm Password:'); ?></li>
                                <?php
                                $data = array(
                                    'name'        => 'password2',
                                    'value'       => set_value('password2')
                                );
                                ?>
                                <li><?php echo form_password($data); ?></li>

                                <!--Field: Role-->

                                <li><?php echo form_label('Role'); ?></li>
                                <?php

                                $options = array(
                                    '0' => 'user',
                                    '1' => 'admin',
                                    '2' => 'super_user'
                                );

                                echo form_dropdown('admin', $options, 'user');

                                ?>
                            </ul>


                            <!--Submit Buttons-->
                            <?php $data = array("value" => "Add",
                                "name" => "submit",
                                "class" => "btn btn-primary"); ?>
                            <span id="btn_add">
                                        <?php echo form_submit($data); ?>
                                    </span>
                            <?php echo form_close(); ?>
                            <br>
                        </div>
                    </div>
                </div>
            </div>



            <div class="col-md-4">
                <p class="description text-center"> <br>
                    “Never tell me the odds.”  <br>
                    Han Solo"
                </p>
            </div>

        </div>
    </div>
</div>