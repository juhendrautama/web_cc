			<!-- Begin Page Content -->
            <div class="container-fluid">

<!-- Page Heading -->
<?php $this->load->view('parsing/back/alert')?>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
         <h6 class="m-0 font-weight-bold text-primary">Halaman Paket</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                          <th> Nama Paket </th>
						  <th> Harga </th>
						  <th> Image </th>
                          <th> Terlaris </th>
                          <th> No. HP </th>
                          <th> Tampil</th>
						  <th> Option </th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                          <th> Nama Paket </th>
						  <th> Harga </th>
						  <th> Image </th>
                          <th> Terlaris </th>
                          <th> No. HP </th>
                          <th> Tampil</th>
						  <th> Option </th>
                    </tr>
                </tfoot>
                <tbody>
                        <?php $no=0; foreach( $paket->result() as $paket ) { $no++; ?>
                        <tr>
                            <td> <strong><?php echo $paket->nama_paket?></strong> </td>
                            <td> <?php echo $paket->harga?> </td>
                            <td> <img src="upload/content/<?php echo $paket->image?>" width="50" alt=""> </td>
                            <td> 
                                    <?php 
                                        if ( $paket->terlaris=="Y" ){
                                                echo'<span class="badge badge-primary">Ya</span>';
                                            }elseif ( $paket->terlaris=="N" ){
                                                echo'<span class="badge badge-danger">Tidak</span>';
                                            }
                                    ?>
                            </td>
                            <td> <?php echo $paket->no_hp?> </td>
                            <td> <?php 
                                    if ( $paket->visible=="Y" ){
                                            echo'<span class="badge badge-primary">Ya</span>';
                                        }elseif ( $paket->visible=="N" ){
                                            echo'<span class="badge badge-danger">Tidak</span>';
                                        }
                                    ?>
                            </td>
                            <td>
                                <a href="#" title="Edit" data-toggle="modal" data-target="#edit<?php echo $paket->id_paket?>" class="btn btn-warning btn-sm" target=""> <i class="fa fa-edit"></i> Edit</a>
                            </td>
                        </tr>
                        <div class="modal fade" id="edit<?php echo $paket->id_paket?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Mengedit Paket</h5>
                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">x</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                    <form method="post" action="pagecontrol/page/update_paket/<?php echo $paket->id_paket?>" enctype="multipart/form-data">
                                        <label>Nama Paket</label>
                                        <div class="form-group">
                                            <input type="text" name="nama_paket" value="<?php echo $paket->nama_paket?>" placeholder="Masukkan Nama Paket" required class="form-control">
                                        </div>
                                        <label>Harga</label>
                                        <div class="form-group">
                                            <input type="number" name="harga" value="<?php echo $paket->harga?>" placeholder="Masukkan Harga Paket" required class="form-control">
                                        </div>
                                        <label>Detail</label>
                                        <div class="form-group">
                                            <textarea name="detail" rows="5" id="summernote" class="form-control summernote"><?php echo $paket->detail?></textarea>
                                        </div>
                                        <label>Terlaris</label>
                                        <div class="form-group">
                                            <select name="terlaris" required class="form-control">
                                                <option <?php if ( $paket->terlaris=="Y" ) { echo'Selected'; }?> value="Y">Ya</option>
                                                <option <?php if ( $paket->terlaris=="N" ) { echo'Selected'; }?> value="N">Tidak</option>
                                            </select>
                                        </div>
                                        <label>No. HP</label>
                                        <div class="form-group">
                                            <input type="number" name="no_hp" value="<?php echo $paket->no_hp?>" placeholder="Masukkan Nomor HP" required class="form-control">
                                        </div>
                                        <label>Tampil</label>
                                        <div class="form-group">
                                            <select name="visible" required class="form-control">
                                                <option <?php if ( $paket->visible=="Y" ) { echo'Selected'; }?> value="Y">Ya</option>
                                                <option <?php if ( $paket->visible=="N" ) { echo'Selected'; }?> value="N">Tidak</option>
                                            </select>
                                        </div>
                                        <label>Image</label>
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