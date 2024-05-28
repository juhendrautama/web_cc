			<!-- Begin Page Content -->
            <div class="container-fluid">

<!-- Page Heading -->
<?php $this->load->view('parsing/back/alert')?>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
         <h6 class="m-0 font-weight-bold text-primary">Halaman Penawaran</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                          <th> Penawaran </th>
						  <!-- <th> Icon </th>-->
						  <th> Warna </th>
						  <th> Deskripsi </th>
                          <th> Tampil </th>
						  <th> Option </th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                          <th> Penawaran </th>
						  <!-- <th> Icon </th>-->
						  <th> Warna </th>
						  <th> Deskripsi </th>
                          <th> Tampil </th>
						  <th> Option </th>
                    </tr>
                </tfoot>
                <tbody>
                        <?php $no=0; foreach( $penawaran->result() as $penawaran ) { $no++; ?>
                        <tr>
                            <td> <strong><?php echo $penawaran->penawaran?></strong> </td>
                            <!-- <td> <?php //echo $penawaran->icon?> </td>-->
                            <td>
                                    <?php if ( $penawaran->color=="blue" ) { echo'Biru'; }?>
                                    <?php if ( $penawaran->color=="green" ) { echo'Hijau'; }?>
                                    <?php if ( $penawaran->color=="yellow" ) { echo'Kuning'; }?>
                                    <?php if ( $penawaran->color=="red" ) { echo'Merah'; }?>
                                    <?php if ( $penawaran->color=="purple" ) { echo'Ungu'; }?>
                                    <?php if ( $penawaran->color=="orange" ) { echo'Oranye'; }?>
                            </td>
                            <td width="20%"> <?php echo substr($penawaran->deskripsi,0,80)?> . . .</td>
                            <td> <?php 
                                    if ( $penawaran->visible=="Y" ){
                                            echo'<span class="badge badge-primary">Ya</span>';
                                        }elseif ( $penawaran->visible=="N" ){
                                            echo'<span class="badge badge-danger">Tidak</span>';
                                        }
                                    ?>
                            </td>
                            <td>
                                <a href="#" title="Edit" data-toggle="modal" data-target="#edit<?php echo $penawaran->id_penawaran?>" class="btn btn-warning btn-sm" target=""> <i class="fa fa-edit"></i> Edit</a>
                            </td>
                        </tr>
                        <div class="modal fade" id="edit<?php echo $penawaran->id_penawaran?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Mengedit Penawaran</h5>
                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">x</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                    <form method="post" action="pagecontrol/page/update_penawaran/<?php echo $penawaran->id_penawaran?>" enctype="multipart/form-data">
                                        <!--<label>Icon</label>
                                        <div class="form-group">
                                            <input type="text" name="icon" value="<?php // echo $penawaran->icon?>" placeholder="Masukkan Kode Icon" required class="form-control">
                                        </div>-->
                                        <label>Warna</label>
                                        <div class="form-group">
                                            <select name="color" required class="form-control">
                                                <option <?php if ( $penawaran->color=="blue" ) { echo'Selected'; }?> value="blue">Biru</option>
                                                <option <?php if ( $penawaran->color=="green" ) { echo'Selected'; }?> value="green">Hijau</option>
                                                <option <?php if ( $penawaran->color=="yellow" ) { echo'Selected'; }?> value="yellow">Kuning</option>
                                                <option <?php if ( $penawaran->color=="red" ) { echo'Selected'; }?> value="red">Merah</option>
                                                <option <?php if ( $penawaran->color=="purple" ) { echo'Selected'; }?> value="purple">Ungu</option>
                                                <option <?php if ( $penawaran->color=="orange" ) { echo'Selected'; }?> value="orange">Oranye</option>
                                            </select>
                                        </div>
                                        <label>Penawaran</label>
                                        <div class="form-group">
                                            <input type="text" name="penawaran" value="<?php echo $penawaran->penawaran?>" placeholder="Masukkan Penawaran" class="form-control">
                                        </div>
                                        <label>Deskripsi</label>
                                        <div class="form-group">
                                        <textarea name="deskripsi" rows="5" class="form-control"><?php echo $penawaran->deskripsi?></textarea>
                                        </div>
                                        <label>Tampil</label>
                                        <div class="form-group">
                                            <select name="visible" required class="form-control">
                                                <option <?php if ( $penawaran->visible=="Y" ) { echo'Selected'; }?> value="Y">Ya</option>
                                                <option <?php if ( $penawaran->visible=="N" ) { echo'Selected'; }?> value="N">Tidak</option>
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


    