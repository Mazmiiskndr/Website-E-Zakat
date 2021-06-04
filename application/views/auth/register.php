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
                                    <h4 class="text-center mb-4">Halaman Register</h4>
                                    <form action="<?= base_url('auth/register') ?>" method="post">
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Nama Lengkap</strong></label>
                                            <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama_users">
                                            <?= form_error('nama_users', '<small class="text-danger pl-3" style="color: red;">','</small>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Email</strong></label>
                                            <input type="email" class="form-control" placeholder="Email" name="email_users">
                                            <?= form_error('email_users', '<small class="text-danger pl-3" style="color: red;">','</small>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Password</strong></label>
                                            <input type="password" class="form-control" placeholder="Password" name="password">
                                            <?= form_error('password', '<small class="text-danger pl-3" style="color: red;">','</small>'); ?>
                                        </div>
                                         <div class="form-group">
                                            <label class="mb-1"><strong>No. Telp</strong></label>
                                            <input type="text" class="form-control" placeholder="No. Telepon" name="no_telp">
                                            <?= form_error('no_telp', '<small class="text-danger pl-3" style="color: red;">','</small>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1"><strong>No. Telp</strong></label>
                                            <textarea name="alamat_users" class="form-control" placeholder="Alamat Lengkap" rows="3"></textarea>
                                            <?= form_error('alamat_users', '<small class="text-danger pl-3" style="color: red;">','</small>'); ?>
                                        </div>

                                        <div class="text-center mt-4">
                                            <button type="submit" class="btn btn-primary btn-block">Register</button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p>Sudah mempunyai akun? <a class="text-primary" href="<?= base_url('auth/login') ?>">Login</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>