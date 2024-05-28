<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_content extends CI_Model {

		function __construct(){
			parent::__construct();
			$this->load->database();	
		}
		// Halaman Beranda
		function get_beranda(){
			$this->db->where('id_content', '1');
			$query = $this->db->get('t_beranda'); 
			return $query;
		}
	
		function upload_content()
		{
			$config['upload_path'] = 'upload/content';
			$config['allowed_types'] = 'jpg|jpeg|png|gif|bmp|webp|pdf';
			$config['max_size']	= '0';
			$config['is_image']  = '0';
			$this->load->library('upload',$config);
			$this->upload->initialize($config);
		}
		

		function update_beranda(){
			if ( ! $this->upload->do_upload('userfile')){
			$file      = "";
			echo'<script>
						alert("Ukuran file terlalu besar/jenis file tidak diizinkan")
					</script>';
			}else{
				$dt     	= $this->upload->data();
				$file  		= $dt['file_name'];
				$t_h1        = $this->input->post('t_h1');
				$t_h2        = $this->input->post('t_h2');
				$t_button    = $this->input->post('t_button');
				
				$data	= array(
							't_h1' => $t_h1,
							't_h2' => $t_h2,
							't_button' => $t_button,
							'hero_image' => $file
						);
				$this->db->where('id_content','1');	
				$action = $this->db->update('t_beranda', $data);
				return $action;
			}
		}

		function update_beranda_null(){
			$t_h1        = $this->input->post('t_h1');
			$t_h2        = $this->input->post('t_h2');
			$t_button    = $this->input->post('t_button');
				
			$data	= array(
						't_h1' => $t_h1,
						't_h2' => $t_h2,
						't_button' => $t_button
			);

			$this->db->where('id_content','1');	
			$action = $this->db->update('t_beranda', $data);
			return $action;
		}


		// Halaman Penawaran
		function get_penawaran(){
			$query = $this->db->get('t_penawaran'); 
			return $query;
		}
		
		function update_penawaran($id_penawaran){
		//	$icon        = $this->input->post('icon');
			$color       = $this->input->post('color');
			$penawaran   = $this->input->post('penawaran');
			$deskripsi   = $this->input->post('deskripsi');
			$visible     = $this->input->post('visible');
				
			$data	= array(
						//'icon' => $icon,
						'color' => $color,
						'penawaran' => $penawaran,
						'deskripsi' => $deskripsi,
						'visible' => $visible
			);

			$this->db->where('id_penawaran',$id_penawaran);	
			$action = $this->db->update('t_penawaran', $data);
			return $action;
		}

		// Halaman Quote

		function get_quote(){
			$this->db->where('id_quote', '1');
			$query = $this->db->get('t_quote'); 
			return $query;
		}

		function update_quote(){
			if ( ! $this->upload->do_upload('userfile')){
			$file      = "";
			echo'<script>
						alert("Ukuran file terlalu besar/jenis file tidak diizinkan")
					</script>';
			}else{
				$dt     	= $this->upload->data();
				$file  		= $dt['file_name'];
				$quote        = $this->input->post('quote');
				$deskripsi   = $this->input->post('deskripsi');
				
				$data	= array(
							'quote' => $quote,
							'deskripsi' => $deskripsi,
							'foto' => $file
						);
						
				$this->db->where('id_quote','1');	
				$action = $this->db->update('t_quote', $data);
				return $action;
			}
		}

		function update_quote_null(){
			$quote        = $this->input->post('quote');
			$deskripsi   = $this->input->post('deskripsi');
				
			$data	= array(
				'quote' => $quote,
				'deskripsi' => $deskripsi
			);

			$this->db->where('id_quote','1');	
			$action = $this->db->update('t_quote', $data);
			return $action;

		}

		
		// Halaman Jumlah
		function get_jumlah(){
			$query = $this->db->get('t_jumlah'); 
			return $query;
		}
		
		function update_jumlah($id_penawaran){
		//	$icon        = $this->input->post('icon');
			$nama_karya  = $this->input->post('nama_karya');
			$jumlah      = $this->input->post('jumlah');
			$visible     = $this->input->post('visible');
				
			$data	= array(
						//'icon' => $icon,
						'nama_karya' => $nama_karya,
						'jumlah' => $jumlah,
						'visible' => $visible
			);

			$this->db->where('id_jumlah',$id_penawaran);	
			$action = $this->db->update('t_jumlah', $data);
			return $action;
		}

		//HALAMAN PAKET PENERBITAN

		function get_paket(){
			$query = $this->db->get('t_paket'); 
			return $query;
		}

		function update_paket($id_paket){
			if ( ! $this->upload->do_upload('userfile')){
			$file      = "";
			echo'<script>
						alert("Ukuran file terlalu besar/jenis file tidak diizinkan")
					</script>';
			}else{
				$dt     	= $this->upload->data();
				$file  		= $dt['file_name'];
				$nama_paket = $this->input->post('nama_paket');
				$harga      = $this->input->post('harga');
				$detail     = $this->input->post('detail');
				$terlaris   = $this->input->post('terlaris');
				$no_hp      = $this->input->post('no_hp');
				$visible    = $this->input->post('visible');
				
				$data	= array(
							'nama_paket' => $nama_paket,
							'harga' => $harga,
							'image' => $file,
							'detail' => $detail,
							'terlaris' => $terlaris,
							'no_hp' => $no_hp,
							'visible' => $visible
						);
				$this->db->where('id_paket',$id_paket);	
				$action = $this->db->update('t_paket', $data);
				return $action;
			}
		}

		function update_paket_null($id_paket){
			
				$nama_paket = $this->input->post('nama_paket');
				$harga      = $this->input->post('harga');
				$detail     = $this->input->post('detail');
				$terlaris   = $this->input->post('terlaris');
				$no_hp      = $this->input->post('no_hp');
				$visible    = $this->input->post('visible');
				
				$data	= array(
							'nama_paket' => $nama_paket,
							'harga' => $harga,
							'detail' => $detail,
							'terlaris' => $terlaris,
							'no_hp' => $no_hp,
							'visible' => $visible
						);
				$this->db->where('id_paket',$id_paket);	
				$action = $this->db->update('t_paket', $data);
				return $action;
			
		}

		//HALAMAN PROJECT

		function get_project(){
			$query = $this->db->get('t_project'); 
			return $query;
		}

		function save_project(){
			if ( ! $this->upload->do_upload('userfile')){
			$file      = "";
			echo'<script>
						alert("Ukuran file terlalu besar/jenis file tidak diizinkan")
					</script>';
			}else{
				$dt     	  = $this->upload->data();
				$file  		  = $dt['file_name'];
				$nama_project = $this->input->post('nama_project');
				$deskripsi    = $this->input->post('deskripsi');
				
				$data	= array(
							'nama_project' => $nama_project,
							'image' => $file,
							'deskripsi' => $deskripsi
						);	
				$action = $this->db->insert('t_project', $data);
				return $action;
			}
		}

		function update_project($id_project){
			if ( ! $this->upload->do_upload('userfile')){
			$file      = "";
			echo'<script>
						alert("Ukuran file terlalu besar/jenis file tidak diizinkan")
					</script>';
			}else{
				$dt     	  = $this->upload->data();
				$file  		  = $dt['file_name'];
				$nama_project = $this->input->post('nama_project');
				$deskripsi    = $this->input->post('deskripsi');
				$visible      = $this->input->post('visible');
				
				$data	= array(
							'nama_project' => $nama_project,
							'image' => $file,
							'deskripsi' => $deskripsi
						);	
				$this->db->where('id_project',$id_project);
				$action = $this->db->update('t_project', $data);
				return $action;
			}
		}

		function update_project_null($id_project){

			$nama_project = $this->input->post('nama_project');
			$deskripsi    = $this->input->post('deskripsi');
			$visible      = $this->input->post('visible');
				
			$data	= array(
							'nama_project' => $nama_project,
							'deskripsi' => $deskripsi
						);	

			$this->db->where('id_project',$id_project);
			$action = $this->db->update('t_project', $data);
			return $action;
			
		}

		function delete_project($id_project){
			$this->db->where('id_project', $id_project);
			$del = $this->db->delete('t_project');
			return $del;
		}

		//HALAMAN PROJECT

		function get_testimoni(){
			$query = $this->db->get('t_testimoni'); 
			return $query;
		}

		function save_testimoni(){
			if ( ! $this->upload->do_upload('userfile')){
			$file      = "";
			echo'<script>
						alert("Ukuran file terlalu besar/jenis file tidak diizinkan")
					</script>';
			}else{
				$dt     	  = $this->upload->data();
				$file  		  = $dt['file_name'];
				$nama		  = $this->input->post('nama');
				$pekerjaan    = $this->input->post('pekerjaan');
				$testimoni    = $this->input->post('testimoni');
				
				$data	= array(
							'nama' => $nama,
							'pekerjaan' => $pekerjaan,
							'image' => $file,
							'testimoni' => $testimoni
						);	
				$action = $this->db->insert('t_testimoni', $data);
				return $action;
			}
		}

		function update_testimoni($id_testimoni){
			if ( ! $this->upload->do_upload('userfile')){
			$file      = "";
			echo'<script>
						alert("Ukuran file terlalu besar/jenis file tidak diizinkan")
					</script>';
			}else{
				$dt     	  = $this->upload->data();
				$file  		  = $dt['file_name'];
				$nama		  = $this->input->post('nama');
				$pekerjaan    = $this->input->post('pekerjaan');
				$testimoni    = $this->input->post('testimoni');
				
				$data	= array(
							'nama' => $nama,
							'pekerjaan' => $pekerjaan,
							'image' => $file,
							'testimoni' => $testimoni
						);		
				$this->db->where('id_testimoni',$id_testimoni);
				$action = $this->db->update('t_testimoni', $data);
				return $action;
			}
		}

		function update_testimoni_null($id_testimoni){

			$nama		  = $this->input->post('nama');
			$pekerjaan    = $this->input->post('pekerjaan');
			$testimoni    = $this->input->post('testimoni');
				
			$data	= array(
						'nama' => $nama,
						'pekerjaan' => $pekerjaan,
						'testimoni' => $testimoni
					);		

			$this->db->where('id_testimoni',$id_testimoni);
			$action = $this->db->update('t_testimoni', $data);
			return $action;
			
		}

		function delete_testimoni($id_testimoni){
			$this->db->where('id_testimoni', $id_testimoni);
			$del = $this->db->delete('t_testimoni');
			return $del;
		}

		//HALAMAN KLIEN KAMI

		function get_klien(){
			$query = $this->db->get('t_klien'); 
			return $query;
		}

		function save_klien(){
			if ( ! $this->upload->do_upload('userfile')){
			$file      = "";
			echo'<script>
						alert("Ukuran file terlalu besar/jenis file tidak diizinkan")
					</script>';
			}else{
				$dt     	  = $this->upload->data();
				$file  		  = $dt['file_name'];

				$data	= array(
							'img_klien' => $file
						);	
				$action = $this->db->insert('t_klien', $data);
				return $action;
			}
		}

		function update_klien($id_klien){
			if ( ! $this->upload->do_upload('userfile')){
			$file      = "";
			echo'<script>
						alert("Ukuran file terlalu besar/jenis file tidak diizinkan")
					</script>';
			}else{
				$dt     	  = $this->upload->data();
				$file  		  = $dt['file_name'];
				
				$data	= array(
							'img_klien' => $file
						);		
				$this->db->where('id_klien',$id_klien);
				$action = $this->db->update('t_klien', $data);
				return $action;
			}
		}

		function delete_klien($id_klien){
			$this->db->where('id_klien', $id_klien);
			$del = $this->db->delete('t_klien');
			return $del;
		}

		//HALAMAN BLOG

		function get_blog(){
			$query = $this->db->get('t_blog'); 
			return $query;
		}

		function get_blog_limit(){
			$query = $this->db->get('t_blog'); 
			$this->db->limit(4);
			return $query;
		}

		function save_blog(){
			if ( ! $this->upload->do_upload('userfile')){
			$file      = "";
			echo'<script>
						alert("Ukuran file terlalu besar/jenis file tidak diizinkan")
					</script>';
			}else{
				$dt     	  = $this->upload->data();
				$file  		  = $dt['file_name'];
				$judul		  = $this->input->post('judul');
				$tgl		  = $this->input->post('tgl_post');
				$artikel      = $this->input->post('artikel');
				
				$data	= array(
							'judul' => $judul,
							'tgl_post' => $tgl,
							'image' => $file,
							'artikel' => $artikel
						);	

				$action = $this->db->insert('t_blog', $data);
				return $action;
			}
		}

		function get_blog_detail($id_blog){
			$this->db->where('id_blog', $id_blog);
			$query = $this->db->get('t_blog'); 
			return $query;
		}

		function update_blog($id_blog){
			if ( ! $this->upload->do_upload('userfile')){
			$file      = "";
			echo'<script>
						alert("Ukuran file terlalu besar/jenis file tidak diizinkan")
					</script>';
			}else{
				$dt     	  = $this->upload->data();
				$file  		  = $dt['file_name'];
				$tgl		  = $this->input->post('tgl_post');
				$judul		  = $this->input->post('judul');
				$artikel      = $this->input->post('artikel');
				
				$data	= array(
							'judul' => $judul,
							'tgl_post' => $tgl,
							'image' => $file,
							'artikel' => $artikel
						);	

				$this->db->where('id_blog',$id_blog);
				$action = $this->db->update('t_blog', $data);
				return $action;
			}
		}

		function update_blog_null($id_blog){
			$tgl		  = $this->input->post('tgl_post');
			$judul		  = $this->input->post('judul');
			$artikel      = $this->input->post('artikel');
				
			$data	= array(
						'judul' => $judul,
						'tgl_post' => $tgl,
						'artikel' => $artikel
					);	

			$this->db->where('id_blog',$id_blog);
			$action = $this->db->update('t_blog', $data);
			return $action;
			
		}

		function delete_blog($id_blog){
			$this->db->where('id_blog', $id_blog);
			$del = $this->db->delete('t_blog');
			return $del;
		}

		//HALAMAN TIM

		function get_tim(){
			$query = $this->db->get('t_tim'); 
			return $query;
		}

		function save_tim(){
			if ( ! $this->upload->do_upload('userfile')){
			$file      = "";
			echo'<script>
						alert("Ukuran file terlalu besar/jenis file tidak diizinkan")
					</script>';
			}else{
				$dt     	  = $this->upload->data();
				$file  		  = $dt['file_name'];
				$nama		  = $this->input->post('nama');
				$jabatan      = $this->input->post('jabatan');

				$data	= array(
							'nama' => $nama,
							'jabatan' => $jabatan,
							'image' => $file 
						);	
				$action = $this->db->insert('t_tim', $data);
				return $action;
			}
		}

		function update_tim($id_tim){
			if ( ! $this->upload->do_upload('userfile')){
			$file      = "";
			echo'<script>
						alert("Ukuran file terlalu besar/jenis file tidak diizinkan")
					</script>';
			}else{
				$dt     	  = $this->upload->data();
				$file  		  = $dt['file_name'];
				$nama		  = $this->input->post('nama');
				$jabatan      = $this->input->post('jabatan');

				$data	= array(
							'nama' => $nama,
							'jabatan' => $jabatan,
							'image' => $file
						);		
				$this->db->where('id_tim',$id_tim);
				$action = $this->db->update('t_tim', $data);
				return $action;
			}
		}

		function update_tim_null($id_tim){

			$nama		  = $this->input->post('nama');
			$jabatan      = $this->input->post('jabatan');

			$data	= array(
						'nama' => $nama,
						'jabatan' => $jabatan
					);		

			$this->db->where('id_tim',$id_tim);
			$action = $this->db->update('t_tim', $data);
			return $action;
			
		}

		function delete_tim($id_tim){
			$this->db->where('id_tim', $id_tim);
			$del = $this->db->delete('t_tim');
			return $del;
		}

		//HALAMAN PRODUK

		function get_produk(){
			$query = $this->db->get('t_produk'); 
			return $query;
		}

		function save_produk(){
			$nama_produk      = $this->input->post('nama_produk');
			$kategori         = $this->input->post('kategori');
			$deskripsi_produk = $this->input->post('deskripsi_produk');

			$data	= array(
						'nama_produk' => $nama_produk,
						'kategori' => $kategori,
						'deskripsi_produk' => $deskripsi_produk 
					);	
			$action = $this->db->insert('t_produk', $data);
			return $action;
			
		}

		function update_produk($id_produk){
			$nama_produk      = $this->input->post('nama_produk');
			$kategori         = $this->input->post('kategori');
			$deskripsi_produk = $this->input->post('deskripsi_produk');

			$data	= array(
						'nama_produk' => $nama_produk,
						'kategori' => $kategori,
						'deskripsi_produk' => $deskripsi_produk 
					);
			
			$this->db->where('id_produk',$id_produk);	
			$action = $this->db->update('t_produk', $data);
			return $action;
		}

		function delete_produk($id_produk){
			$this->db->where('id_produk', $id_produk);
			$del = $this->db->delete('t_produk');
			return $del;
		}

		function get_foto_produk($id_produk){
			$this->db->where('id_produk', $id_produk);
			$del = $this->db->get('t_foto_produk');
			return $del;
		}

		function get_detail_produk($id_produk){
			$this->db->where('id_produk', $id_produk);
			$query = $this->db->get('t_produk'); 
			return $query;
		}

		function save_foto_produk($id_produk){
			if ( ! $this->upload->do_upload('userfile')){
			$file      = "";
			echo'<script>
						alert("Ukuran file terlalu besar/jenis file tidak diizinkan")
					</script>';
			}else{
				$dt     	  = $this->upload->data();
				$file  		  = $dt['file_name'];

				$data	= array(
							'id_produk' => $id_produk,
							'foto_produk' => $file
						);	
				$action = $this->db->insert('t_foto_produk', $data);
				return $action;
			}
		}

		function delete_foto_produk($id_foto){
			$this->db->where('id_foto', $id_foto);
			$del = $this->db->delete('t_foto_produk');
			return $del;
		}

		function get_produk_bykategori($kategori){
			$this->db->where('kategori', $kategori);
			$del = $this->db->get('t_produk');
			return $del;
		}

}