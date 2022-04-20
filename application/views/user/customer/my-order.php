<div class="container-fluid">
	<?php $this->load->view('user/includes/alerts'); ?>

	<section class="row justify-content-center">
		<div class="col-md-12">
			<div class="d-flex justify-content-between align-items-center">
				<h4>Your Orders</h4>
				<span class="text-dark">
					<strong>Phone Number: </strong> <?php echo $customer['phone_number']; ?>
				</span>
			</div>

			<hr>
			<?php if (!empty($order_lists)): ?>
				<div class="row">
					<?php foreach ($order_lists as $owner_id => $lists): ?>
						<div class="col-12">
							<div class="card">
								<div class="card-header">
									<h6 class="m-0"> Stall: <?php echo get_user_info($owner_id, 'stall_no') ?> ( <?php echo get_user_info($owner_id, 'first_name') ?> )</h6>
								</div>
								<div class="card-body">
									<div class="row">
										<?php foreach ( $lists as $order_id => $order ): ?>
											<div class="col-lg-4 col-sm-12 ">
												<div class="card">
													<div class="card-header bg-dark text-white">
														<h6> Order Number: <?php echo $order_id; ?></h6>
														<h6 class="m-0"> Date: <?php echo date('d/m/Y h:i A', strtotime($order['created_at'])); ?></h6>
													</div>
													<ul class="list-group list-group-flush">
														<?php foreach ($order['order_items'] as $order_items): ?>
															<li class="list-group-item d-flex justify-content-between">
																<span><?php echo $order_items['item_name']; ?></span>
																<div class="">
																	<span><?php echo $order_items['price'] . ' x ' . $order_items['quantity']; ?> <small>( Qty )</small> </span> = 
																	<span><?php echo ($order_items['price'] * $order_items['quantity']) . '/-'; ?> </span>
																</div>
															</li>
														<?php endforeach ?>
												  	</ul>
												  	<div class="card-footer d-flex justify-content-between align-items-center">
														<h6 class="m-0">Total Amount:</h6>
														<h6 class="m-0"><?php echo $order['total_amount'] . '/-' ?></h6>
													</div>
												</div>
											</div>
										<?php endforeach ?>
									</div>
								</div>
							</div>
						</div>
						<hr class="bg-dark">
					<?php endforeach ?>
				</div>
			<?php endif ?>
		</div>
	</section>
</div>