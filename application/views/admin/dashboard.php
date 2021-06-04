<link rel="stylesheet" href="<?= base_url('assets/admin/') ?>assets/vendors/simple-datatables/style.css">
<div class="page-heading">
    <h3>Dashboard</h3>
</div>
<div class="page-content">
    <section class="row">
        <div class="col-12 col-lg-9">
            <div class="row">
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon purple">
                                        <i class="fa fa-users text-white"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">Data Muzakki</h6>
                                    <h6 class="font-extrabold mb-0"><?= $jumlah_users ?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon blue">
                                        <i class="fa fa-user-circle text-white"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">Data Mustahiq</h6>
                                    <h6 class="font-extrabold mb-0"><?= $jumlah_mustahiq ?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon green">
                                        <i class="fa fa-retweet text-white"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">Data Transaksi</h6>
                                    <h6 class="font-extrabold mb-0"><?= $jumlah_transaksi ?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon red">
                                        <i class="iconly-boldBookmark"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">Total Zakat</h6>
                                    <h6 class="font-extrabold mb-0">Rp. <?= number_format($pendapatan,0,',','.'); ?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Data Transaksi</h4>
                        </div>
                        <div class="card-body">
                            <div class="card-body">
                                <table class="table table-hover" id="table1">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>No. Transaksi</th>
                                            <th>Nama Muzakki</th>
                                            <th>Jenis Zakat</th>
                                            <th>Jumlah Pembayaran</th>
                                            <th>Status</th>
                                            <th>Cek</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $no = 1;
                                        foreach($transaksi as $row){
                                            ?>

                                            <tr>
                                                <td><?= $no++ ?></td>
                                                <td><?= $row->no_transaksi ?></td>
                                                <td><?= $row->nama ?></td>
                                                <td><?= $row->jenis_zakat ?></td>
                                                <td>Rp. <?= number_format($row->jumlah_transfer,0,',','.'); ?></td>
                                                <td>
                                                    <?php if($row->status_pembayaran == "2"){ ?>
                                                        <button class="btn btn-sm btn-warning">Menunggu Konfirmasi</button>
                                                    <?php }elseif($row->status_pembayaran == "1"){ ?>
                                                        <button class="btn btn-sm btn-success">Lunas</button>
                                                    <?php }else{ ?>
                                                        <button class="btn btn-sm btn-danger">Belum Bayar</button>
                                                    <?php } ?>
                                                </td>
                                                <td>
                                                 <a href="<?= base_url('admin/transaksi/cek_pembayaran/'.$row->id_bayar_zakat) ?>" class="btn btn-sm btn-primary"><i class="fa fa-check"></i> Cek Pembayaran</a>
                                             </td>

                                             <td>

                                                <a href="#" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#danger"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    <?php } ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
      

<div class="col-12 col-xl-21">
    <div class="card">
        <div class="card-header">
            <h4>Data Mustahiq</h4>
        </div>
        <div class="card-body">
            <table class="table table-hover" id="table1">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama Users</th>
                        <th>Nama Penerima</th>
                        <th>Nama Yayasan</th>
                        <th>Alamat Mustahiq</th>
                        <th>Jumlah Zakat</th>
                        <th>Tgl Penyaluran</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $no = 1;
                    foreach($mustahiq as $row){
                        ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $row->nama_users ?></td>
                            <td><?= $row->nama_penerima ?></td>
                            <td><?= $row->nama_yayasan ?></td>
                            <td><?= $row->alamat_mustahiq ?></td>
                            <td>Rp. <?= number_format($row->jumlah_zakat,0,',','.'); ?></td>
                            <td><?= $row->tgl_penyaluran ?></td>

                            <td>

                                <a href="<?= base_url('admin/mustahiq/edit_mustahiq/'.$row->id_mustahiq) ?>" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>

                                <a href="#" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#danger"> <i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php } ?>

                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
</div>
<div class="col-12 col-lg-3">
    <div class="card">
        <div class="card-body py-4 px-5">
            <div class="d-flex align-items-center">
                <div class="avatar avatar-xl">
                    <img src="<?= base_url('assets/uploads/users/'.$this->session->userdata('gambar_users')) ?>" alt="Face 1">
                </div>
                <div class="ms-3 name">
                    <h5 class="font-bold"><?= $this->session->userdata('nama_users') ?></h5>
                    <h6 class="text-muted mb-0"><?= $this->session->userdata('email_users') ?></h6>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h4>Data Users</h4>
        </div>
        <div class="card-content pb-4">
            <?php foreach($muzakki as $row){ ?>
                <?php if($row->role_id != "1"){ ?>
                    <div class="recent-message d-flex px-4 py-3">
                        <div class="avatar avatar-lg">
                            <img src="<?= base_url('assets/uploads/users/'.$row->gambar_users) ?>">
                        </div>
                        <div class="name ms-4">
                            <h5 class="mb-1"><?= $row->nama_users ?></h5>
                            <h6 class="text-muted mb-0"><?= $row->email_users ?></h6>
                        </div>
                    </div>
                <?php } ?>
            <?php } ?>

            <div class="px-4">
                <a href="<?= base_url('admin/muzakki') ?>" class='btn btn-block btn-xl btn-light-primary font-bold mt-3'>Cek Data Muzakki</a>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h4>Contact</h4>
        </div>
        <div class="card-content pb-4">
            <?php foreach($contact as $row){ ?>
                
                    <div class="recent-message d-flex px-4 py-3">
                       
                        <div class="name ms-4">
                            <h5 class="mb-1"><?= $row->nama ?></h5>
                            <h6 class="text-muted mb-0"><?= $row->email ?></h6>
                        </div>
                    </div>
                
            <?php } ?>

            <div class="px-4">
                <a href="<?= base_url('admin/contact') ?>" class='btn btn-block btn-xl btn-light-primary font-bold mt-3'>Cek Data Contact</a>
            </div>
        </div>
    </div>
    
</div>
</section>
</div>

<script src="<?= base_url('assets/admin/') ?>assets/vendors/simple-datatables/simple-datatables.js"></script>
<script>
        // Simple Datatable
        let table1 = document.querySelector('#table1');
        let dataTable = new simpleDatatables.DataTable(table1);
    </script>