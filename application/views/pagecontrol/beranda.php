			<!-- Begin Page Content -->
            <div class="container-fluid">

<!-- Page Heading -->

<?php $this->load->view('parsing/back/alert')?>
<!-- DataTales Example -->
<div class="card shadow mb-4">
<div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Halaman Beranda</h6>
    </div>
    <div class="card-body">
        <form method="post" enctype="multipart/form-data" action="pagecontrol/page/update_beranda" >
            <div class="row">
                <div class="col-md-8">
                    <div class="form-group">
                        <label for="basicInput">Text H1</label>
                        <input name="t_h1" required type="text" value="<?php echo $page->t_h1?>" class="form-control" id="basicInput" placeholder="Masukkan Text H1">
                    </div>
                    <div class="form-group">
                        <label for="basicInput">Text H2</label>
                        <input name="t_h2" required type="text" value="<?php echo $page->t_h2?>" class="form-control" id="basicInput" placeholder="Masukkan Text H2">
                    </div>
                    <div class="form-group">
                        <label for="basicInput">Text Tombol</label>
                        <input name="t_button" required type="text" value="<?php echo $page->t_button?>" class="form-control" id="basicInput" placeholder="Masukkan Text Tombol">
                    </div>
                    <div class="form-group">
                        <label for="basicInput">Hero Image</label>
                        <input name="userfile" type="file" class="form-control" id="basicInput">
                        <small style="color:red;">Abaikan jika tidak ingin mengganti foto</small>
                    </div>
                    <button name="update" class="btn btn-primary" type="submit">Simpan</button>
                </div>
                <div class="col-md-4">
                    <img class="img-thumbnail" src="upload/content/<?php echo $page->hero_image?>" width="100%" alt="" /> <strong>Hero Image</strong>
                </div>
            </div>
        </form>
    </div>
</div>

</div>
<!-- /.container-fluid -->


    