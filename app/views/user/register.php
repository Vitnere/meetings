<script>
    $(document).ready(function () {
        $('#register').click(function () {
            var email = $("#email").val();
            var password = $("#password").val();
            var first_name = $("#first_name").val();
            var last_name = $("#last_name").val();
            if ($.trim(email).length > 5 && $.trim(password).length > 5 && $.trim(first_name).length > 5 && $.trim(last_name).length > 5) {
                $.ajax({
                    type: "POST",
                    url: '<?=site_url('user/ajaxRegister')?>',
                    data: $('#registerform').serialize(),
                    cache: false,
                    beforeSend: function () {
                        $("#register").val('Connecting...');
                        $("#register").attr("disabled", "disabled");
                    },
                    success: function (data) {
                        if (data) {
                            $("#success").html("<div class='alert alert-success'><b>Success:</b> You are successful registered. </div>");
                            window.location.href='<?=site_url("index/index")?>';
                        }
                        else {
                            $('#box').shake();
                            $("#register").val('Continue');
                            $("#register").removeAttr("disabled");
                            $("#error").html("<div class='alert alert-danger'><b>Error:</b> Email already in use or email is not valid. </div>");
                        }
                    }
                });
            }
            else{
                $("#error").html("<div class='alert alert-danger'><b>Error:</b> Fill correct the form. </div>");
            }
            return false;
        });
    });
</script>
<h3>Create account</h3>
<div id="box">
    <form name="registerform" id="registerform" novalidate="" class="col-lg-offset-3 col-lg-4">
        <div class="control-group form-group">
            <div class="controls">
                <label>First name:</label>
                <input class="form-control" id="first_name" name="first_name" required="true"
                       data-validation-required-message="Please enter your name." type="text">

                <p class="help-block"></p>
            </div>
        </div>
        <div class="control-group form-group">
            <div class="controls">
                <label>Last name:</label>
                <input class="form-control" id="last_name" name="last_name" required="true"
                       data-validation-required-message="Please enter your last name." type="text">

                <p class="help-block"></p>
            </div>
        </div>
        <div class="control-group form-group">
            <div class="controls">
                <label>E-mail:</label>
                <input class="form-control" id="email" name="email" required="true"
                       data-validation-required-message="Please enter your email address." type="email">

                <div class="help-block"></div>
            </div>
        </div>
        <div class="control-group form-group">
            <div class="controls">
                <label>Password:</label>
                <input class="form-control" id="password" name="password" required="true"
                       data-validation-required-message="Please enter your password." type="password">

                <div class="help-block"></div>
            </div>
        </div>
        <input type="submit" class="btn btn-primary" value="Register" id="register"/>
        <span class='msg'></span>

        <div id="error">
        </div>
        <div id="success">
        </div>
    </form>
</div>
            