			<!-- Begin Page Content -->
            <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Kelola User</h1>
<?php $this->load->view('parsing/back/alert')?>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <a href="#" data-toggle="modal" data-target="#add" title="Kategori Baru">
            <h6 class="m-0 font-weight-bold text-primary"><i class="fa fa-plus"></i> User Baru</h6>
        </a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <tr>
                            <th> No.</th>
                            <th> Username </th>
						    <th> Nama Lengkap </th>
						    <th> Akses </th>
						    <th> Foto </th>
						    <th> Option </th>
                        </tr>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <tr>
                            <th> No.</th>
                            <th> Username </th>
						    <th> Nama Lengkap </th>
						    <th> Akses </th>
						    <th> Foto </th>
						    <th> Option </th>
                        </tr>
                    </tr>
                </tfoot>
                <tbody>
                        <?php $no=0; foreach( $user->result() as $user ) { $no++; ?>
                        <tr>
                            <td> <?php echo $no?>.</td>
                            <td> <?php echo $user->username ; ?> </td>
                            <td> <?php echo $user->nama_lengkap?></td>
                            <td> <?php 
								if ( $user->akses=="administrator" ){
										echo'<span class="badge badge-primary">Admin</span>';
									}elseif ( $user->akses=="admin web" ){
										echo'<span class="badge badge-success">Admin Web</span>';
									}
								?>
						    </td>
						    <td> <img src="upload/user/<?php echo $user->foto?>" width="80"  alt="" /> </td>
                            <td>
                                <a href="#" title="Edit" data-toggle="modal" data-target="#edit<?php echo $user->id_user?>" class="btn btn-warning btn-sm" target=""> <i class="fa fa-edit"></i> Edit</a>
                                <a href="pagecontrol/user/delete/<?php echo $user->id_user?>" title="Hapus" onclick="return confirm('yakin hapus user ini?')" class="btn btn-danger btn-sm" target=""> <i class="fa fa-trash"></i> Hapus</a>
                            </td>
                        </tr>
                        <div class="modal fade" id="edit<?php echo $user->id_user?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Mengedit User</h5>
                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">x</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                    <form method="post" action="pagecontrol/user/update2/<?php echo $user->id_user?>" enctype="multipart/form-data">
                                        <label>Username</label>
                                        <div class="form-group">
                                            <input type="text" name="username" value="<?php echo $user->username?>" placeholder="Masukkan Username" required class="form-control">
                                        </div>
                                        <label>Password</label>
                                        <div class="form-group">
                                            <input type="password" name="password" value="" placeholder="Masukkan Password" class="form-control">
                                        </div>
                                        <label>Nama Lengkap</label>
                                        <div class="form-group">
                                            <input type="text" name="nama_lengkap" value="<?php echo $user->nama_lengkap?>" placeholder="Masukkan Nama Lengkap" required class="form-control">
                                        </div>
                                        <label>Akses</label>
                                        <div class="form-group">
                                            <select name="akses" required class="form-control">
                                                <option <?php if ( $user->akses=="administrator" ) { echo'Selected'; }?> value="administrator">Administrator</option>
											    <option <?php if ( $user->akses=="admin web" ) { echo'Selected' ;}?> value="admin web">Admin Web</option>
                                            </select>
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
        <form method="post" action="pagecontrol/user/save" enctype="multipart/form-data">
            <label>Username</label>
            <div class="form-group">
                <input type="text" name="username" value="" placeholder="Masukkan Username" required class="form-control">
            </div>
            <label>Password</label>
            <div class="form-group">
                <input type="password" name="password" value="" placeholder="Masukkan Password" class="form-control">
            </div>
            <label>Nama Lengkap</label>
            <div class="form-group">
                <input type="text" name="nama_lengkap" value="" placeholder="Masukkan Nama Lengkap" required class="form-control">
            </div>
            <label>Akses</label>
            <div class="form-group">
                <select name="akses" required class="form-control">
                    <option value="administrator">Administrator</option>
					<option value="admin web">Admin Web</option>
                </select>
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


    