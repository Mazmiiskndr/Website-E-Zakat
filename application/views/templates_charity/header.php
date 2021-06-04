<!DOCTYPE html>
<html lang="en">

<head> 
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title><?= $title ?></title>

  <!--== Favicon ==-->
  <link href="<?= base_url('assets/uploads/') ?>zakat1.png" rel="icon">

  <!--== Google Fonts ==-->
  <link href="https://fonts.googleapis.com/css?family=Yeseva+One:400" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,500i,700,700i" rel="stylesheet"> 

  <!--== Bootstrap CSS ==-->
  <link href="<?= base_url('assets/charity/') ?>assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!--== Icofont CSS ==-->
  <link href="<?= base_url('assets/charity/') ?>assets/css/icofont.css" rel="stylesheet"/>
  <!--== ElegantIcons CSS ==-->
  <link href="<?= base_url('assets/charity/') ?>assets/css/elegantIcons.css" rel="stylesheet"/>
  <!--== Animate CSS ==-->
  <link href="<?= base_url('assets/charity/') ?>assets/css/animate.css" rel="stylesheet"/>
  <!--== Aos CSS ==-->
  <link href="<?= base_url('assets/charity/') ?>assets/css/aos.css" rel="stylesheet"/>
  <!--== FancyBox CSS ==-->
  <link href="<?= base_url('assets/charity/') ?>assets/css/jquery.fancybox.min.css" rel="stylesheet"/>
  <!--== Slicknav CSS ==-->
  <link href="<?= base_url('assets/charity/') ?>assets/css/slicknav.css" rel="stylesheet"/>
  <!--== Swiper CSS ==-->
  <link href="<?= base_url('assets/charity/') ?>assets/css/swiper.min.css" rel="stylesheet"/>
  <!--== Main Style CSS ==-->
  <link href="<?= base_url('assets/charity/') ?>assets/css/style.css" rel="stylesheet" />

</head>

<body>

  <!--wrapper start-->
  <div class="wrapper home-default-wrapper">

    <!--== Start Preloader Content ==-->
    <div class="preloader-wrap">
      <div class="preloader">
        <span class="dot"></span>
        <div class="dots">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
    <!--== End Preloader Content ==-->

    <!--== Start Header Wrapper ==-->
    <header class="header-area header-default sticky-header">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-5 col-sm-3 col-md-3 col-lg-2 pr-0">
            <div class="header-logo-area">
              <a href="index.html">
                <img class="logo-main" src="<?= base_url('assets/charity/') ?>assets/img/logo2.png" alt="Logo" />
                <img class="logo-light" src="<?= base_url('assets/charity/') ?>assets/img/logo2.png" alt="Logo" />
              </a>
            </div>
          </div>
          <div class="col-7 col-sm-9 col-md-9 col-lg-10">
            <div class="header-align">
              <div class="header-navigation-area">
                <ul class="main-menu nav justify-content-center">
                  <li class="<?= $this->uri->uri_string() === '' ? 'active' : '' ?>"><a href="<?= base_url('') ?>">Beranda</a></li>
                  <li class="<?= $this->uri->uri_string() === 'home/bayar_zakat' ? 'active' : '' ?>"><a href="<?= base_url('home/bayar_zakat') ?>">Bayar Zakat</a></li>

                  <?php if($this->session->userdata('email_users')){ ?>
                    <li class="<?= $this->uri->uri_string() === 'home/bayar_zakat/transaksi_zakat' ? 'active' : '' ?>"><a href="<?= base_url('home/bayar_zakat/transaksi_zakat') ?>">Transaksi</a></li>
                  <?php } ?>

                  <li class="<?= $this->uri->uri_string() === 'home/blog' ? 'active' : '' ?>"><a href="<?= base_url('home/blog') ?>">Blog</a></li>
                  <li class="<?= $this->uri->uri_string() === 'home/about' ? 'active' : '' ?>"><a href="<?= base_url('home/about') ?>">Tentang Kami</a></li>
                  <?php if($this->session->userdata('email_users')){ ?>
                    <li class=""><a href="<?= base_url('auth/login/logout') ?>">Logout</a></li>
                  <?php } ?>

                </ul>
              </div>
              <div class="header-action-area">
                <button class="btn-menu d-xl-none">
                  <span></span>
                  <span></span>
                  <span></span>
                </button>
                <?php if($this->session->userdata('email_users')){ ?>
                  <a href="<?= base_url('home/bayar_zakat') ?>" class="btn-theme btn-gradient btn-slide btn-style">Bayar Zakat <img class="icon icon-img" src="<?= base_url('assets/charity/') ?>assets/img/icons/arrow-line-right2.png" alt="Icon"></a>
                <?php }else{ ?>
                  <a href="<?= base_url('auth/login') ?>" class="btn-theme btn-gradient btn-slide btn-style">Login / Register </a>
                <?php } ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!--== End Header Wrapper ==-->
