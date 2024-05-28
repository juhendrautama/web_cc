<main id="main">

    <!-- ======= Blog Single Section ======= -->
    <section id="blog" class="blog" style="margin-top: 80px;">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 entries">

            <article class="entry entry-single">

              <div class="entry-img">
                <img width="100%" src="upload/content/<?php echo $blog->image?>" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a><?php echo $blog->judul?></a>
              </h2>
              <div class="entry-meta">
                <ul>
                 
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a ><time datetime="<?php echo $blog->tgl_post?>"><?php echo $blog->tgl_post?></time></a></li>
                 
                </ul>
              </div>

              <div class="entry-content">
                 <?php echo $blog->artikel?>
              </div>

            </article><!-- End blog entry -->

          </div><!-- End blog entries list -->

          <div class="col-lg-4">

            <div class="sidebar">

         <!--     <h3 class="sidebar-title">Search</h3>
              <div class="sidebar-item search-form">
                <form action="">
                  <input type="text">
                  <button type="submit"><i class="bi bi-search"></i></button>
                </form>
              </div>End sidebar search formn-->

              <h3 class="sidebar-title">Postingan Terbaru</h3>
              <div class="sidebar-item recent-posts">
              <?php foreach($recent->result() as $recent){?>
                <div class="post-item clearfix">
                  <img src="upload/content/<?php echo $recent->image?>" alt="">
                  <h4><a href="home/blog_detail/<?php echo $recent->id_blog?>"><?php echo $recent->judul?></a></h4>
                  <time datetime="<?php echo $recent->tgl_post?>"><?php echo $recent->tgl_post?></time>
                </div>
                <?php } ?>
               
              </div><!-- End sidebar recent posts-->

            </div><!-- End sidebar -->

          </div><!-- End blog sidebar -->

        </div>

      </div>
    </section><!-- End Blog Single Section -->

  </main><!-- End #main -->