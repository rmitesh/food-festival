<div class="container">

	<div class="d-flex justify-content-between">
		<h5>Your Items</h5>
		<a href="<?php echo base_url('item/create') ?>" class="btn btn-link text-info">Add New Item</a>
	</div>
	
	<hr class="mt-1">

	<?php $this->load->view('user/includes/alerts'); ?>

	<div class="row justify-content-between">
		<div class="col-sm-12">
			<div class="text-right">
			</div>
			<div class="table-responsive">
				<table class="table table-striped table-hover">
					<thead>
						<tr>
							<th>#</th>
							<th>Category</th>
							<th>Item Name</th>
							<th>Price</th>
							<th>Created At</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
						<?php if ( !empty( $items ) ) { ?>
							<?php foreach ( $items as $k => $item ) {
								++$k;
								?>
								<tr>
									<td> <?php echo $k; ?> </td>
									<td><?php echo $item['category_name'] ?></td>
									<td><?php echo $item['name'] ?></td>
									<td><?php echo $item['price'] ?></td>
									<td><?php echo date('dS F Y h:i A', strtotime($item['created_at'])) ?></td>
									<td>
										<div class="">
											<a href="<?php echo base_url( 'item/' . $item['id'] . '/edit' ) ?>" class="btn btn-info">Edit</a>
											<!-- <a href="javascript: void(0)" class="btn btn-danger">Delete</a> -->
										</div>
									</td>
								</tr>
							<?php } ?>
						<?php } else { ?>
							<tr>
								<td colspan="6" class="text-center">No items found</td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
