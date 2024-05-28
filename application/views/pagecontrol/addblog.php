			<!-- Begin Page Content -->
            <div class="container-fluid">

<!-- Page Heading -->

<?php $this->load->view('parsing/back/alert')?>
<!-- DataTales Example -->
<div class="card shadow mb-4">
<div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Postingan Baru</h6>
            <a href="pagecontrol/page/blog"><i class="fa fa-arrow-left"></i> Kembali</a>
    </div>
    <div class="card-body">
        <form method="post" enctype="multipart/form-data" action="pagecontrol/page/save_blog" >
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="basicInput">Judul</label>
                        <input name="judul" required type="text" value="" class="form-control" id="basicInput" placeholder="Masukkan Judul Postingan">
                    </div>
                    <div class="form-group">
                        <label for="basicInput">Tanggal Posting</label>
                        <input name="tgl_post" required type="date" value="" class="form-control" id="basicInput" placeholder="Masukkan Tanggal Posting">
                    </div>
                    <div class="form-group">
                        <label for="basicInput">Image</label>
                        <input name="userfile" type="file" class="form-control" id="basicInput">
                        <small style="color:red;">Abaikan jika tidak ingin mengganti foto</small>
                    </div>
                    <div class="form-group">
                        <label for="basicInput">Artikel</label>
                        <textarea name="artikel" required  class="form-control summernote" ></textarea>
                    </div>
                    <button name="save" class="btn btn-primary" type="submit">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>

</div>
<!-- /.container-fluid -->


    