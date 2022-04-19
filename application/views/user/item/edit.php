<div class="container">
	
	<div class="d-flex justify-content-between">
		<h5>Edit Item</h5>
		<a href="<?php echo base_url('item') ?>" class="btn btn-link text-info">Item List</a>
	</div>
	<hr class="mt-0">

	<form method="post" id="select-item-form" class="select-item-form" autocomplete="off">
		
		<?php $this->load->view('user/includes/alerts'); ?>

		<div class="row justify-content-between">
			<div class="col-md-6">
				<div class="form-group">
					<label for="name">Name:</label>
					<input type="text" name="name" class="form-control name" id="name" placeholder="Name" value="<?php echo $item['name'] ?>" />
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label for="price">Price:</label>
					<input type="number" name="price" class="form-control price" id="price" placeholder="Price" max="70" min="0" value="<?php echo $item['price'] ?>" />
				</div>
			</div>

			<div class="col-md-6">
				<div class="form-group">
					<label for="category_id">Category:</label>
					<select name="category_id" class="form-control category_id" id="category_id">
						<option value="">Select Category</option>
						<?php if (!empty($categories)) { ?>
							<?php foreach ($categories as $category) { ?>
								<option value="<?php echo $category['id'] ?>" <?php echo $item['category_id'] == $category['id'] ? 'selected' : '' ?> ><?php echo $category['name'] ?></option>
							<?php } ?>
						<?php } ?>
					</select>
				</div>
			</div>

			<div class="col-12">
				<div class="form-group">
					<button type="submit" class="btn btn-outline-success ml-auto">Update</button>
					<a href="<?php echo base_url('item') ?>" class="btn btn-link text-info">Back</a>
			    </div>
			</div>
	   	</div>
   	</form>
</div>
