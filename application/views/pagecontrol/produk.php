
			<!-- Begin Page Content -->
            <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Kelola Produk</h1>
<?php $this->load->view('parsing/back/alert')?>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <a href="#" data-toggle="modal" data-target="#add" title="Produk Baru">
            <h6 class="m-0 font-weight-bold text-primary"><i class="fa fa-plus"></i>Produk Baru</h6>
        </a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <tr>
                            <th> No.</th>
                            <th> Nama Produk </th>
						    <th> Kategori </th>
						    <th> Foto </th>
						    <th> Option </th>
                        </tr>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <tr>
                            <th> No.</th>
                            <th> Nama Produk </th>
						    <th> Kategori </th>
						    <th> Foto </th>
						    <th> Option </th>
                        </tr>
                    </tr>
                </tfoot>
                <tbody>
                        <?php $no=0; foreach( $produk->result() as $produk ) { $no++; ?>
                        <tr>
                            <td> <?php echo $no?>.</td>
                            <td> <?php echo $produk->nama_produk ; ?> </td>
                            <td> <?php echo $produk->kategori?></td>
                            <td> <a href="pagecontrol/page/foto_produk/<?php echo $produk->id_produk?>" class="btn btn-success btn-sm"><i class="fa fa-images"></i> Foto Produk</a></td>
                            <td>
                                <a href="#" title="Edit" data-toggle="modal" data-target="#edit<?php echo $produk->id_produk?>" class="btn btn-warning btn-sm" target=""> <i class="fa fa-edit"></i> Edit</a>
                                <a href="pagecontrol/page/delete_produk/<?php echo $produk->id_produk?>" title="Hapus" onclick="return confirm('yakin hapus produk ini?')" class="btn btn-danger btn-sm" target=""> <i class="fa fa-trash"></i> Hapus</a>
                            </td>
                        </tr>
                        <div class="modal fade" id="edit<?php echo $produk->id_produk?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Mengedit Produk</h5>
                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">x</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                    <form method="post" action="pagecontrol/page/update_produk/<?php echo $produk->id_produk?>" enctype="multipart/form-data">
                                        <label>Nama Produk</label>
                                        <div class="form-group">
                                            <input type="text" name="nama_produk" value="<?php echo $produk->nama_produk?>" placeholder="Masukkan Nama Produk" required class="form-control">
                                        </div>
                                        <label>Kategori</label>
                                        <div class="form-group">
                                            <select name="kategori" required class="form-control">
                                                <option <?php if ( $produk->kategori=="Percetakan" ) { echo'Selected'; }?> value="Percetakan">Percetakan</option>
                                                <option <?php if ( $produk->kategori=="Souvenir" ) { echo'Selected'; }?> value="Souvenir">Souvenir</option>
                                                <option <?php if ( $produk->kategori=="Advertising" ) { echo'Selected'; }?> value="Advertising">Advertising</option>
                                                <option <?php if ( $produk->kategori=="Packaging" ) { echo'Selected'; }?> value="Packaging">Packaging</option>
                                                <option <?php if ( $produk->kategori=="Terbaru" ) { echo'Selected'; }?> value="Terbaru">Terbaru</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="basicInput">Deskripsi</label>
                                            <textarea name="deskripsi_produk" required  class="form-control summernote" ><?php echo $produk->deskripsi_produk?></textarea>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                        <button type="submit" name="update" class="btn btn-primary">Simpan</a>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->
<!-- Logout Modal-->
<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Menambahkan User Baru</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">x</span>
            </button>
        </div>
        <div class="modal-body">
            <form method="post" action="pagecontrol/page/save_produk" enctype="multipart/form-data">
            <label>Nama Produk</label>
            <div class="form-group">
               <input type="text" name="nama_produk" value="" placeholder="Masukkan Nama Produk" required class="form-control">
            </div>
            <label>Kategori</label>
            <div class="form-group">
                <select name="kategori" required class="form-control">
                   <option value="Percetakan">Percetakan</option>
                   <option value="Souvenir">Souvenir</option>
                   <option value="Advertising">Advertising</option>
                   <option value="Packaging">Packaging</option>
                   <option value="Terbaru">Terbaru</option>
                </select>
           </div>
           <div class="form-group">
                <label for="basicInput">Deskripsi</label>
                <textarea name="deskripsi_produk" required  class="form-control summernote" ></textarea>
            </div>
        </div>
        <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <button type="submit" name="save" class="btn btn-primary">Simpan</a>
        </div>
        </form>
    </div>
</div>
</div>


    