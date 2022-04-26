<div class="container my-4">
	<?php $this->load->view('user/includes/alerts'); ?>
	<div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="text-primary"><?php echo APP_NAME; ?></h2>
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
                            <input type="email" class="form-control" placeholder="Email" id="email" name="email_id" required />
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="font-weight-bold text-primary" for="spark_id">Spark ID <small class="text-danger">*</small></label>
                            <input type="text" class="form-control" placeholder="Spark ID" id="spark_id" name="spark_id" required />
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="font-weight-bold text-primary" for="contact_number">Contact Number <small class="text-danger">*</small></label>
                            <input type="text" class="form-control" placeholder="Contact Number" id="contact_number" name="contact_number" required />
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
                            <label class="font-weight-bold text-primary" for="dept_id">Department <small class="text-danger">*</small></label>
                            <select name="dept_id" id="dept_id" class="form-control" required>
                                <option value="">-- Select Department --</option>
                                <?php foreach ($departments as $department): ?>
                                    <option value="<?php echo $department['id'] ?>"><?php echo $department['dept_name'] ?></option>
                                <?php endforeach ?>
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
            contact_number: {
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
