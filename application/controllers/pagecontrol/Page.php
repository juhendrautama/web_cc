<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('m_user');
        $this->load->model('m_content');
		$this->load->library('user_agent');
		if ( empty($_SESSION['id_user']) or empty($_SESSION['akses'])){
			redirect(''.base_url().'autentikasi/logout');
		}
	}

	public function index(){
		redirect('pagecontrol/dashboard');
	}

   // Halaman Beranda 

    public function beranda(){
		$data['title']   = 'Halaman Beranda';
		$data['content'] = 'pagecontrol/beranda';
		$data['page']= $this->m_content->get_beranda()->row();
		$this->load->view('back',$data);
	}
	
	public function update_beranda(){
		if ( isset($_POST['update'])){
			if ( empty($_FILES['userfile']['tmp_name']) ){
				$this->m_content->update_beranda_null();
			}else{
				$this->m_content->upload_content();
				$this->m_content->update_beranda();
			}		
			redirect(''.base_url().'pagecontrol/page/beranda?update_success');
		}else{
			redirect('pagecontrol/dashboard');
		}
	}
	
	public function update2($id_user){
		if ( isset($_POST['update'])){
			$this->m_user->update2($id_user);	
			redirect(''.base_url().'pagecontrol/user/data?update_success');
		}else{
			redirect('pagecontrol/dashboard');
		}
	}
	
	public function save(){
		if ( isset($_POST['save'])){
			$this->m_user->save();	
			redirect(''.base_url().'pagecontrol/user/data?save_success');
		}else{
			redirect('pagecontrol/dashboard');
		}
	}
	
	public function delete($id_user){
		if ( !empty($id_user)){
			$this->m_user->delete($id_user);	
			redirect(''.base_url().'pagecontrol/user/data?delete_success');
		}else{
			redirect('pagecontrol/dashboard');
		}
	}
	
	public function data(){
		if ($_SESSION['akses']!="administrator"){
			redirect(''.base_url().'pagecontrol/dashboard');
		}else{
			$data['title']   = 'Mengelola User';
			$data['content'] = 'pagecontrol/user_all';
			$data['user']= $this->m_user->getuser_all();
			$this->load->view('back',$data);
		}
	}

	//Halaman Penawaran

	public function penawaran(){
		$data['title']     = 'Halaman Penawaran';
		$data['content']   = 'pagecontrol/penawaran';
		$data['penawaran'] = $this->m_content->get_penawaran();
		$this->load->view('back',$data);
	}

	public function update_penawaran($id_penawaran){
		if ( isset($_POST['update'])){
			$this->m_content->update_penawaran($id_penawaran);	
			redirect(''.base_url().'pagecontrol/page/penawaran?update_success');
		}else{
			redirect('pagecontrol/dashboard');
		}
	}

	//Quote

	public function quote(){
		$data['title']   = 'Halaman Quote';
		$data['content'] = 'pagecontrol/quote';
		$data['quote']= $this->m_content->get_quote()->row();
		$this->load->view('back',$data);
	}

	public function update_quote(){
		if ( isset($_POST['update'])){
			if ( empty($_FILES['userfile']['tmp_name']) ){
				$this->m_content->update_quote_null();
			}else{
				$this->m_content->upload_content();
				$this->m_content->update_quote();
			}	
			redirect(''.base_url().'pagecontrol/page/quote?update_success');
		}else{
			redirect('pagecontrol/dashboard');
		}
	}

	//Halaman Jumlah Karya

	public function jumlah(){
		$data['title']     = 'Halaman Jumlah Karya';
		$data['content']   = 'pagecontrol/jumlah';
		$data['jumlah'] = $this->m_content->get_jumlah();
		$this->load->view('back',$data);
	}

	public function update_jumlah($id_jumlah){
		if ( isset($_POST['update'])){
			$this->m_content->update_jumlah($id_jumlah);	
			redirect(''.base_url().'pagecontrol/page/jumlah?update_success');
		}else{
			redirect('pagecontrol/dashboard');
		}
	}

	// IMAGE CONTROLLER
	public function upload_image()
	{
		// Konfigurasi upload gambar
		$config['upload_path'] = './uploads/'; // Lokasi folder untuk menyimpan gambar
		$config['allowed_types'] = 'gif|jpg|png'; // Jenis file yang diizinkan untuk diunggah
		$config['max_size'] = 12048; // Ukuran maksimum file (dalam kilobita)

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('file')) {
			// Jika upload berhasil, ambil informasi file
			$data = $this->upload->data();
			$url = base_url('uploads/' . $data['file_name']); // URL gambar yang diunggah
			echo json_encode(['url' => $url]);
		} else {
			// Jika upload gagal, kirim pesan kesalahan
			$error = $this->upload->display_errors('', '');
			echo json_encode(['error' => $error]);
		}
	}

	public function delete_image()
	{
		$src = $this->input->post('src');
		$file_name = basename($src);
		$file_path = './uploads/' . $file_name;

		if (file_exists($file_path)) {
			unlink($file_path);
			echo "File deleted successfully";
		} else {
			echo "File not found";
		}
	}

	//HALAMAN PAKET PENERBITAN

	public function paket(){
		$data['title']     = 'Halaman Paket Penerbitan';
		$data['content']   = 'pagecontrol/paket';
		$data['paket']     = $this->m_content->get_paket();
		$this->load->view('back',$data);
	}

	public function update_paket($id_paket){
		if ( isset($_POST['update'])){
			if ( empty($_FILES['userfile']['tmp_name']) ){
				$this->m_content->update_paket_null($id_paket);
			}else{
				$this->m_content->upload_content($id_paket);
				$this->m_content->update_paket($id_paket);
			}	
			redirect(''.base_url().'pagecontrol/page/paket?update_success');
		}else{
			redirect('pagecontrol/dashboard');
		}
	}

	//HALAMAN PROJECT

	public function project(){
		$data['title']     = 'Halaman Project Kami';
		$data['content']   = 'pagecontrol/project';
		$data['project']     = $this->m_content->get_project();
		$this->load->view('back',$data);
	}

	public function save_project(){
		if ( isset($_POST['save'])){
			$this->m_content->upload_content();
			$this->m_content->save_project();
			redirect(''.base_url().'pagecontrol/page/project?save_success');
		}else{
			redirect('pagecontrol/dashboard');
		}
	}

	public function update_project($id_project){
		if ( isset($_POST['update'])){
			if ( empty($_FILES['userfile']['tmp_name']) ){
				$this->m_content->update_project_null($id_project);
			}else{
				$this->m_content->upload_content($id_project);
				$this->m_content->update_project($id_project);
			}	
			redirect(''.base_url().'pagecontrol/page/project?update_success');
		}else{
			redirect('pagecontrol/dashboard');
		}
	}

	public function delete_project($id_project){
			if (!empty($id_project)) {
				$this->m_content->delete_project($id_project);
				redirect(''.base_url().'pagecontrol/page/project?update_success');
			}else{
				redirect(''.base_url().'pagecontrol/page/project?nullid');
			}
	}

	//HALAMAN TESTIMONI

	public function testimoni(){
		$data['title']     = 'Halaman Testimoni';
		$data['content']   = 'pagecontrol/testimoni';
		$data['testimoni']     = $this->m_content->get_testimoni();
		$this->load->view('back',$data);
	}

	public function save_testimoni(){
		if ( isset($_POST['save'])){
			$this->m_content->upload_content();
			$this->m_content->save_testimoni();
			redirect(''.base_url().'pagecontrol/page/testimoni?save_success');
		}else{
			redirect('pagecontrol/dashboard');
		}
	}

	public function update_testimoni($id_testimoni){
		if ( isset($_POST['update'])){
			if ( empty($_FILES['userfile']['tmp_name']) ){
				$this->m_content->update_testimoni_null($id_testimoni);
			}else{
				$this->m_content->upload_content($id_testimoni);
				$this->m_content->update_testimoni($id_testimoni);
			}	
			redirect(''.base_url().'pagecontrol/page/testimoni?update_success');
		}else{
			redirect('pagecontrol/dashboard');
		}
	}

	public function delete_testimoni($id_testimoni){
			if (!empty($id_testimoni)) {
				$this->m_content->delete_testimoni($id_testimoni);
				redirect(''.base_url().'pagecontrol/page/testimoni?delete_success');
			}else{
				redirect(''.base_url().'pagecontrol/page/testimoni?nullid');
			}
	}

	//HALAMAN KLIEN

	public function klien(){
		$data['title']     = 'Halaman Klien Kami';
		$data['content']   = 'pagecontrol/klien';
		$data['klien']     = $this->m_content->get_klien();
		$this->load->view('back',$data);
	}

	public function save_klien(){
		if ( isset($_POST['save'])){
			$this->m_content->upload_content();
			$this->m_content->save_klien();
			redirect(''.base_url().'pagecontrol/page/klien?save_success');
		}else{
			redirect('pagecontrol/dashboard');
		}
	}

	public function update_klien($id_klien){
		if ( isset($_POST['update'])){
			
			$this->m_content->upload_content($id_klien);
			$this->m_content->update_klien($id_klien);
			
			redirect(''.base_url().'pagecontrol/page/klien?update_success');
		}else{
			redirect('pagecontrol/dashboard');
		}
	}

	public function delete_klien($id_klien){
			if (!empty($id_klien)) {
				$this->m_content->delete_klien($id_klien);
				redirect(''.base_url().'pagecontrol/page/klien?delete_success');
			}else{
				redirect(''.base_url().'pagecontrol/page/testimoni?nullid');
			}
	}

	//HALAMAN BLOG

	public function blog(){
		$data['title']     = 'Halaman Blog';
		$data['content']   = 'pagecontrol/blog';
		$data['blog']     = $this->m_content->get_blog();
		$this->load->view('back',$data);
	}

	public function addblog(){
		$data['title']     = 'Psotingan Baru';
		$data['content']   = 'pagecontrol/addblog';
		$this->load->view('back',$data);
	}

	public function save_blog(){
		if ( isset($_POST['save'])){
			$this->m_content->upload_content();
			$this->m_content->save_blog();
			redirect(''.base_url().'pagecontrol/page/blog?save_success');
		}else{
			redirect('pagecontrol/dashboard');
		}
	}

	public function edit_blog($id_blog){
		$data['title']     = 'Edit Postingan';
		$data['content']   = 'pagecontrol/edit_blog';
		$data['blog']     = $this->m_content->get_blog_detail($id_blog)->row();
		$this->load->view('back',$data);
	}

	public function update_blog($id_blog){
		if ( isset($_POST['update'])){
			if ( empty($_FILES['userfile']['tmp_name']) ){
				$this->m_content->update_blog_null($id_blog);
			}else{
				$this->m_content->upload_content($id_blog);
				$this->m_content->update_blog($id_blog);
			}	
			redirect(''.base_url().'pagecontrol/page/edit_blog/'.$id_blog.'?update_success');
		}else{
			redirect('pagecontrol/dashboard');
		}
	}

	public function delete_blog($id_blog){
			if (!empty($id_blog)) {
				$this->m_content->delete_blog($id_blog);
				redirect(''.base_url().'pagecontrol/page/blog?delete_success');
			}else{
				redirect(''.base_url().'pagecontrol/page/blog?nullid');
			}
	}
	
	//HALAMAN TIM PENERBIT

	public function tim(){
		$data['title']     = 'Halaman Tim Penerbit';
		$data['content']   = 'pagecontrol/tim';
		$data['tim']       = $this->m_content->get_tim();
		$this->load->view('back',$data);
	}

	public function save_tim(){
		if ( isset($_POST['save'])){
			$this->m_content->upload_content();
			$this->m_content->save_tim();
			redirect(''.base_url().'pagecontrol/page/tim?save_success');
		}else{
			redirect('pagecontrol/dashboard');
		}
	}

	public function update_tim($id_tim){
		if ( isset($_POST['update'])){
			if ( empty($_FILES['userfile']['tmp_name']) ){
				$this->m_content->update_tim_null($id_tim);
			}else{
				$this->m_content->upload_content($id_tim);
				$this->m_content->update_tim($id_tim);
			}	
			redirect(''.base_url().'pagecontrol/page/tim?update_success');
		}else{
			redirect('pagecontrol/dashboard');
		}
	}

	public function delete_tim($id_tim){
			if (!empty($id_tim)) {
				$this->m_content->delete_tim($id_tim);
				redirect(''.base_url().'pagecontrol/page/tim?delete_success');
			}else{
				redirect(''.base_url().'pagecontrol/page/tim?nullid');
			}
	}

	//HALAMAN DATA PRODUK

	public function produk(){
		$data['title']     = 'Halaman Produk';
		$data['content']   = 'pagecontrol/produk';
		$data['produk']    = $this->m_content->get_produk();
		$this->load->view('back',$data);
	}

	public function save_produk(){
		if ( isset($_POST['save'])){
			$this->m_content->save_produk();
			redirect(''.base_url().'pagecontrol/page/produk?save_success');
		}else{
			redirect('pagecontrol/dashboard');
		}
	}

	public function update_produk($id_produk){
		if ( isset($_POST['update'])){
			$this->m_content->update_produk($id_produk);
			redirect(''.base_url().'pagecontrol/page/produk?update_success');	
		}else{
			redirect('pagecontrol/dashboard');
		}
	}

	public function delete_produk($id_produk){
			if (!empty($id_produk)) {
				$this->m_content->delete_produk($id_produk);
				redirect(''.base_url().'pagecontrol/page/produk?delete_success');
			}else{
				redirect(''.base_url().'pagecontrol/page/produk?nullid');
			}
	}
	
	public function foto_produk($id_produk){
	if (!empty($id_produk)) {
			$data['title']       = 'Halaman Foto Produk';
			$data['content']     = 'pagecontrol/foto_produk';
			$data['foto_produk'] =  $this->m_content->get_foto_produk($id_produk);
			$data['detail_produk'] =  $this->m_content->get_detail_produk($id_produk)->row();
			$this->load->view('back',$data);
		}else{
			redirect(''.base_url().'pagecontrol/page/produk?nullid');
		}
	}
	
	public function save_foto_produk($id_produk){
	if ( isset($_POST['save'])){
			$this->m_content->upload_content();
			$this->m_content->save_foto_produk($id_produk);
			redirect(''.base_url().'pagecontrol/page/foto_produk/'.$id_produk.'?save_success');
		}else{
			redirect(''.base_url().'pagecontrol/page/produk?nullid');
		}
	}

	public function delete_foto_produk($id_produk,$id_foto){
	if (!empty($id_foto)) {
		$this->m_content->delete_foto_produk($id_foto);
		redirect(''.base_url().'pagecontrol/page/foto_produk/'.$id_produk.'?delete_success');
	}else{
		redirect(''.base_url().'pagecontrol/page/produk?nullid');
	}
}

}
