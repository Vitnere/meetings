<h1>Profile</h1>
<hr>
<div class="row">
    <h3>Edit email</h3>
    <div id="box" class="col-lg-offset-1 col-lg-4">
        <form name="loginform" id="loginform" novalidate="" method="post">
            <div class="control-group form-group">
                <div class="controls">
                    <label>E-mail:</label>
                    <input class="form-control" id="email" name="email" required="" value="<?=@$user_email?>"
                           data-validation-required-message="Please enter your email." type="email">
                </div>
                <input type="submit" class="btn btn-primary" value="Save" id="change"/>
            </div>
        </form>

        <div id="error2">
        </div>
    </div>
</div>
<div class="row"><p>&nbsp;</p>
</div>
<hr>
<div class="col-lg-offset-1 col-lg-8">
    <div id="success">
    </div>
</div>

<script>
    $(document).ready(function () {
        $('#change').click(function () {
            var email = $("#email").val();
            if ($.trim(email).length > 0) {
                $.ajax({
                    type: "POST",
                    url: '<?=site_url('user/ajaxChangeEmail')?>',
                    data: $('#loginform').serialize(),
                    cache: false,
                    beforeSend: function () {
                        $("#change").val('Saving...');
                        $("#change").attr("disabled", "disabled");
                    },
                    success: function (data) {
                        if (data) {
                            window.location.href='<?=site_url("user/index")?>';
                        }
                        else {
                            $('#box').shake();
                            $("#change").val('Save');
                            $("#change").removeAttr("disabled");
                            $("#error2").html("<div class='alert alert-danger'><b>Error:</b> Invalid email or email is in use. </div>");
                        }
                    }
                });
            }
            return false;
        });
    })
</script>