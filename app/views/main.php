<!DOCTYPE html>
<html lang="en" style="position: relative; min-height: 100%;">
<head>
    <title><?= $document_title ?></title>
    <link href="<?=base_url()?>assets/css/style.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/bootstrap.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/font-awesome.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/modern-business.css" rel="stylesheet">
    <script src="<?=base_url()?>assets/js/jquery.js"></script>
    <script src="<?=base_url()?>assets/js/jquery.ui.shake.js"></script>
    <script src="<?=base_url()?>assets/js/bootstrap.js"></script>

    <script>
        $(document).ready(function() {
            $('#alert').delay(3000).slideUp("slow");
            window.setTimeout(function() {
                $(".alert").fadeTo(500, 0).slideUp(500, function(){
                    $(this).remove();
                });
            }, 3000);

        });
    </script>

</head>



<!-- Page Content -->
<div class="container" id="back">
    
</div>
<!-- /.container -->
</body>

</html>
