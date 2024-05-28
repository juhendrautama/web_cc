<base href="<?php echo base_url()?>" />
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Catur Cemeyka</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />
    <meta property="og:image" content="https://caturcemeyka.com/assets/img/hero-img-book.png">
    <!-- Favicons -->
    <link href="assets/front/img/favicon.png" rel="icon" />
    <link href="assets/front/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="assets/front/vendor/aos/aos.css" rel="stylesheet" />
    <link href="assets/front/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/front/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
    <link href="assets/front/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
    <link href="assets/front/vendor/remixicon/remixicon.css" rel="stylesheet" />
    <link href="assets/front/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="assets/front/css/style.css" rel="stylesheet" />

    <!-- =======================================================
  * Template Name: FlexStart
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  </head>

  <body>
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top">
      <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
        <a href="" class="logo d-flex align-items-center">
          <img src="assets/front/img/favicon.png" alt="" />
          <span>Catur Cemeyka</span>
        </a>

        <nav id="navbar" class="navbar">
          <ul>
            <!--<li><a class="nav-link scrollto active" href="#hero">Beranda</a></li>-->
            <!--<li><a class="nav-link scrollto" href="#penawaran">Penawaran</a></li>
            <li><a class="nav-link scrollto" href="#project">Project</a></li>-->
            <li><a class="nav-link scrollto" href="#review">Review</a></li>
            <li><a class="nav-link scrollto" href="#blog">Blog</a></li>
            <!--<li class="dropdown megamenu">
              <a href="#"><span>Mega Menu</span> <i class="bi bi-chevron-down"></i></a>
              <ul>
                <li>
                  <a href="#">Column 1 link 1</a>
                  <a href="#">Column 1 link 2</a>
                  <a href="#">Column 1 link 3</a>
                </li>
                <li>
                  <a href="#">Column 2 link 1</a>
                  <a href="#">Column 2 link 2</a>
                  <a href="#">Column 3 link 3</a>
                </li>
                <li>
                  <a href="#">Column 3 link 1</a>
                  <a href="#">Column 3 link 2</a>
                  <a href="#">Column 3 link 3</a>
                </li>
                <li>
                  <a href="#">Column 4 link 1</a>
                  <a href="#">Column 4 link 2</a>
                  <a href="#">Column 4 link 3</a>
                </li>
              </ul>-->
            <!--<li><a class="nav-link scrollto" href="#tim">Tim</a></li>-->
            <li><a class="nav-link scrollto" href="#contact">Kontak Kami</a></li>
          <!-- <li><a href="blog.html">Blog</a></li>-->
            <!--<li class="dropdown">
              <a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
              <ul>
                <li><a href="#">Drop Down 1</a></li>
                <li class="dropdown">
                  <a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                  <ul>
                    <li><a href="#">Deep Drop Down 1</a></li>
                    <li><a href="#">Deep Drop Down 2</a></li>
                    <li><a href="#">Deep Drop Down 3</a></li>
                    <li><a href="#">Deep Drop Down 4</a></li>
                    <li><a href="#">Deep Drop Down 5</a></li>
                  </ul>
                </li>
                <li><a href="#">Drop Down 2</a></li>
                <li><a href="#">Drop Down 3</a></li>
                <li><a href="#">Drop Down 4</a></li>
              </ul>
            </li>-->

           <!-- <li><a class="nav-link scrollto" href="#contact">Contact</a></li>-->
            <li><a class="getstarted scrollto" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">Produk</a></li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- .navbar -->
      </div>
    </header>
    <!-- End Header -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"><strong>Produk Kami</strong></h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <div class="row">
                  <div class="col-md-4 mb-3">
                    <Strong>Percetakan</Strong>
                    <ul class="list-group list-group-flush">
                      <?php 
                        $kategori = "Percetakan";
                        $pct      = $this->m_content->get_produk_bykategori($kategori);
                        foreach ($pct->result() as $pct) {
                          echo'<li class="list-group-item"><a href="home/produk/'.$pct->id_produk.'">'.$pct->nama_produk.'</a></li>';
                        }
                      ?>
                    </ul>
                  </div>
                  <div class="col-md-4 mb-3">
                    <Strong>Souvenir</Strong>
                    <ul class="list-group list-group-flush">
                    <?php 
                        $kategori = "Souvenir";
                        $svn      = $this->m_content->get_produk_bykategori($kategori);
                        foreach ($svn->result() as $svn) {
                          echo'<li class="list-group-item"><a href="home/produk/'.$svn->id_produk.'">'.$svn->nama_produk.'</a></li>';
                        }
                      ?>
                    </ul>
                  </div>
                  <div class="col-md-4 mb-3">
                    <Strong>Advertising</Strong>
                    <ul class="list-group list-group-flush">
                      <?php 
                        $kategori = "Advertising";
                        $adv      = $this->m_content->get_produk_bykategori($kategori);
                        foreach ($adv->result() as $adv) {
                          echo'<li class="list-group-item"><a href="home/produk/'.$adv->id_produk.'">'.$adv->nama_produk.'</a></li>';
                        }
                      ?>
                    </ul>
                  </div>
                  <div class="col-md-4 mb-3">
                    <Strong>Packaging</Strong>
                    <ul class="list-group list-group-flush">
                    <?php 
                        $kategori = "Packaging";
                        $pckg      = $this->m_content->get_produk_bykategori($kategori);
                        foreach ($pckg->result() as $pckg) {
                          echo'<li class="list-group-item"><a href="home/produk/'.$pckg->id_produk.'">'.$pckg->nama_produk.'</a></li>';
                        }
                      ?>
                    </ul>
                  </div>
                  <div class="col-md-4 mb-3">
                    <Strong>Terbaru</Strong>
                    <ul class="list-group list-group-flush">
                    <?php 
                        $kategori = "Terbaru";
                        $trbr      = $this->m_content->get_produk_bykategori($kategori);
                        foreach ($trbr->result() as $trbr) {
                          echo'<li class="list-group-item"><a href="home/produk/'.$trbr->id_produk.'">'.$trbr->nama_produk.'</a></li>';
                        }
                      ?>
                    </ul>
                  </div>
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tutup</button>
          </div>
        </div>
      </div>
    </div>