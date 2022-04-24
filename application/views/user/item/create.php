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
					<label for="name">Name:</label>
					<input type="text" name="name" class="form-control name" id="name" placeholder="Name" />
				</div>

				<div class="form-group">
					<label for="price">Price:</label>
					<input type="number" name="price" class="form-control price" id="price" placeholder="Price" max="70" min="0" />
				</div>
				
				<div class="form-group">
					<label for="category_id">Category:</label>
					<select name="category_id" class="form-control category_id" id="category_id">
						<option value="">Select Category</option>
						<?php if (!empty($categories)) { ?>
							<?php foreach ($categories as $category) { ?>
								<option value="<?php echo $category['id'] ?>"><?php echo $category['name'] ?></option>
							<?php } ?>
						<?php } ?>
					</select>
				</div>

				<div class="form-group">
					<button type="submit" class="btn btn-primary ml-auto">Create</button>
					<a href="<?php echo site_url() ?>" class="btn btn-link text-info">Back</a>
			    </div>
			</div>
	   	</div>
   	</form>
</div>
