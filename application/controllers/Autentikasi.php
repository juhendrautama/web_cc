<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Autentikasi extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('m_user');
		$this->load->library("session");
	}

	public function index(){
		redirect('page_notfound');
	}
	
	function ceklogin(){
		$show=$this->m_user->ceklogin();
		if ($show->num_rows() == 1) {
			$res=$show->row();
			$data=array(
				'id_user'=>$res->id_user,
				'username'=>$res->username,
				'akses'=>$res->akses,
				'nama'=>$res->nama_lengkap,
				'foto'=>$res->foto,
				'sigin'=>true
			);	
			$this->session->set_userdata($data);
				redirect('pagecontrol/dashboard/');
		}else{
			$this->session->set_flashdata('massage', '<br /><div class="alert alert-danger" role="alert">Username atau password salah!</div>');
			redirect('adminweb');
		}			
	}

	
	function logout(){
		unset($_SESSION['id_user']);
		redirect('adminweb');
	}

}
