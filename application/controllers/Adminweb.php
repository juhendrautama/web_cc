<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminweb extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('m_user');
		$this->load->library('user_agent');
	}

	public function index(){
		$data['title']   = 'Login Web Administrator';
		$this->load->view('pagecontrol/adminweb',$data);
	}
	
}
