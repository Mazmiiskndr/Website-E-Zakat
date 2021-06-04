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
            <?php foreach($konfirmasi as $row){ ?>
              <form class="volunteer-form-wrapper"  action="<?= base_url('home/bayar_zakat/konfirmasi_zakat_aksi') ?>" method="post">
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

                      <!-- Zakat Emas -->
                      <?php if($row->jenis_zakat == "Zakat Emas"){ ?>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Jumlah Emas  </label>
                            <input class="form-control" type="number" name="jumlah_zakat" value="85" required>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Harga Emas/(Gram)</label>
                            <input class="form-control" type="number" name="harga" placeholder="0" required>
                          </div>
                        </div>
                        <!-- End Zakat Emas -->

                        <!-- Zakat Perak -->
                      <?php }elseif($row->jenis_zakat == "Zakat Perak"){ ?>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Jumlah Perak  </label>
                            <input class="form-control" type="number" name="jumlah_zakat" value="672" required>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Harga Perak/(Gram)</label>
                            <input class="form-control" type="number" name="harga" placeholder="0" required>
                          </div>
                        </div>
                        <!-- End Zakat Perak -->

                        <!-- Zakat Perdagangan -->
                      <?php }elseif($row->jenis_zakat == "Zakat Perdagangan"){ ?>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Modal Dagang (Rupiah)</label>
                            <input class="form-control" type="number" name="jumlah_zakat" placeholder="0" required>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Keuntungan Dagang (Rupiah)</label>
                            <input class="form-control" type="number" name="harga" placeholder="0" required>
                          </div>
                        </div>
                        <!-- End Zakat Perdagangan -->

                        <!-- Zakat Pertanian dan Buah-buahan -->
                      <?php }elseif($row->jenis_zakat == "Zakat Pertanian dan Buah-buahan"){ ?>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Hasil Panen (Kg)</label>
                            <input class="form-control" type="number" name="jumlah_zakat" placeholder="0" required>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Harga Hasil Panen /  (Kg)</label>
                            <input class="form-control" type="number" name="harga" placeholder="0" required>
                          </div>
                        </div>
                        <!-- End Zakat Pertanian dan Buah-buahan -->

                        <!-- Zakat Fitrah -->
                      <?php }elseif($row->jenis_zakat == "Zakat Fitrah"){ ?>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Beras (Kg)</label>
                            <input class="form-control" type="number" name="jumlah_zakat" value="2.5" required>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Harga Beras /  (Kg)</label>
                            <input class="form-control" type="number" name="harga" placeholder="0" required>
                          </div>
                        </div>
                        <!-- End Zakat Fitrah -->
                      <?php }else{ ?>
                      <?php } ?>

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