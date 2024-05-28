			<!-- Begin Page Content -->
            <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Klien Kami</h1>
<?php $this->load->view('parsing/back/alert')?>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
		<a href="#" data-toggle="modal" data-target="#addkategori" title="Kategori Baru">
			<h6 class="m-0 font-weight-bold text-primary"><i class="fa fa-plus"></i> Klien Baru</h6>
		</a>
	</div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                          <th> Klien </th>
						  <th> Option </th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                          <th> Klien </th>
						  <th> Option </th>
                    </tr>
                </tfoot>
                <tbody>
                        <?php $no=0; foreach( $klien->result() as $klien ) { $no++; ?>
                        <tr>
                            <td> <img src="upload/content/<?php echo $klien->img_klien?>" width="150" alt=""> </td>
                            <td>
                                <a href="#" title="Edit" data-toggle="modal" data-target="#edit<?php echo $klien->id_klien?>" class="btn btn-warning btn-sm" target=""> <i class="fa fa-edit"></i> Edit</a>
                                <a href="pagecontrol/page/delete_klien/<?php echo $klien->id_klien?>" title="Hapus" onclick="return confirm('yakin hapus klien ini?')" class="btn btn-danger btn-sm"> <i class="fa fa-trash"></i> Hapus</a>
                            </td>
                        </tr>
                        <div class="modal fade" id="edit<?php echo $klien->id_klien?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Mengedit Klien</h5>
                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">x</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                    <form method="post" action="pagecontrol/page/update_klien/<?php echo $klien->id_klien?>" enctype="multipart/form-data">
                                        <label>Logo Klien</label>
                                        <div class="form-group">
                                            <input type="file" name="userfile" value="" class="form-control">
                                            <small style="color:red">Abaikan jika tidak ingin mengganti image</small>
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
                <div class="modal fade" id="addkategori" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"aria-hidden="true">
					<div class="modal-dialog modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Menambahkan Klien</h5>
								<button class="close" type="button" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">x</span>
								</button>
							</div>
							<div class="modal-body">
                            <form method="post" action="pagecontrol/page/save_klien" enctype="multipart/form-data">
                        
                                <label>Image</label>
                                <div class="form-group">
                                    <input type="file" name="userfile" required value="" class="form-control">
                                    <small style="color:red">Abaikan jika tidak ingin mengganti image</small>
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