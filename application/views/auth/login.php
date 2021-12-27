    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-lg-7">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center">
                                        <?= $this->session->flashdata('alert'); ?>
                                        <h1 class="h4 text-gray-900 mb-4"><b>LOGIN</b></h1>
                                        <p class="font1">Hello! Having a problem with your skin? Berkah Beauty Clinic is ready to help you!</p>
                                    </div>
                                    <form class="user" method="post" action="<?= base_url('home/index'); ?>">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="email" name="email" 
                                                placeholder="Email Address" value="<?= set_value('email') ?>">
                                            <?= form_error('email', '<small class="text-danger pl-2">', '</small>');?> <br>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="password" name="password" placeholder="Password">
                                            <?= form_error('password', '<small class="text-danger pl-2">', '</small>');?> <br>
                                        </div>
                                        <div class="d-grid gap-2 col-6 mx-auto">
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </button>
                                        </div>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="<?= base_url('auth/registration');?>">Create an Account!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>