<div class="content-wrap">
	<div class="sec-product-detail bg0 p-t-65 p-b-60">
		<div class="container">
			<div class="row">
				<?php
					foreach ($listProduct as $key => $value) {
				?>
					<div class="col-md-6 col-lg-7 p-b-30">
						<div class="p-l-25 p-r-30 p-lr-0-lg">
							<div class="wrap-slick3 flex-sb flex-w">
								<div class="wrap-slick3-dots"></div>
								<div class="wrap-slick3-arrows flex-sb-m flex-w"></div>
								<div class="slick3 gallery-lb">
									<div class="item-slick3" data-thumb="images/product-detail-01.jpg">
										<div class="wrap-pic-w pos-relative product-detail-image">
											<img src="<?=base_url("/assets/general/custom/product/".$value['image'])?>" alt="IMG-PRODUCT">
											<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="images/product-detail-01.jpg">
												<i class="fa fa-expand"></i>
											</a>
										</div>
									</div>
									<div class="item-slick3" data-thumb="images/product-detail-02.jpg">
										<div class="wrap-pic-w pos-relative">
											<img src="images/product-detail-02.jpg" alt="IMG-PRODUCT">
											<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="images/product-detail-02.jpg">
												<i class="fa fa-expand"></i>
											</a>
										</div>
									</div>
									<div class="item-slick3" data-thumb="images/product-detail-03.jpg">
										<div class="wrap-pic-w pos-relative">
											<img src="images/product-detail-03.jpg" alt="IMG-PRODUCT">
											<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="images/product-detail-03.jpg">
												<i class="fa fa-expand"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-5 p-b-30">
						<div class="p-r-50 p-t-5 p-lr-0-lg">
							<?php
								if($this->session->flashdata('success')){
									echo '<p class="bg-success stext-115 text-white mb-4 font-400 px-3 py-1">'.$this->session->flashdata('success').'</p>';
							?>
								<script>
									setTimeout(() => {
										$(".js-show-cart").trigger("click")
									}, 1000);
								</script>
							<?php
								}

								if($this->session->flashdata('err')){
									echo '<p class="bg-danger stext-115 text-white mb-4 font-400 px-3 py-1">'.$this->session->flashdata('err').'</p>';
								}
							?>
							<h4 class="mtext-105 cl2 js-name-detail p-b-14"><?=$value['title']?></h4>
							<form action="<?=base_url("product/add");?>" method="post">
								<input type="hidden" name="handle" value="<?=$value['handle'];?>">
								<input type="hidden" name="id" value="<?=$value['id'];?>">
								<input type="hidden" name="price" value="<?=$value['price'];?>">
								<input type="hidden" name="name" value="<?=$value['title'];?>">
								<span class="mtext-106 cl2">Rp. <?=number_format($value ['price'])?></span>
								<p class="stext-102 cl3 p-t-23"><?=$value['content']?></p>
								<div class="mt-4 respon6-next">
									<div class="wrap-num-product flex-w m-r-20 m-tb-10 mb-3">
										<div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
											<i class="fs-16 zmdi zmdi-minus"></i>
										</div>
										<input class="mtext-104 cl3 txt-center num-product" type="number" name="qty" value="1" min="1">
										<div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
											<i class="fs-16 zmdi zmdi-plus"></i>
										</div>
									</div>
									<button class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
										Add to cart
									</button>
								</div>
							</form>

							<div class="flex-w flex-m mt-5 respon7">
								<div class="flex-m bor9 p-r-10 m-r-11">
									<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 js-addwish-detail tooltip100" data-tooltip="Add to Wishlist">
										<i class="zmdi zmdi-favorite"></i>
									</a>
								</div>
								<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Facebook">
									<i class="fa fa-facebook"></i>
								</a>
								<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Twitter">
									<i class="fa fa-twitter"></i>
								</a>
								<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Google Plus">
									<i class="fa fa-google-plus"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
		<div class="bg6 flex-c-m flex-w size-302 m-t-73 p-tb-15">
			<span class="stext-107 cl6 p-lr-25">
				SKU: JAK-01
			</span>
			<span class="stext-107 cl6 p-lr-25">
				Categories: Jacket, Men
			</span>
		</div>
		<div class="sec-relate-product bg0 p-t-45 p-b-105">
			<div class="container">
				<div class="p-b-45">
					<h3 class="ltext-106 cl5 txt-center">
						Related Products
					</h3>
				</div>
				<div class="wrap-slick2">
					<div class="slick2">
						<div class="item-slick2 p-l-15 p-r-15 p-t-15 p-b-15">
							<div class="block2">
								<div class="block2-pic hov-img0">
									<img src="images/product-01.jpg" alt="IMG-PRODUCT">
									<a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
										Quick View
									</a>
								</div>
								<div class="block2-txt flex-w flex-t p-t-14">
									<div class="block2-txt-child1 flex-col-l ">
										<a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
											Esprit Ruffle Shirt
										</a>
										<span class="stext-105 cl3">
											$16.64
										</span>
									</div>
									<div class="block2-txt-child2 flex-r p-t-3">
										<a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
											<img class="icon-heart1 dis-block trans-04" src="images/icons/icon-heart-01.png" alt="ICON">
											<img class="icon-heart2 dis-block trans-04 ab-t-l" src="images/icons/icon-heart-02.png" alt="ICON">
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
