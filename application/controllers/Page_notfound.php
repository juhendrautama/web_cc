<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page_notfound extends CI_Controller {
	function __construct(){
		parent::__construct();
		
	}

	public function index(){
	
		$data['title']   = 'Halaman Tidak Ditemukan';
		$this->load->view('page_notfound',$data);
	}
}
