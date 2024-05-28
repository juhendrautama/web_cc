<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_user extends CI_Model {

		function __construct(){
			parent::__construct();
			$this->load->database();	
		}
		
		function ceklogin (){	
			$user = $this->input->post('username');
			$pass = md5($_POST['password']);
			$this->db->where('username', $user);
			$this->db->where('password', $pass);
			$this->db->where('tampil', 'Y');
			$query = $this->db->get('t_user'); 
			return $query;
		}
		
		function getuser_all(){
			$this->db->where('tampil', 'Y');
			$query = $this->db->get('t_user'); 
			return $query;
		}
		
		function getuser(){
			$id_user = $_SESSION['id_user'];
			$this->db->where('id_user', $id_user);
			$query = $this->db->get('t_user'); 
			return $query;
		}
		
		
		function save(){
			$nama_lengkap = $this->input->post('nama_lengkap');
			$username     = $this->input->post('username');
			$password     = $this->input->post('password');
			$akses		  = $this->input->post('akses');	
			$data	= array(
						'username' => $username,
						'password' => md5($password),
						'nama_lengkap' => $nama_lengkap,
						'foto' => 'usernone.jpg',
						'akses' => $akses,
						'tampil' => 'Y'
					);
			$action = $this->db->insert('t_user', $data);
			return $action;
		}
		
		function upload_foto_user()
		{
			$config['upload_path'] = 'upload/user';
			$config['allowed_types'] = 'jpg|jpeg|png|gif|bmp|webp';
			$config['max_size']	= '0';
			$config['is_image']  = '1';
			$this->load->library('upload',$config);
			$this->upload->initialize($config);
		}
		
		function update($id_user)
		{
			if ( ! $this->upload->do_upload('userfile')){
			$file      = "";
			echo'<script>
						alert("Ukuran file terlalu besar/jenis file tidak diizinkan")
					</script>';
			}else{
				$dt     	= $this->upload->data();
				$file  		= $dt['file_name'];
				$nama		= $this->input->post('nama');
				$username   = $this->input->post('username');
				$password   = $this->input->post('password');
				$data	= array(
							'username' => $username,
							'password' => md5($password),
							'nama_lengkap' => $nama,
							'foto' => $file
						);
				$this->db->where('id_user',$id_user);
				$action = $this->db->update('t_user', $data);
				return $action;
			}
		}
		
		function update_null_img($id_user)
		{
		
				$nama		= $this->input->post('nama');
				$username   = $this->input->post('username');
				$password   = $this->input->post('password');
				$data	= array(
							'username' => $username,
							'password' => md5($password),
							'nama_lengkap' => $nama
						);
				$this->db->where('id_user',$id_user);
				$action = $this->db->update('t_user', $data);
				return $action;
		
		}
		
		function update_null_pw($id_user)
		{
			if ( ! $this->upload->do_upload('userfile')){
			$file      = "";
			echo'<script>
						alert("Ukuran file terlalu besar/jenis file tidak diizinkan");
					</script>';
			}else{
				$dt     	= $this->upload->data();
				$file  		= $dt['file_name'];
				$nama		= $this->input->post('nama');
				$username   = $this->input->post('username');
				$data	= array(
							'username' => $username,
							'nama_lengkap' => $nama,
							'foto' => $file
						);
				$this->db->where('id_user',$id_user);
				$action = $this->db->update('t_user', $data);
				return $action;
			}
		}
		
		function update_null_all($id_user)
		{
		
				$nama		= $this->input->post('nama');
				$username   = $this->input->post('username');
				$data	= array(
							'username' => $username,
							'nama_lengkap' => $nama
						);
				$this->db->where('id_user',$id_user);
				$action = $this->db->update('t_user', $data);
				return $action;
		
		}
		
		function update2($id_user)
		{
				$nama_lengkap = $this->input->post('nama_lengkap');
				$username     = $this->input->post('username');
				$password     = $this->input->post('password');
				$akses		  = $this->input->post('akses');
				if ( empty($password) ){
					$data	= array(
							'username' => $username,
							'nama_lengkap' => $nama_lengkap,
							'akses' => $akses
						);
				}else{
					$data	= array(
							'username' => $username,
							'password' => md5($password),
							'nama_lengkap' => $nama_lengkap,
							'akses' => $akses
						);	
				}
				
				$this->db->where('id_user',$id_user);
				$action = $this->db->update('t_user', $data);
				return $action;
			
		}
		
		function datauser($id_user){	
			$this->db->where('id_user', $id_user);
			$res = $this->db->get('t_user')->row(); 
			$data=array(
				'id_user'=>$res->id_user,
				'username'=>$res->username,
				'akses'=>$res->akses,
				'nama'=>$res->nama_lengkap,
				'foto'=>$res->foto,
				'sigin'=>true
			);	
			$this->session->set_userdata($data);
		}
		
	
		function delete($id_user)
		{
					$data	= array(
							'tampil' => 'N'
						);	
						
				$this->db->where('id_user',$id_user);
				$action = $this->db->update('t_user', $data);
				return $action;
			
		}
		
	
		
	}
