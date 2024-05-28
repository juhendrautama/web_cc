			<!-- Begin Page Content -->
            <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Testimoni Klien</h1>
<?php $this->load->view('parsing/back/alert')?>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
		<a href="#" data-toggle="modal" data-target="#addkategori" title="Kategori Baru">
			<h6 class="m-0 font-weight-bold text-primary"><i class="fa fa-plus"></i> Testimoni Baru</h6>
		</a>
	</div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                          <th> Nama </th>
						  <th> Pekerjaan </th>
						  <th> Image </th>
                          <th> Testimoni </th>
						  <th> Option </th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                          <th> Nama </th>
						  <th> Pekerjaan </th>
						  <th> Image </th>
                          <th> Testimoni </th>
						  <th> Option </th>
                    </tr>
                </tfoot>
                <tbody>
                        <?php $no=0; foreach( $testimoni->result() as $testimoni ) { $no++; ?>
                        <tr>
                            <td> <strong><?php echo $testimoni->nama?></strong> </td>
                            <td> <?php echo $testimoni->pekerjaan?> </td>
                            <td> <img src="upload/content/<?php echo $testimoni->image?>" width="150" alt=""> </td>
                            <td> <?php echo $testimoni->testimoni?> </td>
                            <td>
                                <a href="#" title="Edit" data-toggle="modal" data-target="#edit<?php echo $testimoni->id_testimoni?>" class="btn btn-warning btn-sm" target=""> <i class="fa fa-edit"></i> Edit</a>
                                <a href="pagecontrol/page/delete_testimoni/<?php echo $testimoni->id_testimoni?>" title="Hapus" onclick="return confirm('yakin hapus testimoni ini?')" class="btn btn-danger btn-sm"> <i class="fa fa-trash"></i> Hapus</a>
                            </td>
                        </tr>
                        <div class="modal fade" id="edit<?php echo $testimoni->id_testimoni?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Mengedit Testimoni</h5>
                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">x</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                    <form method="post" action="pagecontrol/page/update_testimoni/<?php echo $testimoni->id_testimoni?>" enctype="multipart/form-data">
                                        <label>Nama</label>
                                        <div class="form-group">
                                            <input type="text" name="nama" value="<?php echo $testimoni->nama?>" placeholder="Masukkan Nama " required class="form-control">
                                        </div>
                                        <label>Pekerjaan</label>
                                        <div class="form-group">
                                            <input type="text" name="pekerjaan" value="<?php echo $testimoni->pekerjaan?>" placeholder="Masukkan Pekerjaan " required class="form-control">
                                        </div>
                                        <label>Image</label>
                                        <div class="form-group">
                                            <input type="file" name="userfile" value="" class="form-control">
                                            <small style="color:red">Abaikan jika tidak ingin mengganti image</small>
                                        </div>
                                        <label>Testimoni</label>
                                        <div class="form-group">
                                            <input type="text" name="testimoni" value="<?php echo $testimoni->testimoni?>" placeholder="Masukkan Testimoni " required class="form-control">
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
								<h5 class="modal-title" id="exampleModalLabel">Menambahkan Project</h5>
								<button class="close" type="button" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">x</span>
								</button>
							</div>
							<div class="modal-body">
                            <form method="post" action="pagecontrol/page/save_testimoni" enctype="multipart/form-data">
                                <label>Nama</label>
                                <div class="form-group">
                                    <input type="text" name="nama" required value="" placeholder="Masukkan Nama " required class="form-control">
                                </div>
                                <label>Pekerjaan</label>
                                <div class="form-group">
                                    <input type="text" name="pekerjaan" required value="" placeholder="Masukkan Pekerjaan " required class="form-control">
                                </div>
                                <label>Image</label>
                                <div class="form-group">
                                    <input type="file" name="userfile" required value="" class="form-control">
                                    <small style="color:red">Abaikan jika tidak ingin mengganti image</small>
                                </div>
                                <label>Testimoni</label>
                                <div class="form-group">
                                    <input type="text" name="testimoni" value="" required placeholder="Masukkan Testimoni " required class="form-control">
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