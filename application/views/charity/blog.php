

<!--wrapper start-->
<div class="wrapper blog-page-wrapper">



  
  <main class="main-content site-wrapper-reveal">
    <!--== Start Page Title Area ==-->
    <section class="page-title-area" data-bg-img="<?= base_url('assets/uploads/') ?>zakat2.jpg">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="page-title-content text-center">
              <h2 class="title text-white">Blog Post</h2>
              <div class="bread-crumbs"><a href="<?= base_url('') ?>">Home<span class="breadcrumb-sep">//</span></a><span class="active">Blog</span></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Page Title Area ==-->

    <!--== Start Blog Area Wrapper ==-->
    <section class="blog-grid-area">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="blog-content-column">
              <div class="blog-content-area post-items-style2">
                <!--== Start Blog Post Item ==-->
                <?php foreach($artikel as $row){ ?>
                <div class="post-item">
                  <div class="thumb">
                    <a href="blog-details.html"><img src="<?= base_url('assets/uploads/artikel/'.$row->gambar) ?>" alt="Givest-Blog"></a>
                    <div class="meta-date">
                      <a href="<?= base_url('home/blog') ?>"><?= date('d-F-Y',strtotime($row->date))  ?></a>
                    </div>
                    <div class="shape-line"></div>
                  </div>
                  <div class="content">
                    <div class="inner-content">
                      <div class="meta">
                      
                        <a class="post-author" href="<?= base_url('home/blog') ?>"><span class="icon"><img class="icon-img" src="<?= base_url('assets/charity/') ?>assets/img/icons/admin1.png" alt="Icon-Image"></span>By: <?= $row->nama_users ?></a>
                      </div>
                      <h4 class="title">
                        <a href="<?= base_url('home/blog/detail_blog/'.$row->slug_artikel) ?>"><?= $row->judul_artikel ?></a>
                      </h4>
                      <p><?= word_limiter($row->deskripsi_artikel, 50) ?></p>
                      <a href="<?= base_url('home/blog/detail_blog/'.$row->slug_artikel) ?>" class="btn-theme btn-border-gradient btn-size-md"><span>Read More <img class="icon icon-img" src="<?= base_url('assets/charity/') ?>assets/img/icons/arrow-line-right-gradient.png" alt="Icon"></span></a>
                    </div>
                  </div>
                </div>
              <?php } ?>
                <!--== End Blog Post Item ==-->

               

              </div>
              <div class="sidebar-area">
                <div class="widget">
                  <h3 class="widget-title">Search Here</h3>
                  <div class="separator-line">
                    <img class="me-1" src="<?= base_url('assets/charity/') ?>assets/img/shape/line-t2.png" alt="Image-Givest">
                  </div>
                  <div class="widget-search-box">
                    <form action="#" method="post">
                      <div class="form-input-item">
                        <label for="search2" class="sr-only">Search Here</label>
                        <input type="text" id="search2" placeholder="Search here">
                        <button type="submit" class="btn-src">
                          <i class="icofont-search-1"></i>
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="widget">
                  <h3 class="widget-title">Recent Post</h3>
                  <div class="separator-line">
                    <img class="me-1" src="<?= base_url('assets/charity/') ?>assets/img/shape/line-t2.png" alt="Image-Givest">
                  </div>
                  <div class="widget-category">
                    <?php foreach($artikel as $ar){ ?>
                    <a href="<?= base_url('home/blog/detail_blog/'.$row->slug_artikel) ?>"><?= $row->judul_artikel ?></a>
                    <?php } ?>                    
                  </div>
                </div>
                
               
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Blog Area Wrapper ==-->
  </main>
