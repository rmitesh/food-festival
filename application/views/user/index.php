<div class="container-fluid">
	<?php $this->load->view('user/includes/alerts'); ?>
	
	<div class="row">
		<div class="col-md-12">
			<div class="jumbotron">    
			    <div class="container-fluid text-center">
			        <h4>Add Your Food Items</h4>
			        <p>Add you food items, you can add/edit items till 29th April 04:00 PM only. Than after this portal will be closed. </p>
					<a href="<?php echo base_url('item'); ?>" class="btn btn-outline-dark">Get started!</a>

					<hr class="bg-dark" />

			    </div>
				<section class="container-fluid">
					<h4 class="mb-1">Your Stall Number is </h4>
					<h6 class="text-muted">Note: Stall number will provide by HR.</h6>

					<form method="post" class="col-6 p-0 pt-2" autocomplete="off">
						<div class="form-group">
							<label for="stall_no">Stall Number: </label>
							<input type="text" id="stall_no" name="stall_no" placeholder="Stall Number" class="form-control" value="<?php echo $stall_no; ?>" />
						</div>
						<input type="submit" value="Update" class="btn btn-primary" />
					</form>
				</section>
			</div>
		</div>
	</div>
</div>