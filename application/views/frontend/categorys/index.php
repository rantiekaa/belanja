<div class="content-wrap">
	<div class="container">
		<h2 class="my-5 text-uppercase text-dark font-weight-bold"><?= $titleCategories; ?></h2>
		<div class="row isotope-grid">
			<?php
				foreach ($listProduct as $key => $value) {
			?>
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
					<div class="block2 product-card">
						<div class="block2-pic hov-img0 product-img-wrap">
						<img src="<?=base_url("/assets/general/custom/product/".$value['image'])?>" alt="img-product" class="product-img-item">
						</div>
						<div class="block2-txt flex-w flex-t p-t-14">
						<div class="block2-txt-child1 flex-col-l ">
							<a href="<?=base_url("product/".$value['handle'])?>" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6"><?=$value['title']?></a>
							<span class="stext-105 cl3">Rp. <?=number_format($value ['price'])?></span>
						</div>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</div>
