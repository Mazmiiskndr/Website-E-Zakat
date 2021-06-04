 <main class="main-content site-wrapper-reveal">
  <!--== Start Page Title Area ==-->
  <section class="page-title-area" data-bg-img="<?= base_url('assets/uploads/') ?>zakat2.jpg">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="page-title-content text-center">
            <h2 class="title text-white">Bayar Zakat</h2>
            <div class="bread-crumbs"><a href="<?= base_url('') ?>">Home<span class="breadcrumb-sep">//</span></a><span class="active">Bayar Zakat</span></div>
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
          <h3>Bayar Zakat</h3>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500 an when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged was popularised in the 1960s with the release of etraset sheets containing Lorem Ipsum passages.</p>

          <div class="donation-form bgcolor-theme3">
            <div class="section-title">
              <h5 class="subtitle line-theme-color mb-14">Bayar Zakat</h5>
              <h2 class="title text-white">Pilih Zakat</h2>
              <img class="line-shape" src="<?= base_url('assets/charity/') ?>assets/img/shape/line-t3.png" alt="Image-Givest">
            </div>
            <form action="<?= base_url('home/bayar_zakat/bayar_zakat_aksi') ?>" method="post">
              <div class="form-group mb-2">
                <label class="text-white">No. Transaksi</label>
                <input type="text" class="form-control" name="no_transaksi" value="<?= date("Ymd-".$this->session->userdata('id_users')) ?>" readonly>
                <input type="hidden" class="form-control" name="tgl_pembayaran" value="<?= date("d-m-Y") ?>" readonly>
              </div>
              <div class="form-group mb-2">
                <label class="text-white">Nama</label>
                <input type="text" class="form-control" name="nama" readonly value="<?= $this->session->userdata('nama_users') ?>">
              </div>
              <div class="form-group mb-4">
                <label class="text-white">Zakat</label>
                <select class="form-control" name="jenis_zakat">
                  <option>-- Pilih Jenis Zakat -- </option>
                  <option value="Zakat Emas">Zakat Emas</option>
                  <option value="Zakat Perak">Zakat Perak</option>
                  <option value="Zakat Perdagangan">Zakat Perdagangan</option>
                  <option value="Zakat Pertanian dan Buah-buahan">Zakat Pertanian dan Buah-buahan</option>
                  <!-- <option value="Zakat Hewan Ternak">Zakat Hewan Ternak</option> -->
                  <option value="Zakat Fitrah">Zakat Fitrah</option>
                </select>
              </div>
              <!-- <div class="form-group mb-4">
                <label class="text-white">Jumlah Bayar</label>
                <input type="number" class="form-control" name="jumlah_bayar" placeholder="0"  required="">
              </div> -->
              
              <div class="btn-wrp">
                <button type="submit" class="btn-theme btn-gradient btn-slide">Lanjut</button>

              </div>
            </form>
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