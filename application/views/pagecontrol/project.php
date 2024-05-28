			<!-- Begin Page Content -->
            <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Project Kami</h1>
<?php $this->load->view('parsing/back/alert')?>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
		<a href="#" data-toggle="modal" data-target="#addkategori" title="Kategori Baru">
			<h6 class="m-0 font-weight-bold text-primary"><i class="fa fa-plus"></i> Project Baru</h6>
		</a>
	</div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                          <th> Nama Project </th>
						  <th> Image </th>
						  <th> Deskripsi </th>
						  <th> Option </th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                          <th> Nama Project </th>
						  <th> Image </th>
						  <th> Deskripsi </th>
						  <th> Option </th>
                    </tr>
                </tfoot>
                <tbody>
                        <?php $no=0; foreach( $project->result() as $project ) { $no++; ?>
                        <tr>
                            <td> <strong><?php echo $project->nama_project?></strong> </td>
                            <td> <img src="upload/content/<?php echo $project->image?>" width="150" alt=""> </td>
                            <td width="20%"> <?php echo $project->deskripsi?> . . .</td>
                            <td>
                                <a href="#" title="Edit" data-toggle="modal" data-target="#edit<?php echo $project->id_project?>" class="btn btn-warning btn-sm" target=""> <i class="fa fa-edit"></i> Edit</a>
                                <a href="pagecontrol/page/delete_project/<?php echo $project->id_project?>" title="Hapus" onclick="return confirm('yakin hapus project ini?')" class="btn btn-danger btn-sm"> <i class="fa fa-trash"></i> Hapus</a>
                            </td>
                        </tr>
                        <div class="modal fade" id="edit<?php echo $project->id_project?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Mengedit Project</h5>
                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">x</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                    <form method="post" action="pagecontrol/page/update_project/<?php echo $project->id_project?>" enctype="multipart/form-data">
                                        <label>Nama Project</label>
                                        <div class="form-group">
                                            <input type="text" name="nama_project" value="<?php echo $project->nama_project?>" placeholder="Masukkan Nama Project" required class="form-control">
                                        </div>
                                        <label>Image</label>
                                        <div class="form-group">
                                            <input type="file" name="userfile" value="" class="form-control">
                                            <small style="color:red">Abaikan jika tidak ingin mengganti image</small>
                                        </div>
                                        <label>Detail</label>
                                        <div class="form-group">
                                            <textarea name="deskripsi" rows="5" id="summernote" class="form-control summernote"><?php echo $project->deskripsi?></textarea>
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
                            <form method="post" action="pagecontrol/page/save_project" enctype="multipart/form-data">
                                <label>Nama Project</label>
                                <div class="form-group">
                                    <input type="text" name="nama_project" value="" placeholder="Masukkan Nama Project" required class="form-control">
                                </div>
                                <label>Image</label>
                                <div class="form-group">
                                    <input type="file" name="userfile" value="" class="form-control">
                                    <small style="color:red">Abaikan jika tidak ingin mengganti image</small>
                                </div>
                                <label>Detail</label>
                                <div class="form-group">
                                    <textarea name="deskripsi" rows="5" id="summernote" class="form-control summernote"></textarea>
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