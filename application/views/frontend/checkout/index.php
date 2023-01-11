<?php
$cart = $this->cart->contents();
?>

<section class="checkout-template">
    <div class="container">
        <div class="row">
            <div class="col-md-7 mb-5 px-5">
                <div class="checkout-logo">
                    <a href="<?= base_url() ?>" class="d-block">
                        <img src="<?= base_url() ?>assets/general/custom/logo/belanja-cropped.png" class="w-100">
                    </a>
                </div>
                <div class="breadcrumbb mb-2">
                    <a href="<?= base_url("cart") ?>" class="">Back to cart</a>
                </div>

                <div class="form-group mb-3">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="first-name" class="stext-115">First name</label>
                            <input type="text" name="first_name" class="stext-115 pl-3 pr-3 form-control stext-111 cl2 plh3 size-116" id="first-name" value="<?= $customerInformation['first_name'] ?>" placeholder="Type here...">
                        </div>
                        <div class="col-md-6">
                            <label for="last-name" class="stext-115">Last name</label>
                            <input type="text" name="last_name" class="stext-115 pl-3 pr-3 form-control stext-111 cl2 plh3 size-116" id="last-name" value="<?= $customerInformation['last_name'] ?>" placeholder="Type here...">
                        </div>
                    </div>
                </div>
                <div class="form-group mb-3">
                    <label for="address" class="stext-115">Address</label>
                    <input type="text" name="address" class="stext-115 pl-3 pr-3 form-control stext-111 cl2 plh3 size-116" id="address" autocomplete="Address" value="<?= $customerInformation['address'] ?>" placeholder="Type here...">
                </div>
                <div class="form-group mb-3">
                    <label for="district" class="stext-115">District</label>
                    <input type="text" name="district" class="stext-115 pl-3 pr-3 form-control stext-111 cl2 plh3 size-116" id="district" autocomplete="district" value="<?= $customerInformation['district'] ?>" placeholder="Type here...">
                </div>
                <div class="form-group mb-3">
                    <label for="city" class="stext-115">City</label>
                    <input type="text" name="city" class="stext-115 pl-3 pr-3 form-control stext-111 cl2 plh3 size-116" id="city" autocomplete="city" value="<?= $customerInformation['city'] ?>" placeholder="Type here...">
                </div>
                <div class="form-group mb-3">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="province" class="stext-115">Province</label>
                            <input type="text" name="province" class="stext-115 pl-3 pr-3 form-control stext-111 cl2 plh3 size-116" id="province" value="<?= $customerInformation['province'] ?>" placeholder="Type here...">
                        </div>
                        <div class="col-md-6">
                            <label for="zip-code" class="stext-115">Zip code</label>
                            <input type="text" name="zip_code" class="stext-115 pl-3 pr-3 form-control stext-111 cl2 plh3 size-116" id="zip-code" value="<?= $customerInformation['zip_code'] ?>" placeholder="Type here...">
                        </div>
                    </div>
                </div>
                <div class="form-group mb-3">
                    <label for="phone" class="stext-115">Phone</label>
                    <input type="text" name="phone" class="stext-115 pl-3 pr-3 form-control stext-111 cl2 plh3 size-116" id="phone" autocomplete="phone" value="<?= $customerInformation['phone'] ?>" placeholder="Type here...">
                </div>
            </div>
            <div class="col-md-5 bg-item px-5">
                <div class="right-checkout mt-5 mb-5">
                    <ul class="header-cart-wrapitem w-full">
                        <?php
                        if (empty($cart)) {
                        ?>
                            <p class="text-center text-dark stext-115 text-white mb-4 font-400">Empty cart</p>
                            <?php
                        } else {
                            foreach ($cart as $key => $item) {
                                $product = $this->Backend_product->select($item['id']);
                            ?>
                                <li class="header-cart-item flex-w flex-m flex-sb m-b-12">
                                    <div class="header-cart-img-name flex-m">
                                        <div class="header-cart-item-img flex-w flex-sb">
                                            <img src="<?= base_url("/assets/general/custom/product/" . $product->image) ?>" alt="IMG">
                                        </div>
                                        <a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04 mb-0"><?= $item['name'] ?></a>
                                    </div>
                                    <div class="header-cart-item-price text-right">
                                        <span class="header-cart-item-info"><?= $item['qty'] ?> x Rp. <?= number_format($item['price']) ?> </span>
                                    </div>
                                </li>
                        <?php
                            }
                        }
                        ?>
                    </ul>
                    <div class="divider mt-4 mb-4"></div>
                    <div class="pricing-checkout">
                        <div class="flex-w flex-m mb-3">
                            <div class="size-208">
                                <span class="stext-115 cl2">Subtotal</span>
                            </div>

                            <div class="size-209 p-t-1 text-right">
                                <span class="stext-115 cl2">Rp. <?= number_format($this->cart->total()); ?></span>
                            </div>
                        </div>
                        <div class="flex-w flex-m mb-3">
                            <div class="size-208">
                                <span class="stext-115 cl2">Shipping</span>
                            </div>

                            <div class="size-209 p-t-1 text-right">
                                <span class="stext-115 cl2">Rp. 20,000</span>
                            </div>
                        </div>
                        <div class="flex-w flex-m mb-3">
                            <div class="size-208">
                                <span class="stext-115 cl2">Payment</span>
                            </div>

                            <div class="size-209 p-t-1 text-right">
                                <select name="payment" id="paymeny" class="form-control">
                                    <option value="BCA">BCA 401231231223</option>
                                    <option value="MANDIRI">Mandiri 401231231223</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="divider mt-4 mb-4"></div>
                    <div class="flex-w flex-t p-b-33">
                        <div class="size-208">
                            <span class="mtext-101 cl2">Total</span>
                        </div>

                        <div class="size-209 p-t-1 text-right">
                            <span class="mtext-110 cl2">Rp. <?= number_format($this->cart->total() + 20000); ?></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <button class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">Pay Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>