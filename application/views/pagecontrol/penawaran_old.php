 <!-- partial -->
 <div class="main-panel">
		  <div class="content-wrapper">
		
			<?php $this->load->view('parsing/back/alert')?>
			<div class="row">
			  <div class="col-lg-12 grid-margin stretch-card">
				<div class="card">
				  <div class="card-body">
					<h4 class="card-title">Halaman Penawaran</h4>
					<table class="table table-striped">
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
						  <td width="20">
						 	<a class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $penawaran->id_penawaran?>" href="#"><i class="fa fa-edit"></i></a>
						  </td>
						</tr>
						
						<!-- Modal -->
						<div class="modal fade" id="exampleModal<?php echo $penawaran->id_penawaran?>" tabindex="-1" aria-labelledby="exampleModalLabel<?php echo $penawaran->id_penawaran?>" aria-hidden="true">
						  <div class="modal-dialog">
							<div class="modal-content">
							  <div class="modal-header bg-primary">
								<h5 class="modal-title" id="exampleModalLabel">Edit Penawaran</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
							  </div>
							  <div class="modal-body">
								<form class="forms-sample" method="post" action="pagecontrol/page/update_penawaran/<?php echo $penawaran->id_penawaran?>">
									<!--<div class="form-group">
										<label for="exampleInputUsername1">Icon</label>
										<input type="text" name="icon" class="form-control" value="<?php // echo $penawaran->icon?>" id="exampleInputUsername1" placeholder="Username">
									</div>-->
                                    <div class="form-group">
										<label for="exampleInputConfirmPassword1">Warna</label>
										<select name="color" class="form-control">
											<option <?php if ( $penawaran->color=="blue" ) { echo'Selected'; }?> value="blue">Biru</option>
                                            <option <?php if ( $penawaran->color=="green" ) { echo'Selected'; }?> value="green">Hijau</option>
                                            <option <?php if ( $penawaran->color=="yellow" ) { echo'Selected'; }?> value="yellow">Kuning</option>
                                            <option <?php if ( $penawaran->color=="red" ) { echo'Selected'; }?> value="red">Merah</option>
                                            <option <?php if ( $penawaran->color=="purple" ) { echo'Selected'; }?> value="purple">Ungu</option>
                                            <option <?php if ( $penawaran->color=="orange" ) { echo'Selected'; }?> value="orange">Oranye</option>
										</select>
									</div>
									<div class="form-group">
										<label for="exampleInputConfirmPassword1">Penawaran</label>
										<input type="text" name="penawaran" class="form-control" value="<?php echo $penawaran->penawaran?>" id="exampleInputConfirmPassword1" placeholder="Penawaran">
									</div>
									<div class="form-group">
										<label for="exampleInputConfirmPassword1">Deskripsi</label>
										<textarea name="deskripsi" rows="10" class="form-control"><?php echo $penawaran->deskripsi?></textarea>
									</div>
									<div class="form-group">
										<label for="exampleInputConfirmPassword1">Tampil</label>
										<select name="visible" class="form-control">
											<option <?php if ( $penawaran->visible=="Y" ) { echo'Selected'; }?> value="Y">Ya</option>
											<option <?php if ( $penawaran->visible=="N" ) { echo'Selected'; }?> value="N">Tidak</option>
										</select>
									</div>
							  </div>
							  <div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
								<button type="submit" name="update" class="btn btn-primary">Simpan</button>
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
		  </div>
		  <!-- content-wrapper ends -->
		
	<!-- Button trigger modal -->