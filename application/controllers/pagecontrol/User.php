<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('m_user');
		$this->load->library('user_agent');
		if ( empty($_SESSION['id_user']) or empty($_SESSION['akses'])){
			redirect(''.base_url().'autentikasi/logout');
		}
	}

	public function index(){
		$data['title']   = 'Manage User';
		$data['content'] = 'pagecontrol/user';
		$data['user']= $this->m_user->getuser()->row();
		$this->load->view('back',$data);
	}
	
	public function update($id_user){
		if ( isset($_POST['update'])){
			if ( empty($_FILES['userfile']['tmp_name']) and empty($_POST['password']) ){
				$this->m_user->update_null_all($id_user);
			}elseif ( empty($_FILES['userfile']['tmp_name']) ){
				$this->m_user->update_null_img($id_user);
			}elseif ( empty($_POST['password']) ){
				$this->m_user->upload_foto_user();
				$this->m_user->update_null_pw($id_user);
			}else{
				$this->m_user->upload_foto_user();
				$this->m_user->update($id_user);
			}	
			$this->m_user->datauser($id_user);	
			redirect(''.base_url().'pagecontrol/user/index?update_success');
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
	
}
