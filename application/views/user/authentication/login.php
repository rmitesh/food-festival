<div class="container my-4">
	<?php $this->load->view('user/includes/alerts'); ?>
	<div class="row justify-content-center">
        <div class="col-md-4">
            <h2 class="text-primary"><?php echo get_settings('company_name'); ?></h2>
            <hr/>
            <form id="login_form" autocomplete="off" method="post" action="<?php echo site_url('authentication/'); ?>">
                <input type="hidden" name="is_stall_owner" value="<?php echo (isset($_GET['login']) && $_GET['login'] == 1) ?>" />
                <div class="form-group">
                    <label for="sign-in-email" class="font-weight-bold text-primary">Email <small class="text-danger">*</small></label>
                    <input type="email" class="form-control" placeholder="Email" name="email" id="sign-in-email" value="<?php if (get_cookie('email_cookie')!=null){ echo get_cookie('email_cookie');}?>" required autofocus />
                </div>
                <div class="form-group">
                    <label for="sign-in-password" class="font-weight-bold text-primary">Password <small class="text-danger">*</small></label>
                    <input type="password" class="form-control" placeholder="Password" name="password" id="sign-in-password" value="<?php if (get_cookie('password_cookie')!= null) { echo get_cookie('password_cookie'); }?>" required>
                </div>
                <div class="form-group mb-1">
                    <label class="checkbox-inline">
                        <input type="checkbox" class="styled" name="remember" <?php if (get_cookie('email_cookie')!=null) { echo 'checked'; } ?>>
                        <?php _el('remember_me') ?>
                    </label>
                </div>
                <button type="submit" class="btn btn-primary w-100"><?php _el('login') ?></button>
                <div class="text-center mt-2">
                    Don't have an account? <a href="<?php echo site_url('authentication/signup'); ?>" class="text-primary">Create New</a>  
                </div>
            </form>
        </div>
	</div>
</div>
<script type="text/javascript">
    $("#login_form").validate({
        rules: {
            email: {
                required: true,
                email: true
            },
            password: {
                required: true
            }
        },
    });
</script>
