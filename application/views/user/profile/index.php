<div class="container">	
	<h5>My Profile</h5>
	
	<hr class="mt-0">

	<form method="post" id="select-item-form" class="select-item-form" autocomplete="off">
		
		<?php $this->load->view('user/includes/alerts'); ?>

		<form id="signup_form" autocomplete="off" method="post" action="<?php echo site_url('profile') ?>">
		    <div class="row justify-content-center">
		    	<div class="col-lg-8">
		    		<h4>Onwer Details</h4>
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
				                <label class="font-weight-bold text-primary" for="email_id">Email <small class="text-danger">*</small></label>
				                <input type="email" class="form-control" placeholder="Email" id="email_id" name="email_id" value="<?php echo $user['email_id']; ?>" />
				            </div>
				        </div>

				        <div class="col-lg-6">
				            <div class="form-group">
				                <label class="font-weight-bold text-primary" for="contact_number">Phone <small class="text-danger">*</small></label>
				                <input type="text" class="form-control" placeholder="Contact Number" id="contact_number" name="contact_number"  value="<?php echo $user['contact_number']; ?>" />
				            </div>
				        </div>

				        <div class="col-lg-6">
				            <div class="form-group">
				                <label class="font-weight-bold text-primary" for="department">Department <small class="text-danger">*</small></label>
				                <select name="department" id="department" class="form-control">
				                    <option value="">-- Select Department --</option>
				                    <?php foreach ($departments as $department): ?>
				                    	<option value="<?php echo $department['id'] ?>" <?php echo $department['id'] == $user['dept_id'] ? 'selected' : ''; ?>><?php echo $department['dept_name'] ?></option>
				                    <?php endforeach ?>
				                </select>
				            </div>
				        </div>
		    		</div>

					<h4>Stall Details</h4>
					<div class="row">
						<div class="col-lg-6">
				            <div class="form-group">
				                <label class="font-weight-bold text-primary" for="stall_name">Stall Name <small class="text-danger">*</small></label>
				                <input type="text" class="form-control" placeholder="Stall Name" id="stall_name" name="stall_name" value="<?php echo !empty($stall_owner) && $stall_owner['stall_name'] ? $stall_owner['stall_name'] : ''; ?>" />
				            </div>
				        </div>

				        <div class="col-lg-6">
				            <div class="form-group">
				                <label class="font-weight-bold text-primary" for="stall_number">Stall Number <small class="text-danger">*</small></label>
				                <input type="number" class="form-control" placeholder="Stall Number" id="stall_number" name="stall_number" value="<?php echo !empty($stall_owner) && $stall_owner['stall_number'] ? $stall_owner['stall_number'] : ''; ?>" />
				            </div>
				        </div>

				        <div class="col-lg-6">
				            <div class="form-group">
				                <label class="font-weight-bold text-primary" for="total_members">Total Members <small class="text-danger">*</small></label>
				                <input type="number" class="form-control" placeholder="Stall Number" id="total_members" name="total_members" value="<?php echo !empty($stall_owner) && $stall_owner['total_members'] ? $stall_owner['total_members'] : 0; ?>" />
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
