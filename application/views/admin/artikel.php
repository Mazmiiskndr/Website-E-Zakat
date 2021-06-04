
<link rel="stylesheet" href="<?= base_url('assets/admin/') ?>assets/vendors/simple-datatables/style.css">

<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-12 order-md-1 order-last">
                <h3><i class="bi bi-file-earmark-bar-graph"></i> Data Artikel</h3>
            </div>

            <div class="col-12 col-md-12 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url('admin/artikel/tambah_data_artikel') ?>" class="btn btn-primary" > Tambah Data Artikel</a></li>


                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="page-content">
        <?= $this->session->flashdata('pesan'); ?>
        <section class="row">
           <div class="col-12 col-lg-12">

            <section class="section ">
                <div class="card ">
                    <div class="card-header">
                        Data Artikel
                    </div> 
                    <div class="card-body">
                        <table class="table table-hover" id="table1">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Gambar</th>
                                    <th>Judul</th>
                                    <th>Nama Users</th>
                                    <th>Nama Mustahiq</th>
                                    <th>Nama Slug</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $no = 1;
                                foreach($artikel as $row){
                                    ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><img src="<?= base_url('assets/uploads/artikel/'.$row->gambar) ?>" alt="" width="60"></td>
                                        <td><?= $row->judul_artikel ?></td>
                                        <td><?= $row->nama_users ?></td>
                                        <td><?= $row->nama_mustahiq ?></td>
                                        <td><?= $row->slug_artikel ?></td>

                                        <td>
                                            <a href="<?= base_url('admin/artikel/edit_artikel/'.$row->id_artikel) ?>" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>

                                            <a href="#" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#danger"> <i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                <?php } ?>

                            </tbody>
                        </table>
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
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                <i data-feather="x"></i>
            </button>
        </div>
        
        <div class="modal-footer">
            <button type="button"class="btn btn-light-secondary" data-bs-dismiss="modal">
                <i class="bx bx-x d-block d-sm-none"></i>
                <span class="d-none d-sm-block">Exit</span>
            </button>
            <a href="<?= base_url('admin/artikel/delete_artikel/'.$row->id_artikel) ?>" class="btn btn-danger ml-1">
                <span class="d-none d-sm-block">Hapus</span>
            </a>
        </div>
    </div>
</div>
</div>
</div>

