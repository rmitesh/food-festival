<div class="container">	
	<div class="d-flex justify-content-between">
		<h5>New Item</h5>
		<a href="<?php echo site_url() ?>" class="btn btn-link text-primary">Item List</a>
	</div>
	<hr class="mt-0">

	<form method="post" id="select-item-form" class="select-item-form" autocomplete="off">
		
		<?php $this->load->view('user/includes/alerts'); ?>

		<div class="row justify-content-center">
			<div class="col-lg-5">
				<div class="form-group">
					<label for="item_name">Name: <span class="text-danger">*</span></label>
					<input type="text" name="item_name" class="form-control item_name" id="item_name" placeholder="Name" />
				</div>

				<div class="form-group">
					<label for="item_price">Price: <span class="text-danger">*</span></label>
					<input type="number" name="item_price" class="form-control item_price" id="item_price" placeholder="Price" max="70" min="0" />
				</div>

				<div class="form-group">
					<button type="submit" class="btn btn-primary ml-auto">Create</button>
					<a href="<?php echo site_url() ?>" class="btn btn-link text-info">Back</a>
			    </div>
			</div>
	   	</div>
   	</form>
</div>
