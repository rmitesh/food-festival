<div class="container my-4">
	<?php $this->load->view('user/includes/alerts'); ?>
	<div class="row justify-content-center">
        <?php if ( $is_stall_entry_open && !( isset($_GET['login']) && $_GET['login'] == 1 ) ) { ?>
    		<div class="col-md-7">
                <h4>Stall Owner Sign Up</h4>
                <hr/>
    			<form id="signup_form" autocomplete="off" method="post" action="<?php echo site_url('authentication/signup') ?>">
                    <div class="row">
                        <div class="col-md-6">
            				<div class="form-group">
            					<label for="first_name">First Name <span class="text-danger">*</span></label>
            					<input type="text" class="form-control" placeholder="First Name" id="first_name" name="first_name" />
            				</div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="last_name">Last Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Last Name" id="last_name" name="last_name" />
            				</div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
            					<label for="email">Email <span class="text-danger">*</span></label>
                                <input type="email" class="form-control" placeholder="Email" id="email" name="email" class="email" />
            				</div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
            					<label for="mobile_no">Phone <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Phone" id="mobile_no" name="mobile_no" />
            				</div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
            					<label for="password">Password <span class="text-danger">*</span></label>
                                <input type="password" class="form-control" placeholder="Password" id="password" name="password" />
            				</div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="confirm_password">Confirm Password <span class="text-danger">*</span></label>
                                <input type="password" id="confirm_password" name="confirm_password" class="form-control" placeholder="Confirm Password" />
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="department">Department <span class="text-danger">*</span></label>
                                <select name="department" id="department" class="form-control">
                                    <option value="">-- Select Department --</option>
                                    <option value="php">PHP</option>
                                    <option value="qa">QA</option>
                                    <option value="hrd">HRD</option>
                                    <option value="mobile">Mobile</option>
                                    <option value="marketing">Marketing</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex align-items-center">
    				    <button type="submit" class="btn btn-primary">Sign Up</button>
                        <?php if ($is_stall_entry_open) { ?>
                            <a href="<?php echo site_url('authentication?login=1') ?>" class="ml-4">Stall Login</a>
                        <?php } ?>
                    </div>
    			</form>
    		</div>
        <?php } else { ?>
    		<div class="col-md-4">
                <h4> <?php echo (isset($_GET['login']) && $_GET['login'] == 1) ? 'Stall Owner ' : '' ?>Login</h4>
                <hr/>
    			<form id="login_form" autocomplete="off" method="post" action="<?php echo site_url('authentication/'); ?>">
                    <input type="hidden" name="is_stall_owner" value="<?php echo (isset($_GET['login']) && $_GET['login'] == 1) ?>" />
    				<div class="form-group">
                        <label for="sign-in-email">Email <small class="text-danger">*</small></label>
    					<input type="email" class="form-control" placeholder="Email" name="email" id="sign-in-email" value="<?php if (get_cookie('email_cookie')!=null){ echo get_cookie('email_cookie');}?>" >
    				</div>
    				<div class="form-group">
                        <label for="sign-in-password">Password <small class="text-danger">*</small></label>
    					<input type="password" class="form-control" placeholder="Password" name="password" id="sign-in-password" value="<?php if (get_cookie('password_cookie')!= null) { echo get_cookie('password_cookie'); }?>">
    				</div>
                    <div class="form-group">
                        <label class="checkbox-inline">
                            <input type="checkbox" class="styled" name="remember" <?php if (get_cookie('email_cookie')!=null)
                            {
                                echo "checked";
                            } ?>>
                            <?php _el('remember_me') ?>
                        </label>
                        <a class="pull-right" href="<?php echo site_url('authentication/forgot_password'); ?>"><?php _el('forgot_password') ?></a>
                    </div>	
    				<button type="submit" class="btn btn-primary"><?php _el('login') ?></button>
    			</form>
    		</div>
        <?php } ?>
	</div>
<script type="text/javascript">

$.validator.addMethod("emailExists", function(value, element) {
    var mail_id = $(element).val();
    var ret_val = '';
    $.ajax({
        url: BASE_URL+'authentication/email_exists',
        type: 'POST',
        data: { email: mail_id },
        async: false,
        success: function(msg) {   
            if(msg==1)
            {
                ret_val = false;
            }
            else
            {
                ret_val = true;
            }
        }
    }); 

    return ret_val;
}, "<?php _el('email_exists') ?>");

$("#signup_form").validate({
    rules: {
        first_name: {
            required: true,
        },
        last_name: {
            required: true,
        },
        mobile_no: {
            required: true,
            number: true,
            minlength:10,
        },
        email: {
            required: true,
            email: true,
            emailExists: true,
        },
        password: {
            required: true,
            minlength: 8
        },
        confirm_password: {
            required: true,
            equalTo: "#password",
        },
    },
}); 

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
