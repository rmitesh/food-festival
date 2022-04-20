<div class="container-fluid">
	
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
					<?php $this->load->view('user/includes/alerts'); ?>
					<div class="row">
						<div class="col-md-6">
							<h4 class="mb-1">Your Stall Number is </h4>
							<h6 class="text-muted">Note: Stall number will provide by HR.</h6>

							<form method="post" class="col-6 p-0 pt-2" autocomplete="off">
								<div class="form-group">
									<label for="stall_no">Stall Number: </label>
									<input type="text" id="stall_no" name="stall_no" placeholder="Stall Number" class="form-control" value="<?php echo $stall_no; ?>" />
								</div>
								<input type="submit" value="Update" class="btn btn-primary" />

								<?php if (!empty($stall_no)): ?>
									<a href="<?php echo base_url("stall/$stall_no") ?>" target="_black">Go to Menu</a>
								<?php endif ?>
							</form>
						</div>
						<div class="col-md-6 text-center">
							<?php if (!empty($stall_url)): ?>
								<img src="<?php echo $stall_url ?>" alt="QR Code" width="250px" height="250px" class="img img-thumbnail" />
							<?php else: ?>
								<h6>Please add Stall number to generate QR code.</h6>
							<?php endif ?>
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>
</div>