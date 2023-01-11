<section class="myaccount">
    <div class="container">
        <header class="PageHeader">
            <a href="<?= base_url("account/logout") ?>" class="stext-115 cl6 mb-5 d-block" style="width: fit-content;">Logout</a>

            <div class="SectionHeader">
                <h1 class="mtext-105 cl2 p-b-30">My account</h1>
                <p class="stext-115">Welcome back, <?= $username; ?></p>
            </div>
        </header>
        <div class="row">
            <div class="col-md-8">
                <span class="mtext-110 cl2 d-block">My orders</span>
            </div>
            <div class="col-md-4">
                <span class="mtext-110 cl2 d-block mb-4">Address</span>
                <div class="address">
                    <?=$address;?><br>
                    <?=$district;?><br>
                    <?=$city;?><br>
                    <?=$province;?> <?=$zip_code;?><br>
                    Indonesia
                </div>
                <div class="button-address mt-4">
                    <a href="<?=base_url("account/edit_address")?>" class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer">Edit Address</a>
                </div>
            </div>
        </div>
    </div>
</section>