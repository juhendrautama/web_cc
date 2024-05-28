    <!-- ======= Hero Section 
    <section id="hero" class="hero d-flex align-items-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 d-flex flex-column justify-content-center">
            <h1 data-aos="fade-up"><?php // echo $beranda->t_h1?></h1>
            <h2 data-aos="fade-up" data-aos-delay="400"><?php // echo $beranda->t_h2?></h2>
            <div data-aos="fade-up" data-aos-delay="600">
              <div class="text-center text-lg-start">
                <a href="#about" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                  <span>Lebih Lanjut</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
            <img src="upload/content/<?php // echo $beranda->hero_image?>" class="img-fluid" alt="" />
          </div>
        </div>
      </div>
    </section>
     End Hero -->

    <main id="main">
      <!-- ======= Pricing Section ======= -->
      <section id="pricing" class="pricing" style="margin-top:30px;">
        <div class="container" data-aos="fade-up">
          <header class="section-header">
            <p>Paket Penerbitan Buku</p>
            <h2 class="mt-3">Pilihan paket penerbitan yang bisa Anda pilih untuk mendapatkan harga yang lebih terjangkau.</h2>
          </header>

          <div class="row gy-4" data-aos="fade-left">
          <?php foreach($paket->result() as $paket){?>
            <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
              <div class="box">
                <?php 
                  if ($paket->terlaris=="Y") {
                    echo'<span class="featured">Terlaris</span>';
                  }
                ?>
                <h3><?php echo $paket->nama_paket ?></h3>
                <div class="price"><sup>Rp.</sup><?php echo number_format($paket->harga, 0, ",", ".")?><span></span></div>
                <img src="upload/content/<?php echo $paket->image ?>" class="img-fluid" alt="" />
                  <?php echo $paket->detail ?>
                <a href="https://api.whatsapp.com/send?phone=<?php echo $paket->no_hp?>&text=Hallo%2C%20saya%20ingin%20memesan%20paket%20penerbitan%20buku" class="btn-buy">Pesan</a>
              </div>
            </div>
            <?php } ?>
          </div>
        </div>
      </section>
      <!-- End Pricing Section -->

      <!-- ======= Services Section 
      <section id="penawaran" class="services">
        <div class="container" data-aos="fade-up">
          <header class="section-header">
            <h2>Penawaran</h2>
            <p>Penawaran</p>
          </header>

          <div class="row gy-4">
            
          <?php //foreach($penawaran->result() as $penawaran){?>
          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
              <div class="service-box <?php //echo $penawaran->color?>">
                <i class="<?php //echo $penawaran->icon?> icon"></i>
                <h3><?php// echo $penawaran->penawaran?></h3>
                <p><?php //echo $penawaran->deskripsi?></p>
              </div>
            </div>
          <?php //} ?>
            
          </div>
        </div>
      </section>
      End Services Section -->

      <!-- ======= About Section ======= -->
      <section id="about" style="background-color: #012970" class="about">
        <div class="container" data-aos="fade-up">
          <div class="row gx-0">
            <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
              <div class="content">
                <!--<h3>Who We Are</h3>-->
                <h2>"<?php echo $quote->quote?>"</h2>
                <p>
                  <?php echo $quote->deskripsi?>
                </p>
                <!-- <div class="text-center text-lg-start">
                  <a href="#" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                    <span>Read More</span>
                    <i class="bi bi-arrow-right"></i>
                  </a>
                </div>-->
              </div>
            </div>

            <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
              <img src="upload/content/<?php echo $quote->foto?>" class="img-fluid" alt="" />
            </div>
          </div>
        </div>
      </section>
      <!-- End About Section -->

      <!-- ======= Counts Section ======= -->
      <section id="counts" class="counts">
        <div class="container" data-aos="fade-up">
          <div class="row gy-4">
          <?php foreach($jumlah->result() as $jumlah){?>
            <div class="col-lg-3 col-md-6">
              <div class="count-box">
                <i class="<?php echo $jumlah->icon?>"></i>
                <div>
                  <span data-purecounter-start="0" data-purecounter-end="<?php echo $jumlah->jumlah?>" data-purecounter-duration="1" class="purecounter"></span>
                  <p><?php echo $jumlah->nama_karya?></p>
                </div>
              </div>
            </div>
            <?php } ?>
          </div>
        </div>
      </section>
      <!-- End Counts Section -->


<!-- ======= Portfolio Section 
      <section id="project" style="background-color: #012970" class="portfolio">
        <div class="container" data-aos="fade-up">
          <header class="section-header">
            <p style="color: white;">Project Kami</p>
            <h2 style="color: white;" class="mt-3">Sejak berdiri tahun 2017, Penerbit Catur Cemeyka telah menerbitkan banyak buku dari akademisi, penulis, sastrawan, hingga pelajar. Catur Cemeyka juga telah menyalurkan buku-buku cetakannya ke sejumlah daerah di Indonesia.</h2>
          </header>

          <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-12 d-flex justify-content-center">
              <ul id="portfolio-flters">
                <li data-filter="*" class="filter-active">All</li>
                <li data-filter=".filter-app">App</li>
                <li data-filter=".filter-card">Card</li>
                <li data-filter=".filter-web">Web</li>
              </ul>
            </div>
          </div>

          <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">
          <?php //foreach($project->result() as $project){?>
            <div class="col-lg-3 col-md-6 portfolio-item">
              <div class="portfolio-wrap">
                <img src="upload/content/<?php // echo $project->image?>" class="img-fluid" alt="" />
                <div class="portfolio-info">
                  <h4><?php // echo $project->nama_project?></h4>
                  <div class="portfolio-links">
                    <a href="upload/content/<?php // echo $project->image?>" data-gallery="portfolioGallery" class="portfokio-lightbox" title="<?php echo '<strong>'.$project->nama_project.'</strong>'.'<br><br>'.$project->deskripsi?> "><i class="bi bi-eye"></i></a>
                    <a href="portfolio-details.html" title="More Details"><i class="bi bi-eye"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <?php // } ?>
          </div>
        </div>
      </section>
       End Portfolio Section -->

      <!-- ======= Testimonials Section ======= -->
      <section id="review" class="testimonials">
        <div class="container" data-aos="fade-up">
          <header class="section-header">
            <p>Testimoni Klien</p>
            <h2 class="mt-3">Apa yang dikatakan klien setelah menggunakan jasa kami ?</h2>
          </header>

          <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="200">
            <div class="swiper-wrapper" style="height:500px;">
            <?php foreach($testimoni->result() as $testimoni){?>
              <div class="swiper-slide">
                <div class="testimonial-item">
                  <p><?php echo $testimoni->testimoni?></p>
                  <div class="profile mt-auto">
                    <img src="upload/content/<?php echo $testimoni->image?>" class="testimonial-img" alt="" />
                    <h3><?php echo $testimoni->nama?></h3>
                    <h4><?php echo $testimoni->pekerjaan?></h4>
                  </div>
                </div>
              </div>
              <!-- End testimonial item -->
            <?php } ?>
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </section>
      <!-- End Testimonials Section -->

      <!-- ======= Clients Section 
      <section id="clients" style="background-color: #012970" class="clients">
        <div class="container" data-aos="fade-up">
          <header class="section-header">
            <p style="color: white;">Klien Kami</p>
            <h2>Our Clients</h2>
          </header>

          <div class="clients-slider swiper">
            <div class="swiper-wrapper align-items-center" style="height:100px;">
              <?php //foreach($klien->result() as $klien){?>
                <div class="swiper-slide"><img src="upload/content/<?php echo $klien->img_klien?>" class="img-fluid" alt="" /></div>
              <?php// } ?>
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </section>
      End Clients Section -->

      <!-- ======= Recent Blog Posts Section ======= -->
      <section id="blog" class="recent-blog-posts">
        <div class="container" data-aos="fade-up">
          <header class="section-header">
            <p>Postingan Blog</p>
            <h2 class="mt-3">Sejumlah konten menarik terkait buku, literasi, dan penerbitan</h2>
          </header>

          <div class="row">
          <?php foreach($blog->result() as $blog){?>
            <div class="col-lg-3">
              <div class="post-box">
                <div class="post-img"><img src="upload/content/<?php echo $blog->image?>" class="img-fluid" alt="" /></div>
                <span class="post-date"><?php echo $blog->tgl_post?></span>
                <h3 class="post-title"><?php echo $blog->judul?></h3>
                <a href="home/blog_detail/<?php echo $blog->id_blog ?>" class="readmore stretched-link mt-auto"><span>Selengkapnya</span><i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
            <?php } ?>
          </div>
          <div class="text-center">
            <a href="home/blog" class="btn btn-primary mt-5"><span>Tampilkan Selengkapnya</span></a>
          </div>
        </div>
      </section>
      <!-- End Recent Blog Posts Section -->
      
      
      <!-- ======= Team Section 
      <section id="tim" class="team">
        <div class="container" data-aos="fade-up">
          <header class="section-header">
            <p>Tim Penerbit Catur Cemeyka</p>
            <h2 class="mt-3">Tim kami yang siap membantu Anda</h2>
          </header>

          <div class="row gy-4">
          <?php// foreach($tim->result() as $tim){?>
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
              <div class="member">
                <div class="member-img">
                  <img src="upload/content/<?php //echo $tim->image?>" class="img-fluid" alt="" />
                </div>
                <div class="member-info">
                  <h4><?php// echo $tim->nama?></h4>
                  <span><?php //echo $tim->jabatan?></span>
                </div>
              </div>
            </div>
            <?php //} ?>
          </div>
        </div>
      </section>
      End Team Section -->

      <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <p>Hubungi Kami</p>
          <h2 class="mt-3">Hubungi kami melalui form berikut</h2>
        </header>

        <div class="row gy-4">
<!--
          <div class="col-lg-6">

            <div class="row gy-4">
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-geo-alt"></i>
                  <h3>Address</h3>
                  <p>A108 Adam Street,<br>New York, NY 535022</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-telephone"></i>
                  <h3>Call Us</h3>
                  <p>+1 5589 55488 55<br>+1 6678 254445 41</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-envelope"></i>
                  <h3>Email Us</h3>
                  <p>info@example.com<br>contact@example.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-clock"></i>
                  <h3>Open Hours</h3>
                  <p>Monday - Friday<br>9:00AM - 05:00PM</p>
                </div>
              </div>
            </div>

          </div>-->

          <div class="col-lg-12">
            <form action="home/contact" method="post" target="_blank">
              <div class="row gy-4">

                <div class="col-md-12">
                  <input type="text" name="name" class="form-control" placeholder="Nama Anda" required>
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Tuliskan pesan anda disini.." required></textarea>
                </div>

                <div class="col-md-12 text-center">
                 
                  <button name="send" class="btn btn-primary" type="submit">Kirim Pesan</button>
                </div>

              </div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->
    </main>
    <!-- End #main -->