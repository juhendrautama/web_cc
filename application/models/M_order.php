<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_order extends CI_Model {

		function __construct(){
			parent::__construct();
			$this->load->database();	
		}
		
		function getorder_diajukan(){
			$query = $this->db->query("SELECT * from t_order WHERE proses!='Dibuat' ORDER BY id_order DESC"); 
			return $query;
		}
		
		function getorder($id_konsumen){
			$this->db->where('id_konsumen', $id_konsumen);
			$this->db->order_by('id_order', 'DESC');
			$query = $this->db->get('t_order'); 
			return $query;
		}
		
		function get_data_order($no_order){
			$this->db->where('no_order', $no_order);
			$this->db->join('t_konsumen', 't_konsumen.id_konsumen = t_order.id_konsumen');
			$query = $this->db->get('t_order'); 
			return $query;
		}
		function get_order_by_date(){
			$start = $_GET['start'];
			$end = $_GET['end'];
			$query = $this->db->query("SELECT * FROM t_order INNER JOIN t_konsumen ON t_konsumen.id_konsumen=t_order.id_konsumen WHERE  tgl_order BETWEEN '$start' and '$end'"); 
			return $query;
		}
		function get_detail_order($no_order){
			$this->db->where('no_order', $no_order);
			$this->db->order_by('id_list', 'ASC');
			$this->db->join('t_jenis', 't_jenis.id_jenis = t_pesanan.id_jenis');
			$query = $this->db->get('t_pesanan'); 
			return $query;
		}
		
		function delete_item($id_list){
			$this->db->where('id_list',$id_list);
			$send = $this->db->delete('t_pesanan');
			return $send;
		}
		
		function get_pembayaran($id_pembayaran){
			$this->db->where('id_pembayaran', $id_pembayaran);
			$this->db->join('t_order', 't_order.id_order = t_pembayaran.id_order');
			$query = $this->db->get('t_pembayaran'); 
			return $query;
		}
		
		function cek_pembayaran($id_order){
			$this->db->where('id_order', $id_order);
			$query = $this->db->get('t_pembayaran'); 
			return $query;
		}
		
		function get_surat_jalan($no_order){
			$this->db->where('no_order', $no_order);
			$this->db->join('t_konsumen', 't_konsumen.id_konsumen = t_surat.id_konsumen');
			$this->db->join('t_transportir', 't_transportir.id_transportir = t_surat.id_transportir');
			$query = $this->db->get('t_surat'); 
			return $query;
		}
		
		function get_surat_jalan_all(){
			$this->db->order_by('id_surat', 'ASC');
			$this->db->join('t_konsumen', 't_konsumen.id_konsumen = t_surat.id_konsumen');
			$this->db->join('t_transportir', 't_transportir.id_transportir = t_surat.id_transportir');
			$query = $this->db->get('t_surat'); 
			return $query;
		}
		
		
		
		function get_max_inv(){
			$query = $this->db->query("SELECT max(no_invoice) as max_inv FROM t_order")->row(); 
			return $query;
		}
		
		function cerate_surat($id_konsumen,$no_order){
			$id_transportir = $this->input->post('id_transportir');
			$tgl_surat      = $this->input->post('tgl_surat');
			$alamat         = $this->input->post('alamat');
			$no_pol         = $this->input->post('no_pol');
			$tujuan         = $this->input->post('tujuan');
			$berat_kosong   = $this->input->post('berat_kosong');
			//$berat_kotor    = $this->input->post('berat_kotor');
			$isi_muatan     = $this->input->post('isi_muatan');
			$sopir          = $this->input->post('sopir');
			$keterangan     = $this->input->post('keterangan');

			
			$this->db->select_max('id_surat','tinggi');
			$q_max = $this->db->get('t_surat')->row();
			$max = $q_max->tinggi+1;
			
			if ( $max <10 ){
				$max = '0000'.$max;
			}elseif ( $max >= 10 and $max  < 100 ){
				$max = '000'.$max;
			}elseif ( $max >= 100 and $max  < 1000 ){
				$max = '00'.$max;
			}elseif ( $max >= 1000 and $max  < 10000 ){
				$max = '0'.$max;
			}else{
				$max = $max;
			}
			$nomor = $max;
			
			$data       = array(
							'id_transportir' => $id_transportir,
							'id_konsumen' => $id_konsumen,
							'no_order' => $no_order,
							'nomor' => $nomor,
							'tgl_surat' => $tgl_surat,
							'alamat' => $alamat,
							'no_pol' => $no_pol,
							'tujuan' => $tujuan,
							'berat_kosong' => $berat_kosong,
						//	'berat_kotor' => $berat_kotor,
							'isi_muatan' => $isi_muatan,
							'sopir' => $sopir,
							'keterangan' => $keterangan
						);
			$this->db->insert('t_surat', $data);
			
			
					
			$data   = array(
						'proses' => 'Dikirim'
					);
					
			$this->db->where('no_order', $no_order);
			$send = $this->db->update('t_order', $data);
			
			return $send;
		}
		
		function save($id_konsumen){
			
			$this->db->where('id_konsumen', $id_konsumen);
			$this->db->select_max('id_order','tinggi');
			$q_max = $this->db->get('t_order')->row();
			$max = $q_max->tinggi+1;
			date_default_timezone_set('Asia/Jakarta');
			$tgl = date("s");
			if ( $max <10 ){
				$max = '00'.$max;
			}elseif ( $max >= 10 and $max  < 100 ){
				$max = '0'.$max;
			}else{
				$max = $max;
			}
			$no_order = 'ORD'.$max;
			
			$data       = array(
							'no_order' => $no_order,
							'no_invoice' => '-',
							'id_konsumen' => $id_konsumen,
							'tgl_invoice' => '0000-00-00',
							'tgl_order' => '0000-00-00',
							'proses' => 'Dibuat',
							'keterangan' => '-'
						);
			$send = $this->db->insert('t_order', $data);
			redirect(''.base_url().'konsumen/order/add/'.$id_konsumen.'/'.$no_order.'?save_success');
		}
		
		function update_keterangan($id_list){
			$keterangan = $this->input->post('keterangan');
			
			$data   = array(
						'keterangan' => $keterangan
					);
					
			$this->db->where('id_list', $id_list);
			$send = $this->db->update('t_pesanan', $data);
			return $send;
		}
		
		function validasi($id_pembayaran,$no_order){
			$validasi = $this->input->post('validasi');
			$keterangan_validasi = $this->input->post('keterangan_validasi');
			
			$data   = array(
						'validasi' => $validasi,
						'keterangan_validasi' => $keterangan_validasi
					);
					
			$this->db->where('id_pembayaran', $id_pembayaran);
			$this->db->update('t_pembayaran', $data);
			
			$data   = array(
						'proses' => 'Diproses'
					);
					
			$this->db->where('no_order', $no_order);
			$send = $this->db->update('t_order', $data);
			return $send;
		}
		
		function tolak_pesanan($id_order){
			$keterangan = $this->input->post('keterangan');
			
			$data   = array(
						'proses' => 'Ditolak',
						'keterangan' => $keterangan
					);
					
			$this->db->where('id_order', $id_order);
			$send = $this->db->update('t_order', $data);
			return $send;
		}
		
		function save_invoice($id_order){
			$no_invoice  = $this->input->post('no_invoice');
			$tgl_invoice = $this->input->post('tgl_invoice');
			
			$data   = array(
						'no_invoice' => $no_invoice,
						'tgl_invoice' => $tgl_invoice,
						'proses' => 'Diterima'
					);
					
			$this->db->where('id_order', $id_order);
			$send = $this->db->update('t_order', $data);
			return $send;
		}
		
		function save_add($id_konsumen,$no_order){
			$id_jenis     = $this->input->post('id_jenis');
			$jumlah       = $this->input->post('jumlah');
			
			$this->db->where('id_jenis', $id_jenis);
			$q_jenis = $this->db->get('t_jenis')->row();
			$harga = $q_jenis->harga;
			$total = $harga*$jumlah;
			date_default_timezone_set('Asia/Jakarta');
			
			$this->db->where('id_jenis', $id_jenis);
			$this->db->where('no_order', $no_order);
			$q_cek = $this->db->get('t_pesanan');
			
			if ( $q_cek->num_rows() > 0 ){
				$q_res = $q_cek->row();
				$jumlah_lama = $q_res->jumlah;
				
				$jumlah_baru = $jumlah+$jumlah_lama;
				$total_baru  = $jumlah_baru*$harga;
				
				$data       = array(
							'jumlah' => $jumlah_baru,
							'total' => $total_baru
						);
				$this->db->where('id_jenis', $id_jenis);
				$this->db->where('no_order', $no_order);
				$send = $this->db->update('t_pesanan', $data);
			}else{
				$data       = array(
							'no_order' => $no_order,
							'id_jenis' => $id_jenis,
							'jumlah' => $jumlah,
							'total' => $total,
							'keterangan' => '-'
						);
				$send = $this->db->insert('t_pesanan', $data);
			}
			return $send;
		}
		
		function update_item($id_list){
			$id_jenis     = $this->input->post('id_jenis');
			$jumlah       = $this->input->post('jumlah');
			
			$this->db->where('id_jenis', $id_jenis);
			$q_jenis = $this->db->get('t_jenis')->row();
			$harga = $q_jenis->harga;
			$total = $harga*$jumlah;
			date_default_timezone_set('Asia/Jakarta');
			
			$data   = array(
						'jumlah' => $jumlah,
						'total' => $total
					);
					
			$this->db->where('id_list', $id_list);
			$send = $this->db->update('t_pesanan', $data);
			return $send;
		}
		
		function ajukan($no_order){
			date_default_timezone_set('Asia/Jakarta');
			$tgl    	 = date("Y-m-d");
			$data       = array(
							'tgl_order' => $tgl,
							'proses' => 'Diajukan'
						);
			$this->db->where('no_order',$no_order);
			$send = $this->db->update('t_order', $data);
			return $send;
		}
		
		function diproses($id_order){
			
			$data       = array(
							'status' => 'diproses'
						);
			$this->db->where('id_order',$id_order);
			$send = $this->db->update('t_order', $data);
			return $send;
		}
		
		function upload_bukti()
		{
			$config['upload_path'] = 'upload/bukti_bayar';
			$config['allowed_types'] = 'jpg|jpeg|png|gif|bmp|webp|pdf';
			$config['max_size']	= '0';
			$config['is_image']  = '0';
			$this->load->library('upload',$config);
			$this->upload->initialize($config);
		}
		
		function save_pembayaran($id_order)
		{
			if ( ! $this->upload->do_upload('userfile')){
			$file      = "";
			echo'<script>
						alert("Ukuran file terlalu besar/jenis file tidak diizinkan")
					</script>';
			}else{
				$dt     	= $this->upload->data();
				$file  		= $dt['file_name'];
				$nama_bank		= $this->input->post('nama_bank');
				$pemilik_rekening   = $this->input->post('pemilik_rekening');
				$tgl_pembayaran   = $this->input->post('tgl_pembayaran');
				$jumlah_bayar   = $this->input->post('jumlah_bayar');
				
				$data	= array(
							'id_order' => $id_order,
							'nama_bank' => $nama_bank,
							'pemilik_rekening' => $pemilik_rekening,
							'tgl_pembayaran' => $tgl_pembayaran,
							'jumlah_bayar' => $jumlah_bayar,
							'bukti_transfer' => $file,
							'validasi' => 'Dicek',
							'keterangan_validasi' => '-'
						);
						
				$action = $this->db->insert('t_pembayaran', $data);
				return $action;
			}
		}
		
		function update_pembayaran($id_pembayaran)
		{
			if ( ! $this->upload->do_upload('userfile')){
			$file      = "";
			echo'<script>
						alert("Ukuran file terlalu besar/jenis file tidak diizinkan")
					</script>';
			}else{
				$dt     	= $this->upload->data();
				$file  		= $dt['file_name'];
				$nama_bank		= $this->input->post('nama_bank');
				$pemilik_rekening   = $this->input->post('pemilik_rekening');
				$tgl_pembayaran   = $this->input->post('tgl_pembayaran');
				$jumlah_bayar   = $this->input->post('jumlah_bayar');
				
				$data	= array(
							'nama_bank' => $nama_bank,
							'pemilik_rekening' => $pemilik_rekening,
							'tgl_pembayaran' => $tgl_pembayaran,
							'jumlah_bayar' => $jumlah_bayar,
							'bukti_transfer' => $file,
							'validasi' => 'Dicek',
							'keterangan_validasi' => '-'
						);
				$this->db->where('id_pembayaran',$id_pembayaran);	
				$action = $this->db->update('t_pembayaran', $data);
				return $action;
			}
		}
	
}