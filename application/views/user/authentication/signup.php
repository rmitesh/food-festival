<div class="container my-4">
	<?php $this->load->view('user/includes/alerts'); ?>
	<div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="text-primary"><?php echo get_settings('company_name'); ?></h2>
            <hr/>

            <form id="signup_form" autocomplete="off" method="post" action="<?php echo site_url('authentication/signup') ?>">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="font-weight-bold text-primary" for="first_name">First Name <small class="text-danger">*</small></label>
                            <input type="text" class="form-control" placeholder="First Name" id="first_name" name="first_name" autofocus required />
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="font-weight-bold text-primary" for="last_name">Last Name <small class="text-danger">*</small></label>
                            <input type="text" class="form-control" placeholder="Last Name" id="last_name" name="last_name" required />
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="font-weight-bold text-primary" for="email">Email <small class="text-danger">*</small></label>
                            <input type="email" class="form-control" placeholder="Email" id="email" name="email" class="email" required />
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="font-weight-bold text-primary" for="mobile_no">Phone <small class="text-danger">*</small></label>
                            <input type="text" class="form-control" placeholder="Phone" id="mobile_no" name="mobile_no" required />
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="font-weight-bold text-primary" for="password">Password <small class="text-danger">*</small></label>
                            <input type="password" class="form-control" placeholder="Password" id="password" name="password" required />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="font-weight-bold text-primary" for="confirm_password">Confirm Password <small class="text-danger">*</small></label>
                            <input type="password" id="confirm_password" name="confirm_password" class="form-control" placeholder="Confirm Password" required />
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="font-weight-bold text-primary" for="department">Department <small class="text-danger">*</small></label>
                            <select name="department" id="department" class="form-control" required>
                                <option value="">-- Select Department --</option>
                                <option value="php">PHP</option>
                                <option value="qa">QA</option>
                                <option value="hrd">HRD</option>
                                <option value="mobile">Mobile</option>
                                <option value="marketing">Marketing</option>
                                <option value="marketing">Dot Net</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="d-flex align-items-center">
                    <button type="submit" class="btn btn-primary">Sign Up</button>
                </div>
                <div class="text-center mt-2">
                    Already have an account? <a href="<?php echo site_url('authentication'); ?>" class="text-primary">Login</a>  
                </div>
            </form>
        </div>
	</div>
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
</script>
