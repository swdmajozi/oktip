

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    
   // Parse URL Queries Method
(function($){
    $.getQuery = function( query ) {
        query = query.replace(/[\[]/,"\\\[").replace(/[\]]/,"\\\]");
        var expr = "[\\?&]"+query+"=([^&#]*)";
        var regex = new RegExp( expr );
        var results = regex.exec( window.location.href );
        if( results !== null ) {
            return results[1];
            return decodeURIComponent(results[1].replace(/\+/g, " "));
        } else {
            return 'admin';
        }
    };
})(jQuery);
  
// Document load
$(function(){
    var test_query = $.getQuery('reflink');
   // alert(test_query); // For the URL /?test=yes, the value would be "yes"

 $('#referer').val(test_query);
// $("#referer").prop('disabled', true);
});

}); 
</script>
<div class="col-md-8 col-md-offset-4 text-center">
    <?php if(isset($message) || validation_errors() !== ''): ?>
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4><i class="icon fa fa-warning"></i> Alert!</h4>
            <?= isset($message)? $message: ''; ?>
        </div>
    <?php endif; ?>

    <div class="form-box">

        <?php echo form_open("auth/register",'class="login-form"' );?>
        <div class="caption">
            <h3 class="box-title"><?= $title ?></h3>
        </div>

        <div class="form-group has-feedback">

            <?php echo form_input($first_name);?>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>

        <div class="form-group has-feedback">
            <?php echo form_input($last_name);?>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>

        </div>

        <?php
        if($identity_column!=='email') {
            echo '<p>';
            echo lang('create_user_identity_label', 'identity');
            echo '<br />';
            echo form_error('identity');
            echo form_input($identity);
            echo '</p>';
        }
        ?>
         

        <div class="form-group has-feedback">
            <?php echo form_input($email);?>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>

        </div>

        <div class="form-group has-feedback">
            <?php echo form_input($phone);?>
            <span class="glyphicon glyphicon-phone form-control-feedback"></span>

        </div>

        <div class="form-group has-feedback">
            <?php echo form_input($username);?>
            <span class="glyphicon glyphicon-phone form-control-feedback"></span>

        </div>


        <div class="form-group has-feedback">
            <?php echo form_input($referer);?>
            <span class="glyphicon glyphicon-phone form-control-feedback"></span>

        </div>

        <div class="form-group has-feedback">
            <?php echo form_input($bankname);?>
            <span class="glyphicon glyphicon-home form-control-feedback"></span>

        </div>
        <div class="form-group has-feedback">
            <?php echo form_input($bankaccount);?>
            <span class="glyphicon glyphicon-home form-control-feedback"></span>

        </div>
        <div class="form-group has-feedback">
            <?php echo form_input($bankcode);?>
            <span class="glyphicon glyphicon-home form-control-feedback"></span>

        </div>
        <div class="form-group has-feedback">
            <?php echo form_input($accounttype);?>
            <span class="glyphicon glyphicon-home form-control-feedback"></span>

        </div>

        <div class="form-group has-feedback">
            <?php echo form_input($password);?>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>

        <div class="form-group has-feedback">
            <?php echo form_input($password_confirm);?>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
            <?php echo form_submit('submit', 'Register',['class'=>"btn btn-primary btn-block btn-flat"]);?>
        </div>

        <?php echo form_close();?>

        <a href="<?php echo site_url('login'); ?>" class="text-center">I already have an account?</a>

    </div>
</div>

