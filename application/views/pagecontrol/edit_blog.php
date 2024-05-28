			<!-- Begin Page Content -->
            <div class="container-fluid">

<!-- Page Heading -->

<?php $this->load->view('parsing/back/alert')?>
<!-- DataTales Example -->
<div class="card shadow mb-4">
<div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Postingan</h6>
            <a href="pagecontrol/page/blog"><i class="fa fa-arrow-left"></i> Kembali</a>
    </div>
    <div class="card-body">
        <form method="post" enctype="multipart/form-data" action="pagecontrol/page/update_blog/<?php echo $blog->id_blog?>" >
            <div class="row">
                <div class="col-md-8">
                    <div class="form-group">
                        <label for="basicInput">Judul</label>
                        <input name="judul" required type="text" value="<?php echo $blog->judul?>" class="form-control" id="basicInput" placeholder="Masukkan Judul Postingan">
                    </div>
                    <div class="form-group">
                        <label for="basicInput">Tanggal Posting</label>
                        <input name="tgl_post" required type="date" value="<?php echo $blog->tgl_post?>" class="form-control" id="basicInput" placeholder="Masukkan Tanggal Posting">
                    </div>
                    <div class="form-group">
                        <label for="basicInput">Image</label>
                        <input name="userfile" type="file" class="form-control" id="basicInput">
                        <small style="color:red;">Abaikan jika tidak ingin mengganti foto</small>
                    </div>
                    <div class="form-group">
                        <label for="basicInput">Artikel</label>
                        <textarea name="artikel" required  class="form-control summernote" ><?php echo $blog->artikel?></textarea>
                    </div>
                    <button name="update" class="btn btn-primary" type="submit">Simpan</button>
                </div>
                <div class="col-md-4">
                    <img src="upload/content/<?php echo $blog->image?>" width="100%" alt="">
                </div>
            </div>
        </form>
    </div>
</div>

</div>
<!-- /.container-fluid -->


    