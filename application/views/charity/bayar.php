<div class="wrapper volunteer-page-wrapper">
 <main class="main-content site-wrapper-reveal">
  <!--== Start Page Title Area ==-->
  <section class="page-title-area" data-bg-img="<?= base_url('assets/uploads/') ?>zakat2.jpg">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="page-title-content text-center">
            <h2 class="title text-white">Konfirmasi Pembayaran Zakat</h2>
            <div class="bread-crumbs"><a href="<?= base_url('') ?>">Home<span class="breadcrumb-sep">//</span></a><span class="active">Konfirmasi Zakat</span></div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--== End Page Title Area ==-->

  <!--== Start Volunteer Form Area ==-->
  <section class="volunteer-form-area mb-5 mt-3">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="volunteer-form">
            <div class="section-title">
              <h5 class="subtitle">Konfirmasi Zakat</h5>
              <h2 class="title">If You Interest! You Can Join With Us <span>As A Volunteer.</span></h2>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since 1500 an when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries but electronic typesetting, remaining essentially unchanged.</p>
            </div>
            <?php foreach($bayar as $row){ ?>
              <form class="volunteer-form-wrapper"  action="<?= base_url('home/bayar_zakat/pembayaran_zakat_aksi') ?>" method="post" enctype="multipart/form-data">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="row row-gutter-20">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label>No. Transaksi</label>
                          <input class="form-control" type="hidden" name="id_bayar_zakat" value="<?= $row->id_bayar_zakat ?>" readonly>
                          <input class="form-control" type="text" name="no_transaksi" value="<?= $row->no_transaksi ?>" readonly>
                        </div>
                      </div>
                      
                      <div class="col-md-4">
                        <div class="form-group">
                          <label>Nama </label>
                          <input class="form-control" type="text" name="nama" value="<?= $row->nama ?>" readonly>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label>Jenis Zakat </label>
                          <input class="form-control" type="text" name="jenis_zakat" value="<?= $row->jenis_zakat ?>" readonly>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label>Nama Bank </label>
                          <input class="form-control" type="text" name="nama_bank" value="<?= $row->nama_bank ?>" required placeholder="Nama Bank">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label>Nama Rekening </label>
                          <input class="form-control" type="text" name="nama_rekening" value="<?= $row->nama_rekening ?>" required placeholder="Nama Rekening">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label>Nomor Rekening </label>
                          <input class="form-control" type="text" name="nomor_rekening" value="<?= $row->nomor_rekening ?>" required placeholder="Nomor Rekening">
                        </div>
                      </div>


                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Jumlah Bayar  </label>
                          <!-- Zakat Emas -->
                          <?php if($row->jenis_zakat == "Zakat Emas/Perak"){ ?>

                            <?php
                            $jumlah_zakat = $row->jumlah_zakat;
                            $harga_emas   = $row->harga;
                            $total        = ($jumlah_zakat * $harga_emas ) * 0.025;  
                            ?>
                            <input class="form-control" type="text" name="jumlah_transfer" value="Rp. <?= number_format($total,0,',','.') ?>" readonly>
                            <!-- End Zakat Emas -->

                             <!-- Zakat Perak -->
                          <?php }elseif($row->jenis_zakat == "Zakat Perak"){ ?>

                             <?php
                            $jumlah_zakat = $row->jumlah_zakat;
                            $harga_emas   = $row->harga;
                            $total        = ($jumlah_zakat * $harga_emas ) * 0.025;  
                            ?>
                            <input class="form-control" type="text" name="jumlah_transfer" value="Rp. <?= number_format($total,0,',','.') ?>" readonly>
                            <!-- End Zakat Perak -->

                            <!-- Zakat Perdagangan -->
                          <?php }elseif($row->jenis_zakat == "Zakat Perdagangan"){ ?>

                            <?php
                            $jumlah       = $row->jumlah_zakat + $row->harga;
                            $total        = $jumlah * 0.025;
                            ?>
                            <input class="form-control" type="text" name="jumlah_transfer" value="Rp. <?= number_format($total,0,',','.') ?>" readonly>
                            <!-- End Zakat Perdagangan -->

                            <!-- Zakat Pertanian dan Buah-buahan -->
                          <?php }elseif($row->jenis_zakat == "Zakat Pertanian dan Buah-buahan"){ ?>
                            <?php
                            $hasil_panen       = $row->jumlah_zakat;
                            $harga_panen       = $row->harga;
                            $total        = ($hasil_panen * 0.1) * $harga_panen;
                            ?>
                            <input class="form-control" type="text" name="jumlah_transfer" value="Rp. <?= number_format($total,0,',','.') ?>" readonly>
                            <!-- EndZakat Pertanian dan Buah-buahan -->

                          <!-- Zakat Fitrah -->
                          <?php }elseif($row->jenis_zakat == "Zakat Fitrah"){ ?>
                            <?php
                            $beras        = $row->jumlah_zakat;
                            $harga_beras  = $row->harga;
                            $total        = $beras * $harga_beras;
                            ?>
                            <input class="form-control" type="text" name="jumlah_transfer" value="Rp. <?= number_format($total,0,',','.') ?>" readonly>
                            <!-- EndZakat Fitrah -->

                          <?php }elseif($row->jenis_zakat == "Zakat Emas/Perak"){ ?>
                          <?php }else{ ?>
                          <?php } ?>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Upload Bukti Pembayaran</label>
                          <input type="file" id="file-input" name="bukti_pembayaran" class="form-control" value="<?= set_value('bukti_pembayaran') ?>">
                        </div>
                      </div>
                      <h5 class="subtitle text-center mt-3">Tujuan Transfer</h5>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label>Nama Bank </label>
                          <input class="form-control" type="text" value="<?= $nama_bank ?>" required placeholder="Nama Bank" readonly>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label>Nama Rekening </label>
                          <input class="form-control" type="text" value="<?= $nama_rekening ?>" required placeholder="Nama Rekening" readonly>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label>Nomor Rekening </label>
                          <input class="form-control" type="text" value="<?= $nomor_rekening ?>" required placeholder="Nomor Rekening" readonly>
                        </div>
                      </div>

                      <div class="col-md-12">
                        <div class="form-group mb-0">
                          <button class="btn-theme btn-gradient btn-slide no-border" type="submit">Konfirmasi</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            <?php } ?>
          </div>
          <!-- Message Notification -->
          <div class="form-message"></div>
        </div>
      </div>
    </div>
  </section>
  <!--== End Volunteer Form Area ==-->

  <!--== Start Team Area ==-->
  <section class="team-area">

  </section>
  <!--== End Team Area ==-->



</main>