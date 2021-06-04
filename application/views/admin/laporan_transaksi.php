
<link rel="stylesheet" href="<?= base_url('assets/admin/') ?>assets/vendors/simple-datatables/style.css">

<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-12 order-md-1 order-last">
                <h3><i class="bi bi-info-circle-fill"></i> Laporan Transaksi</h3>

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

            <section class="section ">
               <div class="card">
            <div class="card-body">
                <h4 class="card-title">Cari Laporan Transaksi</h4>
                <form class="mt-3" action="<?= base_url('admin/laporan_transaksi') ?>" method="post" enctype="multipart/form-data">

                    <div class="form-group">
                        <label class="form-control-label">Dari Tanggal</label>
                        <input type="date" class="form-control" name="dari" aria-describedby="name">
                        <?= form_error('dari', '<small class="text-danger" style="color: red;">','</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">Sampai Tanggal</label>
                
                        <input type="date" class="form-control" name="sampai" aria-describedby="name">                        
                        <?= form_error('sampai', '<small class="text-danger" style="color: red;">','</small>'); ?>
                    </div>
                    <div class="form-actions">
                        <div class="text-right">
                            <button type="submit" class="btn btn-info btn-rounded">Tampilkan</button>
                            <button type="reset" class="btn btn-dark btn-rounded">Reset</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

            </section>
        </div>
    </section>
</div>


<script src="<?= base_url('assets/admin/') ?>assets/vendors/simple-datatables/simple-datatables.js"></script>
<script>
        // Simple Datatable
        let table1 = document.querySelector('#table1');
        let dataTable = new simpleDatatables.DataTable(table1);
    </script>

    <!--Danger theme Modal -->
    <div class="modal fade text-left" id="danger" tabindex="-1"
    role="dialog" aria-labelledby="myModalLabel120"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
    role="document">
    <div class="modal-content">
        <div class="modal-header bg-danger">
            <h5 class="modal-title white" id="myModalLabel120">
                Yakin Ingin Menghapus?
            </h5>
            <button type="button" class="close"
            data-bs-dismiss="modal" aria-label="Close">
            <i data-feather="x"></i>
        </button>
    </div>
    
    <div class="modal-footer">
        <button type="button"
        class="btn btn-light-secondary"
        data-bs-dismiss="modal">
        <i class="bx bx-x d-block d-sm-none"></i>
        <span class="d-none d-sm-block">Exit</span>
    </button>
    <a href="<?= base_url('admin/muzakki/delete_users/'.$row->id_users) ?>" class="btn btn-danger ml-1">

        <span class="d-none d-sm-block">Hapus</span>
    </a>
</div>
</div>
</div>
</div>
</div>



