<div class="container-fluid">
	
	<?php $this->load->view('user/includes/alerts'); ?>

	<div class="row">
		<div class="col-lg-8">
		    <div class="container-fluid">
		    	<div class="d-flex justify-content-between">
		    		<h4>Manage Menu</h4>
    				<a href="<?php echo base_url('menu/create') ?>" class="btn btn-primary">New Menu</a>
		    	</div>
				<hr class="bg-dark" />
				<div class="row">
					<div class="col-lg-12">
						<div class="table-responsive">
							<table class="table table-striped table-hover">
								<thead>
									<tr>
										<th>Item Name</th>
										<th>Price</th>
										<th width="15%">Actions</th>
									</tr>
								</thead>
								<tbody>
									<?php if ( !empty( $menus ) ) { ?>
										<?php foreach ( $menus as $item ) { ?>
											<tr>
												<td class="align-middle"><?php echo $item['item_name'] ?></td>
												<td class="align-middle"><?php echo '&#8377; ' . $item['item_price'] ?></td>
												<td width="15%">
													<div class="">
														<a href="<?php echo base_url( 'menu/' . $item['id'] . '/edit' ) ?>" class="btn btn-primary">
															<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
															  	<path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
															  	<path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
															</svg>
														</a>
														<a href="<?php echo base_url( 'menu/' . $item['id'] . '/destory' ) ?>" class="btn btn-danger delete-item">
															<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
															  	<path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
															  	<path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
															</svg>
														</a>
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
		</div>
		<div class="col-lg-4">
			<section class="container-fluid">
				<h4 class="mb-4">Manage Stall</h4>
				<hr class="bg-dark" />

				<div class="row">
					<div class="col-lg-12">
						<form method="post" class="col-12 p-0 pt-2" autocomplete="off">
							<div class="form-group">
								<label for="stall_name">Stall Name: </label>
								<input type="text" id="stall_name" name="stall_name" placeholder="Stall Name" class="form-control" value="<?php echo $stall_owner['stall_name']; ?>" />
							</div>
							<div class="form-group">
								<label for="stall_number">Stall Number: </label>
								<input type="text" id="stall_number" name="stall_number" placeholder="Stall Number" class="form-control" value="<?php echo $stall_owner['stall_number']; ?>" />
							</div>
							<input type="submit" value="Save" class="btn btn-primary" />
							<?php if (!empty($stall_owner['stall_qr_code'])): ?>
								<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-qr-code">
									Show QR Code
								</button>
							<?php endif ?>
						</form>
					</div>
				</div>
			</section>
		</div>
	</div>
</div>

<div class="modal fade" id="modal-qr-code" tabindex="-1" role="dialog" aria-labelledby="modal-title" aria-hidden="true">
  	<div class="modal-dialog modal-dialog-centered modal-sm" role="document">
    	<div class="modal-content">
	      	<div class="modal-header">
	        	<h5 class="modal-title" id="modal-title">Your QR Code</h5>
	        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          		<span aria-hidden="true">&times;</span>
	        	</button>
	      	</div>
	      	<div class="modal-body text-center">
	        	<img src="<?php echo base_url('assets/img/qr/'.$stall_owner['stall_qr_code']) ?>" alt="QR Code" width="250px" height="250px" class="img img-thumbnail border-primary" />
	      	</div>
	      	<div class="modal-footer justify-content-center">
	        	<label>Scan this QR code to show menu.</label>
	        </div>
    	</div>
  	</div>
</div>

<script type="text/javascript">
	$(document).on('click', '.delete-item', function(event) {
		event.preventDefault();
		if (confirm('Are you sure you want to delete')) {
			let url = $(this).attr('href');
			let html = `
				<form action="${url}" method="post" id="delete-item-form"></form>
			`;
			$('body').append(html);
			$(document).find('#delete-item-form')[0].submit();
		}
	});
</script>
