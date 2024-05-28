			<!-- Begin Page Content -->
            <div class="container-fluid">

<!-- Page Heading -->

<?php $this->load->view('parsing/back/alert')?>
<!-- DataTales Example -->
<div class="card shadow mb-4">
<div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Halaman Quote</h6>
    </div>
    <div class="card-body">
        <form method="post" enctype="multipart/form-data" action="pagecontrol/page/update_quote" >
            <div class="row">
                <div class="col-md-8">
                    <div class="form-group">
                        <label for="basicInput">Quote</label>
                        <input name="quote" required type="text" value="<?php echo $quote->quote?>" class="form-control" id="basicInput" placeholder="Masukkan Quote">
                    </div>
                    <div class="form-group">
                        <label for="basicInput">Deskripsi</label>
                        <textarea name="deskripsi" id="summernote" class="form-control summernote"  rows="40"><?php echo $quote->deskripsi?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="basicInput">Foto</label>
                        <input name="userfile" type="file" class="form-control" id="basicInput">
                        <small style="color:red;">Abaikan jika tidak ingin mengganti foto</small>
                    </div>
                    <button name="update" class="btn btn-primary" type="submit">Simpan</button>
                </div>
                <div class="col-md-4">
                    <img class="img-thumbnail" src="upload/content/<?php echo $quote->foto?>" width="100%" alt="" />
                </div>
            </div>
        </form>
    </div>
</div>

</div>
<!-- /.container-fluid -->


    