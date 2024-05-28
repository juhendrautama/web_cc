<?php

	
	if ( isset($_GET['save_success']) ){
		$alert = ' <div class="alert alert-success alert-dismissible show fade">
							<strong>Berhasil !!</strong> Data disimpan
						
					</div>';
	}elseif ( isset($_GET['update_success']) ){
		$alert = ' <div class="alert alert-success alert-dismissible show fade">
							<strong>Berhasil !!</strong> Data diupdate
					</div>';
	}elseif ( isset($_GET['delete_success']) ){
		$alert = ' <div class="alert alert-success alert-dismissible show fade">
							<strong>Berhasil !!</strong> Data dihapus
					</div>';
	}elseif ( isset($_GET['item_update_success']) ){
		$alert = ' <div class="alert alert-success alert-dismissible show fade">
							<strong>Berhasil !!</strong> Item pesanan diupdate ..
					</div>';
	}elseif ( isset($_GET['item_add_success']) ){
		$alert = ' <div class="alert alert-success alert-dismissible show fade">
							<strong>Berhasil !!</strong> Item pesanan ditambahkan ..
					</div>';
	}elseif ( isset($_GET['item_del_success']) ){
		$alert = ' <div class="alert alert-success alert-dismissible show fade">
							<strong>Berhasil !!</strong> Item pesanan dihapus ..
					</div>';
	}elseif ( isset($_GET['ord_send_success']) ){
		$alert = ' <div class="alert alert-success alert-dismissible show fade">
							<strong>Berhasil !!</strong> Pesanan telah diajukan ..
					</div>';
	}elseif ( isset($_GET['ket_success']) ){
		$alert = ' <div class="alert alert-success alert-dismissible show fade">
							<strong>Berhasil !!</strong> Keterangan item pesanan telah diupdate ..
					</div>';
	}elseif ( isset($_GET['inv_success']) ){
		$alert = ' <div class="alert alert-success alert-dismissible show fade">
							<strong>Berhasil !!</strong> Faktur telah ditetapkan ..
					</div>';
	}elseif ( isset($_GET['pemb_success']) ){
		$alert = ' <div class="alert alert-success alert-dismissible show fade">
							<strong>Berhasil !!</strong> Bukti pembayaran telah dikirimkan, dan sedang divalidasi ..
					</div>';
	}elseif ( isset($_GET['pemb_validai_success']) ){
		$alert = ' <div class="alert alert-success alert-dismissible show fade">
							<strong>Berhasil !!</strong> Validasi pembayaran telah diupdate ..
					</div>';
	}elseif ( isset($_GET['sj_success']) ){
		$alert = ' <div class="alert alert-success alert-dismissible show fade">
							<strong>Berhasil !!</strong> Surat telah dibuat ..
					</div>';
	}elseif ( isset($_GET['dk_success']) ){
		$alert = ' <div class="alert alert-success alert-dismissible show fade">
							<strong>Berhasil !!</strong> Data konsumen telah diperbarui ..
					</div>';
	}elseif ( isset($_GET['daftar_success']) ){
		$alert = ' <div class="alert alert-success alert-dismissible show fade">
							<strong>Berhasil !!</strong> Pendaftaran akun berhasil, silahkan login ..
					</div>';
	}elseif ( isset($_GET['tolak_success']) ){
		$alert = ' <div class="alert alert-success alert-dismissible show fade">
							<strong>Berhasil !!</strong> Pesanan ini telah ditolak ..
					</div>';
	}
	
	else{
		$alert = '';
	}
	echo $alert;
	
	
?>