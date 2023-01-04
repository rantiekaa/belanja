<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-header">
				<a href="<?=base_url()?>backend/add_product" class="btn btn-primary btn-lg">Add Product</a>
			</div>
			<div class="card-body">
				<?php
					if($this->session->flashdata('success')){
						echo '<p class="badge bg-success mb-2">'.$this->session->flashdata('success').'</p>';
					} else {
						echo '<p class="badge bg-danger mb-2">'.$this->session->flashdata('err').'</p>';
					}
				?>
				<table id="table_id" class="display">
					<thead>
						<tr>
							<th style="width: 10%;">Image</th>
							<th>Product Name</th>
							<th>Status</th>
							<th>Stock</th>
							<th>Category</th>
							<th>Options</th>
						</tr>
					</thead>
						<tbody>
							<?php
								foreach ($listProduct as $key => $value) {
									$category = $this->db->get_where('category', array("id" => $value['category']))->row();
									if(!empty($category)){
										$category = $category->title;
									}
							?>
								<tr>
									<td>
										<div style="max-width: 100px;">
											<img src="<?=base_url("/assets/general/custom/product/".$value['image'])?>" alt="" width="100%">
										</div>
									</td>
									<td><?=$value['title'];?></td>
									<td>
										<?php
											if($value['status'] == 1){
												echo '<span class="badge bg-success w-100">Active</span>';
											} else{
												echo '<span class="badge bg-secondary w-100">Draft</span>';
											}
										?>
									</td>
									<td><?=$value['stock'];?></td>
									<td><?=$category;?></td>
									<td>
										<div class="d-flex gap-2">
											<a class="btn btn-success d-block" href="<?=base_url()?>backend/image_product/<?=$value['id']?>">
												<i class="align-middle text-white" data-feather="image"></i>
											</a>
											<a class="btn btn-info d-block" href="<?=base_url()?>backend/edit_product/<?=$value['id']?>">
												<i class="align-middle text-white" data-feather="eye"></i>
											</a>
											<a class="btn btn-danger d-block" href="<?=base_url()?>control_product/delete_product/<?=$value['id']?>" onclick="return confirm('Are you sure?')">
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
</div>
<script>
	$(document).ready( function () {
		$('#table_id').DataTable();
	});
</script>