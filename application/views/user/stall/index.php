<div class="container-fluid">
	<?php $this->load->view('user/includes/alerts'); ?>

	<section class="row justify-content-center">
		<div class="col-md-8">
			<h4>Stall <?php echo $stall['stall_no'] ?> Menu</h4>
			<span class="text-dark"><strong>Owner: </strong> <?php echo $stall['name']; ?></span>

			<form id="save-order-form" method="post" action="<?php echo site_url('stall/'.$stall['stall_no'].'/place-order') ?>">

				<input type="hidden" value="<?php echo $stall['id'] ?>" name="owner_id" />

				<div class="table-responsive mt-2">
					<table class="table table-stripedtable-hover">
					  	<thead class="thead-dark">
						    <tr>
						      	<th scope="col">Item Name</th>
						      	<th width="10%" scope="col">Price</th>
						      	<th width="15%" scope="col" align="right"></th>
						      	<th width="15%" scope="col" align="right"></th>
					    	</tr>
					    </thead>
					    <tbody>
							<?php foreach ($items as $item): ?>
						    	<tr>
						    		<td><?php echo $item['name'] ?></td>
						    		<td><?php echo $item['price'] . '/-' ?></td>
						    		<th scope="row" align="right">
						    			<input type="number" value="1" min="1" max="10" step="1" class="form-control" name="quantity[<?php echo $item['id'] ?>]" disabled />
						    		</th>
						    		<th scope="row" align="right">
						    			<div class="form-check text-right mr-4">
											<label class="form-check-label" for="item_<?php echo $item['id'] ?>">&nbsp;</label>
											<input class="form-check-input enable-item" name="item[<?php echo $item['id'] ?>]" type="checkbox" value="<?php echo $item['price'] ?>" id="item_<?php echo $item['id'] ?>">
										</div>
						    		</th>
						    	</tr>
							<?php endforeach ?>
					    </tbody>
					</table>

					<div class="form-group text-right">
						<input type="submit" id="save-order" class="btn btn-primary" value="Order" disabled />
					</div>
				</div>
			</form>
		</div>
	</section>
</div>

<script type="text/javascript">
	function enableOrderButton() {
		if ($(document).find('.enable-item:checked').length) {
			$(document).find('#save-order').removeAttr('disabled');
		} else {
			$(document).find('#save-order').attr('disabled', 'disabled');
		}
	}

	$(document).on('submit', '#save-order-form', function(event) {
		event.preventDefault();
		$(document).find('#save-order').attr('disabled', 'disabled');
		$(this)[0].submit();
	})

	$(document).on('change', '.enable-item', function(event) {
		let $input = $(this).parent().parent().prev().find('input');

		$input.val(1);
		if ($(this).prop('checked')) {
			$input.removeAttr('disabled');
		} else {
			$input.attr('disabled', 'disabled');
		}
		enableOrderButton();
	});

</script>
