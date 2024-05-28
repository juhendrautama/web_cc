
			<!-- Begin Page Content -->
            <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Foto Produk <?php echo $detail_produk->nama_produk?></h1>
<?php $this->load->view('parsing/back/alert')?>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
		<a href="#" data-toggle="modal" data-target="#addkategori" title="Foto Produk Baru">
			<h6 class="m-0 font-weight-bold text-primary"><i class="fa fa-plus"></i> Foto Produk Baru</h6>
		</a> <br>
        <a href="pagecontrol/page/produk">
           <h6 class="m-0 font-weight-bold text-primary"><i class="fa fa-arrow-left"></i> Kembali</h6>    
        </a>
	</div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                          <th> Foto Produk </th>
						  <th> Option </th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                          <th> Foto Produk </th>
						  <th> Option </th>
                    </tr>
                </tfoot>
                <tbody>
                        <?php $no=0; foreach( $foto_produk->result() as $foto_produk ) { $no++; ?>
                        <tr>
                            <td> <img src="upload/content/<?php echo $foto_produk->foto_produk?>" width="350" alt=""> </td>
                            <td>
                                <a href="pagecontrol/page/delete_foto_produk/<?php echo $detail_produk->id_produk.'/'.$foto_produk->id_foto?>" title="Hapus" onclick="return confirm('yakin hapus foto produk ini?')" class="btn btn-danger btn-sm"> <i class="fa fa-trash"></i> Hapus</a>
                            </td>
                        </tr>
                        
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
            <!-- /.container-fluid -->
                <!-- Logout Modal-->
                <div class="modal fade" id="addkategori" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"aria-hidden="true">
					<div class="modal-dialog modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Menambahkan Foto Produk</h5>
								<button class="close" type="button" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">x</span>
								</button>
							</div>
							<div class="modal-body">
                            <form method="post" action="pagecontrol/page/save_foto_produk/<?php echo $detail_produk->id_produk?>" enctype="multipart/form-data">
                        
                                <label>Foto Produk</label>
                                <div class="form-group">
                                    <input type="file" name="userfile" required value="" class="form-control">
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