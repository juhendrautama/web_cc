<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->library('user_agent');
		$this->load->library("session");
		$this->load->model('m_user');
		if ( empty($_SESSION['id_user']) or empty($_SESSION['akses'])){
			redirect(''.base_url().'autentikasi/logout');
		}
	}

	public function index(){
		$data['title']   = 'Dashboard';
		$data['content'] = 'pagecontrol/dashboard';
		$data['user']= $this->m_user->getuser_all()->num_rows();
		$this->load->view('back',$data);
	}
}
