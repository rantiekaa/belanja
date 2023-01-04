<form action="<?= base_url() ?>control_product/add_image" method="post" enctype="multipart/form-data">
	<input type="hidden" name="id" value="<?= $selectProduct->id; ?>">
	<div class="row">
		<div class="col-8">
			<div class="card">
				<div class="card-body">
					<table id="table_id" class="display">
						<thead>
							<tr>
								<th>Image</th>
								<th>Options</th>
							</tr>
						</thead>
						<tbody>
							<?php
								foreach ($productImage as $key => $value) {
							?>
								<tr>
									<td>
										<div style="max-width: 100px;">
											<img src="<?= base_url("/assets/general/custom/product/" . $value['image']) ?>" alt="" width="50px">
										</div>
									</td>
									<td style="text-align: right;">
										<div class="d-flex gap-2">
											<a class="btn btn-danger d-block" href="<?= base_url() ?>control_product/delete_image/<?= $value['id'] ?>/<?= $selectProduct->id; ?>" onclick="return confirm('Are you sure?')">
												<i class="align-middle text-white" data-feather="delete"></i>
											</a>
										</div>
									</td>
								</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<div class="col-4">
			<div class="card">
				<div class="card-body">
					<div class="form-group mb-3">
						<label for="image" class="mb-1">Image</label>
						<input type="file" name="image" class="form-control" id="image" required>
					</div>
					<div class="form-group">
						<button class="btn btn-primary btn-lg">Save</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>
<script>
	$(document).ready( function () {
		$('#table_id').DataTable();
	});
</script>
