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
        <textarea  name="message" rows="4" type="text" class="form-control" id="exampleInputInvitation1">
            You are invited to event
        </textarea>
    </div><br>
    <button id="btn_invite" type="submit" class="btn btn-primary">Send invitation</button>
</form>