 <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
									<div class="text-center mb-3">
										<img src="<?= base_url('assets/uploads/') ?>logo-auth.png" alt="">
									</div>
                                    <?= $this->session->flashdata('pesan'); ?>
                                    <h4 class="text-center mb-4">Halaman Login</h4>
                                    <form action="<?= base_url('auth/login/proses_login') ?>" method="post">
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Email</strong></label>
                                            <input type="email" class="form-control" name="email_users" value="<?= set_value('email_users') ?>">
                                            <?= form_error('email_users', '<small class="text-danger pl-2">','</small>'); ?>

                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Password</strong></label>
                                            <input type="password" class="form-control" name="password">
                                            <?= form_error('password', '<small class="text-danger pl-2">','</small>'); ?>

                                        </div>
                                        <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                           
                                            <div class="form-group">
                                                <a href="page-forgot-password.html">Forgot Password?</a>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block">Login</button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p>Belum sudah mempunyai akun? <a class="text-primary" href="<?= base_url('auth/register') ?>">Register</a></p>
                                        <p><a class="text-primary" href="<?= base_url('') ?>">Kembali</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
