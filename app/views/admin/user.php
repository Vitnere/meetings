<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="header">


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



                        <!-- <table border="1">
                                    <tbody>
                                    <tr>
                                        <th>first_name</th>
                                        <th>last_name</th>
                                        <th>email</th>
                                        <th>username</th>
                                        <th>admin</th>
                                    </tr>
                                    <?php
                        /*                                    foreach ($result as $row)
                                                            {
                                                                */?><tr>

                                        <td><?php /*echo $row->first_name;*/?></td>
                                        <td><?php /*echo $row->last_name;*/?></td>
                                        <td><?php /*echo $row->email;*/?></td>
                                        <td><?php /*echo $row->username;*/?></td>
                                        <td><?php /*echo $row->admin;*/?></td>
                                        </tr>


                                    <?php /*}
                                    */?>
                                    </tbody>
                                </table>-->


                        <?php
                        if(!empty($result))
                        {
                            foreach($result as $user)
                            {
                                echo $user;
                            }
                        }
                        ?>






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