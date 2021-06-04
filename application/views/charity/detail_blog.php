 <div class="wrapper">
 <main class="main-content site-wrapper-reveal">
    <!--== Start Page Title Area ==-->
    <section class="page-title-area" data-bg-img="<?= base_url('assets/uploads/') ?>zakat2.jpg">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="page-title-content text-center">
              <h2 class="title text-white">Blog Details</h2>
              <div class="bread-crumbs"><a href="<?= base_url('') ?>">Home<span class="breadcrumb-sep">//</span></a><span class="active">Blog Detail</span></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Page Title Area ==-->

    <!--== Start Blog Area Wrapper ==-->
    <section class="blog-details-area">
      <div class="container">
        <div class="row"> 
          <div class="col-lg-12">
            <?php foreach($detail as $row){ ?>
            <div class="blog-details-column">
              <div class="post-details-content">
                <div class="post-details-body">
                  <div class="thumb">
                    <img class="w-100" src="<?= base_url('assets/uploads/artikel/'.$row->gambar) ?>" alt="E-Zakat">
                  </div>
                  <div class="content">
                    <div class="meta">
                   
                      <a class="post-author" href="<?= base_url('home/blog') ?>"><span class="icon"><img class="icon-img" src="<?= base_url('assets/charity/') ?>assets/img/icons/admin1.png" alt="Icon-Image"></span>By: <?= $row->nama_users ?></a>
                    </div>
                    <h2 class="title"><?= $row->judul_artikel ?></h2>
                    <p><?= $row->deskripsi_artikel ?></p>
                    
                    <div class="category-social-content">
                      <div class="social-items">
                        <a href="#/"><i class="icofont-facebook"></i></a>
                        <a href="#/"><i class="icofont-skype"></i></a>
                        <a href="#/"><i class="icofont-twitter"></i></a>
                      </div>
                      
                    </div>
                  </div>

                  

                </div>
              </div>
            </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </section>
    <!--== End Blog Area Wrapper ==-->
  </main>