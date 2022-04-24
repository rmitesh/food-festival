<div class="container">	
	<h5>My Profile</h5>
	
	<hr class="mt-0">

	<form method="post" id="select-item-form" class="select-item-form" autocomplete="off">
		
		<?php $this->load->view('user/includes/alerts'); ?>

		<form id="signup_form" autocomplete="off" method="post" action="<?php echo site_url('profile') ?>">
		    <div class="row justify-content-center">
		    	<div class="col-lg-8">
		    		<div class="row">
				        <div class="col-lg-6">
				            <div class="form-group">
				                <label class="font-weight-bold text-primary" for="first_name">First Name <small class="text-danger">*</small></label>
				                <input type="text" class="form-control" placeholder="First Name" id="first_name" name="first_name" value="<?php echo $user['first_name']; ?>" />
				            </div>
				        </div>

				        <div class="col-lg-6">
				            <div class="form-group">
				                <label class="font-weight-bold text-primary" for="last_name">Last Name <small class="text-danger">*</small></label>
				                <input type="text" class="form-control" placeholder="Last Name" id="last_name" name="last_name" value="<?php echo $user['last_name']; ?>" />
				            </div>
				        </div>
		    			
				        <div class="col-lg-6">
				            <div class="form-group">
				                <label class="font-weight-bold text-primary" for="email">Email <small class="text-danger">*</small></label>
				                <input type="email" class="form-control" placeholder="Email" id="email" name="email" class="email" value="<?php echo $user['email']; ?>" />
				            </div>
				        </div>

				        <div class="col-lg-6">
				            <div class="form-group">
				                <label class="font-weight-bold text-primary" for="mobile_no">Phone <small class="text-danger">*</small></label>
				                <input type="text" class="form-control" placeholder="Phone" id="mobile_no" name="mobile_no"  value="<?php echo $user['mobile_no']; ?>" />
				            </div>
				        </div>

				        <div class="col-lg-6">
				            <div class="form-group">
				                <label class="font-weight-bold text-primary" for="department">Department <small class="text-danger">*</small></label>
				                <select name="department" id="department" class="form-control">
				                    <option value="">-- Select Department --</option>
				                    <option value="php" <?php echo $user['department'] == 'php' ? 'selected' : ''; ?>>PHP</option>
				                    <option value="qa" <?php echo $user['department'] == 'qa' ? 'selected' : ''; ?>>QA</option>
				                    <option value="hrd" <?php echo $user['department'] == 'hrd' ? 'selected' : ''; ?>>HRD</option>
				                    <option value="mobile" <?php echo $user['department'] == 'mobile' ? 'selected' : ''; ?>>Mobile</option>
				                    <option value="marketing" <?php echo $user['department'] == 'marketing' ? 'selected' : ''; ?>>Marketing</option>
				                    <option value="dotnet" <?php echo $user['department'] == 'dotnet' ? 'selected' : ''; ?>>Dot Net</option>
				                </select>
				            </div>
				        </div>
		    		</div>
				    <div class="d-flex align-items-center">
				        <button type="submit" class="btn btn-primary">Update</button>
						<a href="<?php echo base_url() ?>" class="btn btn-link text-primary">Back</a>
				    </div>
		    	</div>

		    </div>
		</form>
   	</form>
</div>
