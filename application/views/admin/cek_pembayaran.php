
<link rel="stylesheet" href="<?= base_url('assets/admin/') ?>assets/vendors/simple-datatables/style.css">

<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-12 order-md-1 order-last">
                <h3><i class="fa fa-check"></i> Cek Pembayaran</h3>

            </div>
            <div class="col-12 col-md-12 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">

                </nav>
            </div>
        </div>
    </div>

    <div class="page-content">
        <?= $this->session->flashdata('pesan'); ?>
        <section class="row">
           <div class="col-12 col-lg-12">

            <!-- Basic Vertical form layout section start -->
            <?php foreach($detail as $row){ ?>
                <section id="basic-vertical-layouts">
                    <div class="row match-height">
                        <div class="col-md-6 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Detail Pembayaran</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form form-vertical" action="<?= base_url('admin/transaksi/cek_pembayaran_aksi') ?>" method="post">
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="first-name-vertical">No. Transaksi</label>
                                                            <input type="hidden" name="id_bayar_zakat" value="<?= $row->id_bayar_zakat ?>">
                                                            <input type="text" id="first-name-vertical"
                                                            class="form-control" name="no_transaksi" value="<?= $row->no_transaksi ?>" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="first-name-vertical">Nama Users</label>
                                                            <input type="text" id="first-name-vertical"
                                                            class="form-control" name="nama" value="<?= $row->nama ?>" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="first-name-vertical">Jenis Zakat</label>
                                                            <input type="text" id="first-name-vertical"
                                                            class="form-control" name="jenis_zakat" value="<?= $row->jenis_zakat ?>" readonly>
                                                        </div>
                                                    </div>

                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <?php if(!$row->bukti_pembayaran){ ?>
                                                                <button type="button" class="btn btn-danger"><i class="fa fa-info"></i> Bukti Pembayaran Belum Ada!</button>
                                                            <?php }else{ ?>
                                                            <a href="<?= base_url('admin/transaksi/download_bukti_pembayaran/'.$row->id_bayar_zakat) ?>" class="btn btn-dark"><i class="fa fa-download"></i> Download Bukti Pembayaran</a>
                                                            <?php } ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Konfirmasi Pembayaran</h4>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body">
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group has-icon-left">
                                                            <label for="first-name-icon">Nama Bank</label>
                                                            <div class="position-relative">
                                                                <input type="text" class="form-control" value="<?= $row->nama_bank ?>" readonly name="nama_bank">
                                                                <div class="form-control-icon">
                                                                    <i class="fa fa-university"></i>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="col-12">

                                                        <div class="form-group has-icon-left">
                                                            <label for="first-name-icon">Nama Rekening</label>
                                                            <div class="position-relative">
                                                                <input type="text" class="form-control" value="<?= $row->nama_rekening ?>" readonly name="nama_rekening">
                                                                <div class="form-control-icon">
                                                                    <i class="fa fa-id-card"></i>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="col-12">

                                                        <div class="form-group has-icon-left">
                                                            <label for="first-name-icon">Nomor Rekening</label>
                                                            <div class="position-relative">
                                                                <input type="text" class="form-control" value="<?= $row->nomor_rekening ?>" readonly name="nomor_rekening">
                                                                <div class="form-control-icon">
                                                                    <i class="fa fa-credit-card"></i>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group has-icon-left">
                                                            <label for="first-name-icon">Jumlah Transfer</label>
                                                            <div class="position-relative">
                                                                <input type="text" class="form-control" value="<?= $row->jumlah_transfer ?>" readonly name="jumlah_transfer">
                                                                <div class="form-control-icon">
                                                                    <i class="fa fa-id-card"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-12 mb-4">
                                                        <div class="form-group has-icon-left">
                                                            <label for="first-name-icon">Status Transaksi</label>
                                                            <div class="position-relative">
                                                                <select name="status_pembayaran"  class="form-control">
                                                                    <option value="<?= $row->status_pembayaran ?>">
                                                                    <?php if($row->status_pembayaran == '1'){ ?>
                                                                        Lunas
                                                                    <?php }elseif($row->status_pembayaran == '2'){ ?>
                                                                        Menunggu Konfirmasi
                                                                    <?php }else{ ?>
                                                                        Belum Bayar
                                                                    <?php } ?>
                                                                    </option>
                                                                    <option value="1">Lunas</option>
                                                                    <option value="2">Menunggu Konfirmasi</option>
                                                                    <option value="0">Belum Bayar</option>
                                                                        </select>
                                                                        <div class="form-control-icon">
                                                                            <i class="bi bi-cash"></i>
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
                                    <div class="mb-3">
                                        <button type="submit" class="btn btn-block btn-success btn-lg">Konfirmasi Pembayaran</button>
                                        <a href="<?= base_url('admin/transaksi') ?>" class="mt-3 btn btn-lg btn-danger btn-block">Kembali</a>
                                    </div>
                                </div>
                            </form>
                        </section>
                    <?php } ?>
                    <!-- // Basic Vertical form layout section end -->
                </div>
            </section>
        </div>


        <script src="<?= base_url('assets/admin/') ?>assets/vendors/simple-datatables/simple-datatables.js"></script>
        <script>
        // Simple Datatable
        let table1 = document.querySelector('#table1');
        let dataTable = new simpleDatatables.DataTable(table1);
    </script>



