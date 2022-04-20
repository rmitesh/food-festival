<div class="container-fluid">
	<?php $this->load->view('user/includes/alerts'); ?>

	<section class="row justify-content-center">
		<div class="col-lg-4 col-sm-6">
			<h4>Login</h4>
			
			<form id="customer-login" method="post" autocomplete="off" action="<?php echo site_url('customer') ?>">
				<div class="form-group">
					<label for="phone_number">Phone Number</label>
					<input type="text" placeholder="Phone Number" id="phone_number" name="phone_number" class="form-control" required autofocus />
				</div>

				<div class="form-group">
					<label for="refer_employee">You are invited by</label>
					<select name="refer_employee" id="refer_employee">
						<option value="" selected>Invited by</option>
						<?php foreach ($invited_by as $spark => $name): ?>
							<option value="<?php echo $spark ?>"><?php echo $name ?></option>
						<?php endforeach ?>
					</select>
				</div>
				<div class="form-group">
					<input type="submit" class="btn btn-primary" value="Login" />
				</div>
			</form>
		</div>
	</section>
</div>

<script type="text/javascript">
	$(document).ready(function() {
		$('#customer-login').validate({
			rules: {
				phone_number: {
					required: true,
					number: true,
				},
				refer_employee: {
					required: true,
				}
			}
		});
	});
</script>