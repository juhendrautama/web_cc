<main id="main">

<!-- ======= Breadcrumbs ======= -->
<section class="breadcrumbs">
  <div class="container">

    <ol>
      <li><a href="">Home</a></li>
      <li>Detail Produk</li>
    </ol>
    <h2>Detail Produk</h2>

  </div>
</section><!-- End Breadcrumbs -->

<!-- ======= Portfolio Details Section ======= -->
<section id="portfolio-details" class="portfolio-details">
  <div class="container">

    <div class="row gy-4">

      <div class="col-lg-6">
        <div class="portfolio-details-slider swiper">
          <div class="swiper-wrapper align-items-center">
          <?php 
            foreach ($foto_produk->result() as $foto_produk) {?>
            <div class="swiper-slide">
              <img src="upload/content/<?php echo $foto_produk->foto_produk?>" alt="">
            </div>
          <?php } ?>

          </div>
          <div class="swiper-pagination" style="margin-top:0px;"></div>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="portfolio-info">
          <h2><?php echo $detail_produk->nama_produk?></h2>
          <?php echo $detail_produk->deskripsi_produk?>
          <div class="mt-5"></div>
          <a href="https://api.whatsapp.com/send?phone=6289618535693&text=Hallo%2C%20saya%20ingin%20menanyakan%20produk%20<?php echo base_url()?>home/produk/<?php echo $detail_produk->id_produk?>%20mohon%20konfirmasinya%20segera" class="btn btn-danger">Pesan / Cek Harga <b>Sekarang</b></a>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Portfolio Details Section -->

</main><!-- End #main -->
