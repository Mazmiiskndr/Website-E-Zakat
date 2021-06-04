<!--wrapper start-->
<div class="wrapper contact-page-wrapper">
<main class="main-content site-wrapper-reveal">
    <!--== Start Page Title Area ==-->
    <section class="page-title-area" data-bg-img="<?= base_url('assets/uploads/') ?>zakat2.jpg">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="page-title-content text-center">
              <h2 class="title text-white">Contact Us</h2>
              <div class="bread-crumbs"><a href="<?= base_url('') ?>">Home<span class="breadcrumb-sep">//</span></a><span class="active">Contact</span></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Page Title Area ==-->

    <!--== Start Contact Area ==-->
    <section class="contact-area">
      <div class="container-fluid">
        <div class="row">

          <div class="col-lg-12">
            <?= $this->session->flashdata('pesan'); ?>
            <div class="contact-colunm">
              
              <div class="contact-form">

                <form class="contact-form-wrapper" action="<?= base_url('home/contact/contact_aksi/') ?>" method="post">
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="section-title">
                        <h5 class="subtitle line-theme-color">Contact Now</h5>
                        <h2 class="title">Get In Touch.</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting typesetting remaining essentially unchanged.</p>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="row row-gutter-20">
                        <div class="col-md-12">
                          <div class="form-group">
                            <input class="form-control" type="text" name="nama" placeholder="Nama">
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <input class="form-control" type="email" name="email" placeholder="Email">
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <input class="form-control" type="text" name="no_telp" placeholder="No. Telepon">
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group mb-0">
                            <textarea class="form-control textarea" name="deskripsi" placeholder="Pesan"></textarea>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group mb-0">
                            <button class="btn-theme btn-gradient btn-slide no-border" type="submit">Kirim</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
              <!-- Message Notification -->
              <div class="form-message"></div>
              <div class="contact-map-area">
                <div class="contact-info-content">
                  <div class="contact-info-item">
                    <div class="icon">
                      <img class="icon-img" src="<?= base_url('assets/charity/') ?>assets/img/icons/c1.png" alt="Icon">
                    </div>
                    <div class="content">
                      <h4>No. Telp</h4>
                      <img class="line-icon" src="<?= base_url('assets/charity/') ?>assets/img/shape/line-s1.png" alt="Image-Givest">
                      <a href="tel://+00569876458">(00) 569 - 876 458</a>
                      <a href="tel://+884687549786">(88) 468-7549 786</a>
                    </div>
                  </div>
                  <div class="contact-info-item">
                    <div class="icon icon-mail">
                      <img class="icon-img" src="<?= base_url('assets/charity/') ?>assets/img/icons/c2.png" alt="Icon">
                    </div>
                    <div class="content">
                      <h4>Email</h4>
                      <img class="line-icon" src="<?= base_url('assets/charity/') ?>assets/img/shape/line-s1.png" alt="Image-Givest">
                      <a href="mailto://support@gmail.com">e_zakat@gmail.com</a>
                      <a href="mailto://example@gmail.com">example@gmail.com</a>
                    </div>
                  </div>
                  <div class="contact-info-item mb-0 pb-0">
                    <div class="icon icon-location">
                      <img class="icon-img" src="<?= base_url('assets/charity/') ?>assets/img/icons/c3.png" alt="Icon">
                    </div>
                    <div class="content">
                      <h4>Address</h4>
                      <img class="line-icon" src="<?= base_url('assets/charity/') ?>assets/img/shape/line-s1.png" alt="Image-Givest">
                      <p>Norwegian St #APT 807 <br>Pottsville, Pennsya (PA)</p>
                    </div>
                  </div>
                </div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.8402891185374!2d144.95373631590425!3d-37.81720974201477!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sen!2ssg!4v1607294780661!5m2!1sen!2ssg"></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Contact Area ==-->
  </main>