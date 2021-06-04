<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

 <main class="main-content site-wrapper-reveal">
  <!--== Start Page Title Area ==-->
  <section class="page-title-area" data-bg-img="<?= base_url('assets/uploads/') ?>zakat2.jpg">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="page-title-content text-center">
            <h2 class="title text-white">Transaksi Zakat</h2>
            <div class="bread-crumbs"><a href="<?= base_url('') ?>">Home<span class="breadcrumb-sep">//</span></a><span class="active">Transaksi Zakat</span></div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--== End Page Title Area ==-->

  <!--== Start Causes Area ==-->
  <section class="causes-details-area">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h3 class="text-center">Transaksi Zakat</h3>
          <?= $this->session->flashdata('pesan'); ?>
          <div class="card">

            <div class="table-responsive shadow-sm">
              <table class="table table-hover table-borderless">
                <thead>
                  <tr class="table-dark text-black">
                    <th>No</th>
                    <th scope="col">No. Transaksi</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jenis Zakat</th>
                    <th scope="col">Aksi</th>
                    <th scope="col">Batal</th>
                  </tr>
                </thead>
                <tbody>
                  <?php  
                  $no = 1;
                  foreach($bayar_zakat as $row){
                    ?>
                    <tr>
                      <th scope="row"><?= $no++ ?>.</th>

                      <td><?= $row->no_transaksi ?></td>
                      <td><?= $row->nama ?></td>
                      <td><?= $row->jenis_zakat ?></td>
                      <?php if($row->status_pembayaran == 2){ ?>
                        <td><button type="button" class="btn btn-warning text-white">Menunggu Konfirmasi</button></td>
                      <?php }elseif($row->status_pembayaran == 1){?>
                        <td><button type="button" class="btn btn-success text-white">Lunas</button></td>
                      <?php }else{ ?>
                        <?php if(!$row->harga || $row->harga == "0"){ ?>
                          <td><a href="<?= base_url('home/bayar_zakat/konfirmasi_zakat/'.$row->id_bayar_zakat) ?>" class="btn btn-primary">Konfirmasi</a></td>
                        <?php }elseif($row->harga){ ?>
                          <td><a href="<?= base_url('home/bayar_zakat/bayar/'.$row->id_bayar_zakat) ?>" class="btn btn-dark text-white">Bayar</a></td>
                        <?php }else{ ?>
                          <td><button type="button" class="btn btn-success text-white">Lunas</button></td>
                        <?php } ?>
                        <td><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter">
                          Batal
                        </button></td>
                      <?php } ?>

                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>

          <div class="layer-style">
            <img class="layer-style1" src="<?= base_url('assets/charity/') ?>assets/img/shape/form-shape1.png" alt="Image-Givest">
            <img class="layer-style2" src="<?= base_url('assets/charity/') ?>assets/img/shape/form-shape2.png" alt="Image-Givest">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--== End Causes Area ==-->
</main>




<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header bg-danger">
        <h5 class="modal-title text-white" id="exampleModalLongTitle">Yakin ingin membatalkan Transaksi?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="<?= base_url('home/bayar_zakat/batal_transaksi/'.$row->id_bayar_zakat) ?>" class="btn btn-danger">Batal</a>
      </div>
    </div>
  </div>
</div>



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>