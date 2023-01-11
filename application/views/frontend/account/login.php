<section class="section-login">
    <div class="container">
        <div class="content-to-account">
            <div class="card">
                <div class="card-body p-5">
                    <h4 class="mtext-105 cl2 txt-center p-b-30">Login</h4>
                    <p class="stext-115 cl6 text-center mb-4">Please enter your e-mail and password:</p>
                    <?php
                        if($this->session->flashdata('success')){
                            echo '<p class="bg-success stext-115 text-white mb-4 font-400 px-3 py-1">'.$this->session->flashdata('success').'</p>';
                        }

                        if($this->session->flashdata('err')){
                            echo '<p class="bg-danger stext-115 text-white mb-4 font-400 px-3 py-1">'.$this->session->flashdata('err').'</p>';
                        }

                        $redirect = "";
                        if(isset($_GET['redirect'])){
                            $redirect = $_GET['redirect'];
                        }
                    ?>
                    <form action="<?=base_url("control_account/login")?>" method="post" autocomplete="off">
                        <input type="hidden" name="redirect" value="<?=$redirect;?>">
                        <div class="form-group mb-4">
                            <label for="email" class="stext-115">Email</label>
                            <input type="email" name="email" class="stext-115 pl-3 pr-3 form-control stext-111 cl2 plh3 size-116" id="email">
                        </div>
                        <div class="form-group mb-3">
                            <label for="password" class="stext-115">Password</label>
                            <input type="password" name="password" class="stext-115 pl-3 pr-3 form-control stext-111 cl2 plh3 size-116" id="password" autocomplete="password">
                        </div>
                        <a href="<?=base_url("account/forgot")?>" class="stext-115 d-block text-right mb-4 text-secondary">Forgot password?</a>
                        <div class="form-group mb-4">
                            <button class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer">Login</button>
                        </div>
                    </form>
                    <p class="stext-115 cl6 text-center mb-4">Don't have an account? <a href="<?= base_url("account/register") ?>" class="text-primary font-weight stext-115">Create one</a> </p>
                </div>
            </div>
        </div>
    </div>
</section>