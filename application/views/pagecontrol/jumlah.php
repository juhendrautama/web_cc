			<!-- Begin Page Content -->
            <div class="container-fluid">

<!-- Page Heading -->
<?php $this->load->view('parsing/back/alert')?>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
         <h6 class="m-0 font-weight-bold text-primary">Halaman Jumlah Karya</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                          <th> Nama Karya </th>
						  <!-- <th> Icon </th>-->
						  <th> Jumlah </th>
                          <th> Tampil </th>
						  <th> Option </th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                          <th> Nama Karya </th>
						  <!-- <th> Icon </th>-->
						  <th> Jumlah </th>
                          <th> Tampil </th>
						  <th> Option </th>
                    </tr>
                </tfoot>
                <tbody>
                        <?php $no=0; foreach( $jumlah->result() as $jumlah ) { $no++; ?>
                        <tr>
                            <td> <strong><?php echo $jumlah->nama_karya?></strong> </td>
                            <!-- <td> <?php //echo $penawaran->icon?> </td>-->
                            <td> <?php echo $jumlah->jumlah?></td>
                            <td> <?php 
                                    if ( $jumlah->visible=="Y" ){
                                            echo'<span class="badge badge-primary">Ya</span>';
                                        }elseif ( $jumlah->visible=="N" ){
                                            echo'<span class="badge badge-danger">Tidak</span>';
                                        }
                                    ?>
                            </td>
                            <td>
                                <a href="#" title="Edit" data-toggle="modal" data-target="#edit<?php echo $jumlah->id_jumlah?>" class="btn btn-warning btn-sm" target=""> <i class="fa fa-edit"></i> Edit</a>
                            </td>
                        </tr>
                        <div class="modal fade" id="edit<?php echo $jumlah->id_jumlah?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Mengedit Jumlah Karya</h5>
                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">x</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                    <form method="post" action="pagecontrol/page/update_jumlah/<?php echo $jumlah->id_jumlah?>" enctype="multipart/form-data">
                                        <!--<label>Icon</label>
                                        <div class="form-group">
                                            <input type="text" name="icon" value="<?php // echo $jumlah->icon?>" placeholder="Masukkan Kode Icon" required class="form-control">
                                        </div>-->
                                        <label>Nama Karya</label>
                                        <div class="form-group">
                                            <input type="text" required name="nama_karya" value="<?php echo $jumlah->nama_karya?>" placeholder="Masukkan Nama Karya" class="form-control">
                                        </div>
                                        <label>Jumlah</label>
                                        <div class="form-group">
                                            <input type="number" required name="jumlah" value="<?php echo $jumlah->jumlah?>" placeholder="Masukkan Jumlah Karya" class="form-control">
                                        </div>
                                        <label>Tampil</label>
                                        <div class="form-group">
                                            <select name="visible" required class="form-control">
                                                <option <?php if ( $jumlah->visible=="Y" ) { echo'Selected'; }?> value="Y">Ya</option>
                                                <option <?php if ( $jumlah->visible=="N" ) { echo'Selected'; }?> value="N">Tidak</option>
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


    