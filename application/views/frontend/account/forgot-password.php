<section class="section-forgot">
    <div class="container">
        <div class="content-to-account">
            <div class="card">
                <div class="card-body p-5">
                    <h4 class="mtext-105 cl2 txt-center p-b-30">Forgot Password</h4>
                    <p class="stext-115 cl6 text-center mb-4">Please enter your e-mail:</p>
                    <?php
                        if($this->session->flashdata('success')){
                            echo '<p class="bg-success stext-115 text-white mb-4 font-400 px-3 py-1">'.$this->session->flashdata('success').'</p>';
                        }

                        if($this->session->flashdata('err')){
                            echo '<p class="bg-danger stext-115 text-white mb-4 font-400 px-3 py-1">'.$this->session->flashdata('err').'</p>';
                        }
                    ?>
                    <form action="<?=base_url("control_account/forgot")?>" method="post" autocomplete="off">
                        <div class="form-group mb-4">
                            <label for="email" class="stext-115">Email</label>
                            <input type="email" name="email" class="stext-115 pl-3 pr-3 form-control stext-111 cl2 plh3 size-116" id="email">
                        </div>
                        <div class="form-group mb-4">
                            <button class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer">Forgot</button>
                        </div>
                    </form>
                    <p class="stext-115 cl6 text-center mb-4">Already have an account? <a href="<?=base_url("account")?>" class="text-primary font-weight stext-115">Login</a> </p>
                </div>
            </div>
        </div>
    </div>
</section>