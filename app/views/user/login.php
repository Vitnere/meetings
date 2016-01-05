<script>
    $(document).ready(function () {

        $('#login').click(function () {
            var email = $("#email").val();
            var password = $("#password").val();
            if ($.trim(email).length > 0 && $.trim(password).length > 0) {

                $.ajax({
                    type: "POST",
                    url: '<?=site_url('user/ajaxLogin')?>',
                    data: $('#loginform').serialize(),
                    cache: false,
                    beforeSend: function () {
                        $("#login").val('Connecting...');
                        $("#login").attr("disabled", "disabled");
                    },
                    success: function (data) {
                        if (data) {
                            window.location.href='<?=site_url("index/index")?>';
                        }
                        else {
                            $('#box').shake();
                            $("#login").val('Continue');
                            $("#login").removeAttr("disabled");
                            $("#error").html("<div class='alert alert-danger'><b>Error:</b> Invalid email and password. </div>");
                        }
                    }
                });
            }
            return false;
        });
    });
</script>
<h3>Login</h3>
<div id="box" class="col-lg-offset-3 col-lg-4">
    <form name="loginform" id="loginform" novalidate="" method="post">
        <div class="control-group form-group">
            <div class="controls">
                <label>E-mail:</label>
                <input class="form-control" id="email" name="email" required=""
                       data-validation-required-message="Please enter your email." type="email">

                <p class="help-block"></p>
            </div>
        </div>
        <div class="control-group form-group">
            <div class="controls">
                <label>Password:</label>
                <input class="form-control" id="password" name="password" required=""
                       data-validation-required-message="Please enter your password." type="password">

                <div class="help-block"></div>
            </div>
        </div>
        <input type="submit" class="btn btn-primary" value="Continue" id="login"/>
        <span class='msg'></span>

        <div id="error">
        </div>
    </form>
</div>

            