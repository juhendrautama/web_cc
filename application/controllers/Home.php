<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('m_user');
		$this->load->model('m_content');
		$this->load->library('user_agent');
	}

	public function index(){
		$data['title']   = 'Home | Catur Cemeyka';
		$data['content'] = 'home';
		$data['beranda'] = $this->m_content->get_beranda()->row();
		$data['penawaran'] = $this->m_content->get_penawaran();
		$data['quote'] = $this->m_content->get_quote()->row();
		$data['jumlah'] = $this->m_content->get_jumlah();
		$data['paket']     = $this->m_content->get_paket();
		$data['project']     = $this->m_content->get_project();
		$data['testimoni']     = $this->m_content->get_testimoni();
		$data['klien']     = $this->m_content->get_klien();
		$data['blog']     = $this->m_content->get_blog_limit();
		$data['tim']       = $this->m_content->get_tim();
		$this->load->view('front',$data);
	}

	public function blog(){
		$data['title']   = 'Blog';
		$data['content'] = 'blog';
		$data['blog'] 	 = $this->m_content->get_blog();
		$data['recent']   = $this->m_content->get_blog_limit();
		$this->load->view('front',$data);
	}

	public function blog_detail($id_blog){
		$data['title']   = 'Blog';
		$data['content'] = 'blog_detail';
		$data['blog'] 	 = $this->m_content->get_blog_detail($id_blog)->row();
		$data['recent']   = $this->m_content->get_blog_limit();
		$this->load->view('front',$data);
	}
	
	public function daftar(){
		$data['title']   = 'Daftar Akun';
		$this->load->view('daftar',$data);
	}
	
	public function prosesdaftar(){
		if ( isset($_POST['daftar'])){
			$this->m_user->daftar();
			redirect(''.base_url().'home/?daftar_success');
		}else{
			redirect('pagecontrol/dashboard');
		}
	}

	public function produk($id_produk){
		if (!empty($id_produk)) {
			$data['title']   	   = 'Detail Produk';
			$data['content'] 	   = 'produk';
			$data['foto_produk']   =  $this->m_content->get_foto_produk($id_produk);
			$data['detail_produk'] =  $this->m_content->get_detail_produk($id_produk)->row();

			$cek_produk = $this->m_content->get_detail_produk($id_produk)->num_rows();
			if ($cek_produk == 0) {
				redirect('page_notofund');
			}else{
				$this->load->view('front',$data);
			}
		}else{
			redirect('page_notofund');
		}
	}

	public function contact(){
		
		if (isset($_POST['send'])) {
			$nama	         = $this->input->post('name');
			$pesan         = $this->input->post('message');

			$name = str_replace(' ','%20',$nama);
			$message = str_replace(' ','%20',$pesan);
			redirect('https://api.whatsapp.com/send?phone=6289618535693&text=Hallo%2C%20saya%20'.$name.'%20'.$message.'');		
		}else{
			redirect('page_notofund');
		}
	}



	
}
