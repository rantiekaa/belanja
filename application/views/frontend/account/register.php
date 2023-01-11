<section class="section-register">
    <div class="container">
        <div class="content-to-account">
            <div class="card">
                <div class="card-body p-5">
                    <h4 class="mtext-105 cl2 txt-center p-b-30">Register</h4>
                    <p class="stext-115 cl6 text-center mb-4">Please fill in the information below:</p>
                    <?php
                        if($this->session->flashdata('err')){
                            echo '<p class="bg-danger stext-115 text-white mb-4 font-400 px-3 py-1">'.$this->session->flashdata('err').'</p>';
                        }
                    ?>
                    <form action="<?=base_url("control_account/register")?>" method="post" autocomplete="off">
                        <div class="form-group mb-4">
                            <label for="first_name" class="stext-115">First Name</label>
                            <input type="text" name="first_name" class="stext-115 pl-3 pr-3 form-control stext-111 cl2 plh3 size-116" id="first_name">
                        </div>
                        <div class="form-group mb-3">
                            <label for="last_name" class="stext-115">Last Name</label>
                            <input type="text" name="last_name" class="stext-115 pl-3 pr-3 form-control stext-111 cl2 plh3 size-116" id="last_name">
                        </div>
                        <div class="form-group mb-4">
                            <label for="email" class="stext-115">Email</label>
                            <input type="email" name="email" class="stext-115 pl-3 pr-3 form-control stext-111 cl2 plh3 size-116" id="email">
                        </div>
                        <div class="form-group mb-5">
                            <label for="password" class="stext-115">Password</label>
                            <input type="password" name="password" class="stext-115 pl-3 pr-3 form-control stext-111 cl2 plh3 size-116" id="password">
                        </div>
                        <div class="form-group mb-4">
                            <button class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer">Creat my Account</button>
                        </div>
                    </form>
                    <p class="stext-115 cl6 text-center mb-4">Already have an account? <a href="<?=base_url("account")?>" class="text-primary font-weight stext-115">Login</a> </p>
                </div>
            </div>
        </div>
    </div>
</section>