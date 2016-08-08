<?php defined('BASEPATH') OR exit('No direct script access allowed');
/*if($this->input->post())
{
    $title          = set_value('title');
    $description    = set_value('description');
    $date           = set_value('date');
} else
{
    $title          = $event->title;
    $description    = $event->description;
    $date           = $event->date;
}
*/?>

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

<div class="row">
        <h3 class="svgbg">Events&nbsp</h3>
    <!-- Button trigger modal -->
    <a type="button" data-toggle="modal" href="#myModal1">
        <ul>
            <li><span style="font-size:13px;">See all events</span>&nbsp&nbsp&nbsp<?php echo $count_events; ?></li>
        </ul>
    </a>

    <!-- Events Modal -->
    <div class="modal fade modal-wide" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Events</h4>
                </div>
                <div class="modal-body">
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
                                    <td>
                                        <!-- Edit button-->
                                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal2">Edit</button>
                                        <!--Edit modal-->
                                        <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                            <div class="modal-dialog" role="document">
                                                <!--<div class="modal-content">
                                           <?php /*form_open_multipart('Event/user_edit_event/'.$event->id)*/?>
                                           <div class="form-group">
                                               <label for="title">Title</label>
                                               <input type="text" class="form-control" name="title" value="<?/*=$title*/?>">
                                           </div>

                                           <div class="form-group">
                                               <label for="description">Description</label>
                                               <input type="text" class="form-control" name="description" value="<?/*=$description*/?>">
                                           </div>

                                           <div class="form-group">
                                               <label for="date">Date</label>
                                               <input type="date" class="form-control" name="date" value="<?/*=$date*/?>">
                                           </div>

                                           <button type="submit" class="btn btn-primary">Update</button>
                                           <?/*form_close();*/?>
                                           </div>-->

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                    <!--<button type="button" class="btn btn-primary">Save changes</button>-->
                                                </div>
                                            </div>
                                        </div></div>
                                        <!-- Invite button-->
                                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal3">Invite</button>
                                        <!-- Invite Modal -->
                                        <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                        <h4 class="modal-title" id="myModalLabel">Send invitation</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="<?php base_url()?>Event/invite" method="post" class="form-inline">
                                                            <div class="form-group">
                                                                <label for="name">Name</label>
                                                                <input  type="text" name="name" class="form-control" id="exampleInputName2" placeholder="your name here">
                                                            </div><br>
                                                            <div  class="form-group">
                                                                <label  for="email">Sender</label>
                                                                <input type="email" name="sender" class="form-control" id="exampleInputEmail2" placeholder="your mail here">
                                                            </div><br>
                                                            <div class="form-group">
                                                                <label for="email">Receiver</label>
                                                                <input  type="email" name="receiver" class="form-control" id="exampleInputEmail2" placeholder="receiver mail here">
                                                            </div><br>
                                                            <div class="form-group">
                                                                <label for="invitation">Invitation</label>
                                                                <textarea  name="message" rows="4" type="text" class="form-control" id="exampleInputInvitation1">You are invited to event</textarea>
                                                            </div><br>
                                                            <button id="btn_invite" type="submit" class="btn btn-primary">Send invitation</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Delete button-->
                                        <?=anchor('Event/user_delete_event/'.$row->id,'Delete',['class'=>'btn btn-danger', 'role'=>'button','onclick'=>'return confirm(\'Are you sure?\')'])?>
                                    </td>
                            </tr>
                        <?php }?>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <span><!--add new-->
                        <!--add new event button-->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal4">Add new</button>
                        <!--add new event modal-->
                            <div class="modal fade add_event" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="col-md-4">
                                                <?php echo form_open('Event/user_insert_event'); ?>
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
                    </span>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div><!--row close-->


<div class="secondary-section gray">
    <h3 class="svgbg">Bilateral Talks</h3>
    <div class="secondary-content">
        <ul>
            <li><span style="font-size:13px;">Participants</span><span class="number">89</span></li>
            <li><span style="font-size:13px;">Meetings Requested</span><span class="number">339</span></li>
            <li><span style="font-size:13px;">Meetings Accepted</span><span class="number">165</span></li>
        </ul>
    </div>
</div>

<div class="secondary-section">
    <h3 class="svgbg">Participants</h3>

    <div class="secondary-content">
        <ul class="participants">

            <li>
                <span><a href="#">Bosnia-Herzegovina</a></span>
                <span class="number">7</span>
            </li>

            <li>

                <span><a href="#">Bulgaria</a></span>
                <span class="number">4</span>
            </li>

            <li>

                <span><a href="#">Greece</a></span>
                <span class="number">3</span>
            </li>

            <li>

                <span><a href="/members/country/5/Hungary">Hungary</a></span>
                <span class="number">1</span>
            </li>

            <li>

                <span><a href="/members/country/6/Italy">Italy</a></span>
                <span class="number">1</span>
            </li>

            <li>

                    <span><a href="/members/country/126/Macedonia">Macedonia</a></span>
                <span class="number">47</span>
            </li>

            <li>

                    <span><a href="/members/country/140/Montenegro">Montenegro</a></span>
                <span class="number">7</span>
            </li>

            <li>

                    </span><span><a href="/members/country/168/Poland">Poland</a></span>
                <span class="number">3</span>
            </li>

            <li>

                    <span><a href="/members/country/11/Romania">Romania</a></span>
                <span class="number">3</span>
            </li>

            <li>

                    <span><a href="/members/country/7/Serbia">Serbia</a></span>
                <span class="number">9</span>
            </li>

            <li>

                    </span><span><a href="/members/country/185/Slovenia">Slovenia</a></span>
                <span class="number">4</span>
            </li><br>

            <li class="total">
                <span>Total of Participants</span><span class="number">89</span>
            </li>

        </ul>
    </div>
</div>

<div class="secondary-section gray">
    <h3 class="svgbg">Profile views</h3>
    <div class="secondary-content">
        <ul>
            <li><span>Before Event</span><span class="number">7049</span></li>
            <li><span>After Event</span><span class="number">13226</span></li>
        </ul>
    </div>
</div>

<div>
    <?php foreach($category as $img) :?>
        <div>
            <?php echo " ".$img['title'];?>  <br>
            <?php foreach($img['r_images'] as $imgage) :?>
                <div class="thumbnail">
                    <?=img($imgage->file)?> <br>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endforeach; ?>
</div>



