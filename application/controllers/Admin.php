<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
	public $data = array();

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper(array('form', 'url'));
		$this->load->library(array('form_validation', 'session', 'enkripsi'));
		$this->load->model(array('admin_model'));
		$this->load->model(array('Setting_model'));
	}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
	//print_r ($_POST); print_r ($this->session->userdata); exit;
	$data['nama'] = $this->session->userdata('nama');
	$data['id_role'] = $this->session->userdata('id_role');
	$data['email'] = $this->session->userdata('email');
	$data['formnya'] = $this->Setting_model->tampil_form();
		$this->load->view('header',$data);
		$this->load->view('sidebar', $data);
		$this->load->view('admin/index', $data);
		$this->load->view('footer', $data);
	}

	// Logout
	public function login()
	{
		$this->load->view('admin/login');
	}


	public function do_login()
	{
		//print_r($_POST); exit;
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$cek = $this->admin_model->search_users($username);
		$nama = $cek['nama'];
		$id_users = $cek['id_users'];
		$email = $cek['email'];
		$id_role = $cek['id_role'];
		$passwordnya = $cek['password'];
		$status = $cek['status'];
		//$passwordnya ='admin123';
		$decrypted_txt = $this->enkripsi->encrypt_decrypt('decrypt', $passwordnya);
		$this->session->set_userdata('nama', $nama);
		$this->session->set_userdata('email', $email);
		$this->session->set_userdata('id_users', $id_users);
		$this->session->set_userdata('username', $username);
		$this->session->set_userdata('password', $password);
		$this->session->set_userdata('id_role', $id_role);
		$this->session->set_userdata('status', $status);
		
		//cek status
		if ($status == "aktif") {
					//echo $decrypted_txt; exit;
		if ($decrypted_txt == $password) {
			if ($id_role == 1) {
			$this->session->set_userdata('id_role', $id_role);
				//echo "<script>alert('Anda Berhasil Login dengan Hak Akses Admin')</script>";
				echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/index>";
			} else if ($id_role == 2) { 
			$this->session->set_userdata('id_role', $id_role);
				echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/index>";
			}else if ($id_role == 3) { 
			$this->session->set_userdata('id_role', $id_role);
				echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/index>";
			}else if ($id_role == 4) { 
			$this->session->set_userdata('id_role', $id_role);
				echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/index>";
			}else if ($id_role == 5) { 
			$this->session->set_userdata('id_role', $id_role);
				echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/index>";
			}else if ($id_role == 6) { 
			$this->session->set_userdata('id_role', $id_role);
				echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/index>";
			}else if ($id_role == 7) { 
			$this->session->set_userdata('id_role', $id_role);
				echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/index>";
			}else if ($id_role == 8) { 
			$this->session->set_userdata('id_role', $id_role);
				echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/index>";
			}else if ($id_role == 9) { 
			$this->session->set_userdata('id_role', $id_role);
				echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/index>";
			}else {
				echo "<script>alert('Gagal Login, Periksa Username dan Password Anda')</script>";
				echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
			}
		} else {
			echo "<script>alert('Wrong Password!')</script>";
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		}
		}else{
			echo "<script>alert('Akun Tidak Aktif')</script>";
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		}
	}

	// Logout
	function logout()
	{
		$data = array(
			'username' => NULL,
			'password' => NULL,
			'role' => NULL
		);
		$this->session->unset_userdata($data);
		echo "<script>alert('Anda Berhasil Keluar dari Aplikasi')</script>";
		echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
	}

	//information_view
	public function information_view()
	{
			
		$data['gallery_view'] = $this->admin_model->tampil_gallery();
		$this->data['title'] = 'Beranda :: ';
		$this->load->view('header', $this->data);
		$this->load->view('sidebar', $data);
		$this->load->view('admin/information_view', $data);
		$this->load->view('footer');
	}


//Upload Nodin Direksi Pekerjaan
	public function upload_nodin_konsultan_view()
	{
			 
		$data['id_users'] = $this->session->userdata('id_users');
		$data['nama'] = $this->session->userdata('nama');
		$data['email'] = $this->session->userdata('email');
		$data['id_role'] = $this->session->userdata('id_role');
		$data['upload_nodin'] = $this->admin_model->tampil_upload_nodin_konsultan();
			 
		$this->load->view('header', $data);
		$this->load->view('sidebar', $data);
		$this->load->view('admin/upload_nodin_konsultan_view', $data);
		$this->load->view('footer');
	}
	public function upload_nodin_konstruksi_view()
	{
			 
		$data['id_users'] = $this->session->userdata('id_users');
		$data['nama'] = $this->session->userdata('nama');
		$data['email'] = $this->session->userdata('email');
		$data['id_role'] = $this->session->userdata('id_role');
		$data['upload_nodin'] = $this->admin_model->tampil_upload_nodin_konstruksi();
			 
		$this->load->view('header', $data);
		$this->load->view('sidebar', $data);
		$this->load->view('admin/upload_nodin_konstruksi_view', $data);
		$this->load->view('footer');
	}
	public function upload_nodin_barang_view()
	{
			 
		$data['id_users'] = $this->session->userdata('id_users');
		$data['nama'] = $this->session->userdata('nama');
		$data['email'] = $this->session->userdata('email');
		$data['id_role'] = $this->session->userdata('id_role');
		$data['upload_nodin'] = $this->admin_model->tampil_upload_nodin_barang();
			 
		$this->load->view('header', $data);
		$this->load->view('sidebar', $data);
		$this->load->view('admin/upload_nodin_barang_view', $data);
		$this->load->view('footer');
	}
	
	public function upload_nodin_konsultan_add() {
		//print_r($_POST); 
		//print_r($_GET); exit;
			
	$data['email'] = $this->session->userdata('email');
	$data['nama'] = $this->session->userdata('nama');
	$data['id_users'] = $this->input->get('id_users');
            $data['email'] = $this->session->userdata('email');
	$data['username'] = $this->session->userdata('username');
		$data['id_role'] = $this->session->userdata('id_role');
        	$this->load->view('header', $data);
            $this->load->view('sidebar', $data);
            $this->load->view('admin/upload_nodin_konsultan_add', $data);
            $this->load->view('footer', $data);
    }
	public function upload_nodin_konstruksi_add() {
		//print_r($_POST); 
		//print_r($_GET); exit;
			
	$data['email'] = $this->session->userdata('email');
	$data['nama'] = $this->session->userdata('nama');
	$data['id_users'] = $this->input->get('id_users');
            $data['email'] = $this->session->userdata('email');
	$data['username'] = $this->session->userdata('username');
		$data['id_role'] = $this->session->userdata('id_role');
        	$this->load->view('header', $data);
            $this->load->view('sidebar', $data);
            $this->load->view('admin/upload_nodin_konstruksi_add', $data);
            $this->load->view('footer', $data);
    }
	public function upload_nodin_barang_add() {
		//print_r($_POST); 
		//print_r($_GET); exit;
			
	$data['email'] = $this->session->userdata('email');
	$data['nama'] = $this->session->userdata('nama');
	$data['id_users'] = $this->input->get('id_users');
            $data['email'] = $this->session->userdata('email');
	$data['username'] = $this->session->userdata('username');
		$data['id_role'] = $this->session->userdata('id_role');
        	$this->load->view('header', $data);
            $this->load->view('sidebar', $data);
            $this->load->view('admin/upload_nodin_barang_add', $data);
            $this->load->view('footer', $data);
    }
	
	public function action_upload_nodin_konsultan_add() {
		//print_r($_POST); 
		//print_r($_GET); exit;
			
		   $tgl= date('d-m-Y');
		   $nomor_kontrak = $this->input->post('nomor_kontrak');
		   $id_dokumen = $this->input->post('id_dokumen');
		   $id_users = $this->input->post('id_users');
		   $email = $this->input->post('email');
		   $jenis_dokumen = $this->input->post('jenis_dokumen');
		   $tgl_upload = date('Y-m-d' , strtotime($tgl));
		   $tgl_berakhir = date('Y-m-d', strtotime('+1 days', strtotime($tgl)));
		  
		   
		   $pathToUpload = './public/nodin/' . $id_users.'/';
		if ( ! file_exists($pathToUpload) )
		{
			$create = mkdir($pathToUpload, 0777);
			
			if ( ! $create )
			return;
		}
				// START setting konfigurasi upload pdf
			$config1['upload_path'] = './public/nodin/'. $id_users.'/';
						if ( ! file_exists($config1['upload_path']) )
					{
						$create = mkdir($config1['upload_path'], 0777);
						
						if ( ! $create )
						return;
					}
			$config1['allowed_types'] = 'pdf';
			$config1['overwrite']			= true;
			$config1['max_size']             = 10024; // 10MB
			
			// START load library upload upload_nodin
			$this->load->library('upload', $config1);
			$this->upload->initialize($config1);
			if (!$this->upload->do_upload('upload_nodin')) {
				$error = $this->upload->display_errors();
				// menampilkan pesan error
				//print_r($error);
			} else {
				$result1 = $this->upload->data();
				echo "<pre>";
				//print_r($result); exit;
				echo "</pre>";
			}
			$upload_nodin = !empty($result1['file_name']) ? $result1['file_name'] : '';
			//print_r ($document); exit;
		   	// END load library upload upload_dokumen
		    

			$data = array('upload_nodin' => $upload_nodin);
                    $insert = $this->admin_model->update_upload_nodin_konsultan($data,$id_users);
                    if ($insert) {
                        echo "<script>alert('Berhasil Menambah Data')</script>";
                        echo "<meta http-equiv=refresh content=0;url=" . base_url() . "Admin/upload_nodin_konsultan_view/>";
                    }
		}
	public function action_upload_nodin_konstruksi_add() {
		//print_r($_POST); 
		//print_r($_GET); exit;
			
		   $tgl= date('d-m-Y');
		   $nomor_kontrak = $this->input->post('nomor_kontrak');
		   $id_dokumen = $this->input->post('id_dokumen');
		   $id_users = $this->input->post('id_users');
		   $email = $this->input->post('email');
		   $jenis_dokumen = $this->input->post('jenis_dokumen');
		   $tgl_upload = date('Y-m-d' , strtotime($tgl));
		   $tgl_berakhir = date('Y-m-d', strtotime('+1 days', strtotime($tgl)));
		  
		   
		   $pathToUpload = './public/nodin/' . $id_users.'/';
		if ( ! file_exists($pathToUpload) )
		{
			$create = mkdir($pathToUpload, 0777);
			
			if ( ! $create )
			return;
		}
				// START setting konfigurasi upload pdf
			$config1['upload_path'] = './public/nodin/'. $id_users.'/';
						if ( ! file_exists($config1['upload_path']) )
					{
						$create = mkdir($config1['upload_path'], 0777);
						
						if ( ! $create )
						return;
					}
			$config1['allowed_types'] = 'pdf';
			$config1['overwrite']			= true;
			$config1['max_size']             = 10024; // 10MB
			
			// START load library upload upload_nodin
			$this->load->library('upload', $config1);
			$this->upload->initialize($config1);
			if (!$this->upload->do_upload('upload_nodin')) {
				$error = $this->upload->display_errors();
				// menampilkan pesan error
				//print_r($error);
			} else {
				$result1 = $this->upload->data();
				echo "<pre>";
				//print_r($result); exit;
				echo "</pre>";
			}
			$upload_nodin = !empty($result1['file_name']) ? $result1['file_name'] : '';
			//print_r ($document); exit;
		   	// END load library upload upload_dokumen
		    

			$data = array('upload_nodin' => $upload_nodin);
                    $insert = $this->admin_model->update_upload_nodin_konstruksi($data,$id_users);
                    if ($insert) {
                        echo "<script>alert('Berhasil Menambah Data')</script>";
                        echo "<meta http-equiv=refresh content=0;url=" . base_url() . "Admin/upload_nodin_konstruksi_view/>";
                    }
		}
	public function action_upload_nodin_barang_add() {
		//print_r($_POST); 
		//print_r($_GET); exit;
			
		   $tgl= date('d-m-Y');
		   $nomor_kontrak = $this->input->post('nomor_kontrak');
		   $id_dokumen = $this->input->post('id_dokumen');
		   $id_users = $this->input->post('id_users');
		   $email = $this->input->post('email');
		   $jenis_dokumen = $this->input->post('jenis_dokumen');
		   $tgl_upload = date('Y-m-d' , strtotime($tgl));
		   $tgl_berakhir = date('Y-m-d', strtotime('+1 days', strtotime($tgl)));
		  
		   
		   $pathToUpload = './public/nodin/' . $id_users.'/';
		if ( ! file_exists($pathToUpload) )
		{
			$create = mkdir($pathToUpload, 0777);
			
			if ( ! $create )
			return;
		}
				// START setting konfigurasi upload pdf
			$config1['upload_path'] = './public/nodin/'. $id_users.'/';
						if ( ! file_exists($config1['upload_path']) )
					{
						$create = mkdir($config1['upload_path'], 0777);
						
						if ( ! $create )
						return;
					}
			$config1['allowed_types'] = 'pdf';
			$config1['overwrite']			= true;
			$config1['max_size']             = 10024; // 10MB
			
			// START load library upload upload_nodin
			$this->load->library('upload', $config1);
			$this->upload->initialize($config1);
			if (!$this->upload->do_upload('upload_nodin')) {
				$error = $this->upload->display_errors();
				// menampilkan pesan error
				//print_r($error);
			} else {
				$result1 = $this->upload->data();
				echo "<pre>";
				//print_r($result); exit;
				echo "</pre>";
			}
			$upload_nodin = !empty($result1['file_name']) ? $result1['file_name'] : '';
			//print_r ($document); exit;
		   	// END load library upload upload_dokumen
		    

			$data = array('upload_nodin' => $upload_nodin);
                    $insert = $this->admin_model->update_upload_nodin_barang($data,$id_users);
                    if ($insert) {
                        echo "<script>alert('Berhasil Menambah Data')</script>";
                        echo "<meta http-equiv=refresh content=0;url=" . base_url() . "Admin/upload_nodin_barang_view/>";
                    }
		}
		
	
//Upload Nodin MSB BAT
	public function upload_nodin_konsultan_bat_view()
	{
			 
		$data['id_users'] = $this->session->userdata('id_users');
		$data['nama'] = $this->session->userdata('nama');
		$data['email'] = $this->session->userdata('email');
		$data['id_role'] = $this->session->userdata('id_role');
		$data['upload_nodin'] = $this->admin_model->tampil_upload_nodin_konsultan_bat();
			 
		$this->load->view('header', $data);
		$this->load->view('sidebar', $data);
		$this->load->view('admin/upload_nodin_konsultan_bat_view', $data);
		$this->load->view('footer');
	}
	public function upload_nodin_konstruksi_bat_view()
	{
			 
		$data['id_users'] = $this->session->userdata('id_users');
		$data['nama'] = $this->session->userdata('nama');
		$data['email'] = $this->session->userdata('email');
		$data['id_role'] = $this->session->userdata('id_role');
		$data['upload_nodin'] = $this->admin_model->tampil_upload_nodin_konstruksi_bat();
			 
		$this->load->view('header', $data);
		$this->load->view('sidebar', $data);
		$this->load->view('admin/upload_nodin_konstruksi_bat_view', $data);
		$this->load->view('footer');
	}
	public function upload_nodin_barang_bat_view()
	{
			 
		$data['id_users'] = $this->session->userdata('id_users');
		$data['nama'] = $this->session->userdata('nama');
		$data['email'] = $this->session->userdata('email');
		$data['id_role'] = $this->session->userdata('id_role');
		$data['upload_nodin'] = $this->admin_model->tampil_upload_nodin_barang_bat();
			 
		$this->load->view('header', $data);
		$this->load->view('sidebar', $data);
		$this->load->view('admin/upload_nodin_barang_bat_view', $data);
		$this->load->view('footer');
	}
	
	public function upload_nodin_konsultan_bat_add() {
		//print_r($_POST); 
		//print_r($_GET); exit;
			
	$data['email'] = $this->session->userdata('email');
	$data['nama'] = $this->session->userdata('nama');
	$data['id_users'] = $this->input->get('id_users');
            $data['email'] = $this->session->userdata('email');
	$data['username'] = $this->session->userdata('username');
		$data['id_role'] = $this->session->userdata('id_role');
        	$this->load->view('header', $data);
            $this->load->view('sidebar', $data);
            $this->load->view('admin/upload_nodin_konsultan_bat_add', $data);
            $this->load->view('footer', $data);
    }
	public function upload_nodin_konstruksi_bat_add() {
		//print_r($_POST); 
		//print_r($_GET); exit;
			
	$data['email'] = $this->session->userdata('email');
	$data['nama'] = $this->session->userdata('nama');
	$data['id_users'] = $this->input->get('id_users');
            $data['email'] = $this->session->userdata('email');
	$data['username'] = $this->session->userdata('username');
		$data['id_role'] = $this->session->userdata('id_role');
        	$this->load->view('header', $data);
            $this->load->view('sidebar', $data);
            $this->load->view('admin/upload_nodin_konstruksi_bat_add', $data);
            $this->load->view('footer', $data);
    }
	public function upload_nodin_barang_bat_add() {
		//print_r($_POST); 
		//print_r($_GET); exit;
			
	$data['email'] = $this->session->userdata('email');
	$data['nama'] = $this->session->userdata('nama');
	$data['id_users'] = $this->input->get('id_users');
            $data['email'] = $this->session->userdata('email');
	$data['username'] = $this->session->userdata('username');
		$data['id_role'] = $this->session->userdata('id_role');
        	$this->load->view('header', $data);
            $this->load->view('sidebar', $data);
            $this->load->view('admin/upload_nodin_barang_bat_add', $data);
            $this->load->view('footer', $data);
    }
	
	public function action_upload_nodin_konsultan_bat_add() {
		//print_r($_POST); 
		//print_r($_GET); exit;
			
		   $tgl= date('d-m-Y');
		   $nomor_kontrak = $this->input->post('nomor_kontrak');
		   $id_dokumen = $this->input->post('id_dokumen');
		   $id_users = $this->input->post('id_users');
		   $email = $this->input->post('email');
		   $jenis_dokumen = $this->input->post('jenis_dokumen');
		   $tgl_upload = date('Y-m-d' , strtotime($tgl));
		   $tgl_berakhir = date('Y-m-d', strtotime('+7 days', strtotime($tgl)));
		  
		   
		   $pathToUpload = './public/nodin/' . $id_users.'/';
		if ( ! file_exists($pathToUpload) )
		{
			$create = mkdir($pathToUpload, 0777);
			
			if ( ! $create )
			return;
		}
				// START setting konfigurasi upload pdf
			$config1['upload_path'] = './public/nodin/'. $id_users.'/';
						if ( ! file_exists($config1['upload_path']) )
					{
						$create = mkdir($config1['upload_path'], 0777);
						
						if ( ! $create )
						return;
					}
			$config1['allowed_types'] = 'pdf';
			$config1['overwrite']			= true;
			$config1['max_size']             = 10024; // 10MB
			
			// START load library upload upload_nodin
			$this->load->library('upload', $config1);
			$this->upload->initialize($config1);
			if (!$this->upload->do_upload('upload_nodin')) {
				$error = $this->upload->display_errors();
				// menampilkan pesan error
				//print_r($error);
			} else {
				$result1 = $this->upload->data();
				echo "<pre>";
				//print_r($result); exit;
				echo "</pre>";
			}
			$upload_nodin = !empty($result1['file_name']) ? $result1['file_name'] : '';
			//print_r ($document); exit;
		   	// END load library upload upload_dokumen
		    

			$data = array('upload_nodin' => $upload_nodin);
                    $insert = $this->admin_model->update_upload_nodin_konsultan_bat($data,$id_users);
                    if ($insert) {
                        echo "<script>alert('Berhasil Menambah Data')</script>";
                        echo "<meta http-equiv=refresh content=0;url=" . base_url() . "Admin/upload_nodin_konsultan_bat_view/>";
                    }
		}
	public function action_upload_nodin_konstruksi_bat_add() {
		//print_r($_POST); 
		//print_r($_GET); exit;
			
		   $tgl= date('d-m-Y');
		   $nomor_kontrak = $this->input->post('nomor_kontrak');
		   $id_dokumen = $this->input->post('id_dokumen');
		   $id_users = $this->input->post('id_users');
		   $email = $this->input->post('email');
		   $jenis_dokumen = $this->input->post('jenis_dokumen');
		   $tgl_upload = date('Y-m-d' , strtotime($tgl));
		   $tgl_berakhir = date('Y-m-d', strtotime('+7 days', strtotime($tgl)));
		  
		   
		   $pathToUpload = './public/nodin/' . $id_users.'/';
		if ( ! file_exists($pathToUpload) )
		{
			$create = mkdir($pathToUpload, 0777);
			
			if ( ! $create )
			return;
		}
				// START setting konfigurasi upload pdf
			$config1['upload_path'] = './public/nodin/'. $id_users.'/';
						if ( ! file_exists($config1['upload_path']) )
					{
						$create = mkdir($config1['upload_path'], 0777);
						
						if ( ! $create )
						return;
					}
			$config1['allowed_types'] = 'pdf';
			$config1['overwrite']			= true;
			$config1['max_size']             = 10024; // 10MB
			
			// START load library upload upload_nodin
			$this->load->library('upload', $config1);
			$this->upload->initialize($config1);
			if (!$this->upload->do_upload('upload_nodin')) {
				$error = $this->upload->display_errors();
				// menampilkan pesan error
				//print_r($error);
			} else {
				$result1 = $this->upload->data();
				echo "<pre>";
				//print_r($result); exit;
				echo "</pre>";
			}
			$upload_nodin = !empty($result1['file_name']) ? $result1['file_name'] : '';
			//print_r ($document); exit;
		   	// END load library upload upload_dokumen
		    

			$data = array('upload_nodin' => $upload_nodin);
                    $insert = $this->admin_model->update_upload_nodin_konstruksi_bat($data,$id_users);
                    if ($insert) {
                        echo "<script>alert('Berhasil Menambah Data')</script>";
                        echo "<meta http-equiv=refresh content=0;url=" . base_url() . "Admin/upload_nodin_konstruksi_bat_view/>";
                    }
		}
	public function action_upload_nodin_barang_bat_add() {
		//print_r($_POST); 
		//print_r($_GET); exit;
			
		   $tgl= date('d-m-Y');
		   $nomor_kontrak = $this->input->post('nomor_kontrak');
		   $id_dokumen = $this->input->post('id_dokumen');
		   $id_users = $this->input->post('id_users');
		   $email = $this->input->post('email');
		   $jenis_dokumen = $this->input->post('jenis_dokumen');
		   $tgl_upload = date('Y-m-d' , strtotime($tgl));
		   $tgl_berakhir = date('Y-m-d', strtotime('+7 days', strtotime($tgl)));
		  
		   
		   $pathToUpload = './public/nodin/' . $id_users.'/';
		if ( ! file_exists($pathToUpload) )
		{
			$create = mkdir($pathToUpload, 0777);
			
			if ( ! $create )
			return;
		}
				// START setting konfigurasi upload pdf
			$config1['upload_path'] = './public/nodin/'. $id_users.'/';
						if ( ! file_exists($config1['upload_path']) )
					{
						$create = mkdir($config1['upload_path'], 0777);
						
						if ( ! $create )
						return;
					}
			$config1['allowed_types'] = 'pdf';
			$config1['overwrite']			= true;
			$config1['max_size']             = 10024; // 10MB
			
			// START load library upload upload_nodin
			$this->load->library('upload', $config1);
			$this->upload->initialize($config1);
			if (!$this->upload->do_upload('upload_nodin')) {
				$error = $this->upload->display_errors();
				// menampilkan pesan error
				//print_r($error);
			} else {
				$result1 = $this->upload->data();
				echo "<pre>";
				//print_r($result); exit;
				echo "</pre>";
			}
			$upload_nodin = !empty($result1['file_name']) ? $result1['file_name'] : '';
			//print_r ($document); exit;
		   	// END load library upload upload_dokumen
		    

			$data = array('upload_nodin' => $upload_nodin);
                    $insert = $this->admin_model->update_upload_nodin_barang_bat($data,$id_users);
                    if ($insert) {
                        echo "<script>alert('Berhasil Menambah Data')</script>";
                        echo "<meta http-equiv=refresh content=0;url=" . base_url() . "Admin/upload_nodin_barang_bat_view/>";
                    }
		}
		
	

 //tracking_view
	public function tracking_view()
	{
			 
		$id_users = $this->session->userdata('id_users');
		$data['nama'] = $this->session->userdata('nama');
		$data['email'] = $this->session->userdata('email');
		$data['id_role'] = $this->session->userdata('id_role');
		$data['tracking_view'] = $this->admin_model->tampil_tracking_view($id_users);
		$data['get_role'] = $this->admin_model->get_role($id_users);
			 
		$this->load->view('header', $data);
		$this->load->view('sidebar', $data);
		$this->load->view('admin/tracking_view', $data);
		$this->load->view('footer');
	}
	
	public function search_dokumen()
	{
	//print_r($_POST); exit;
			 
		$id_users = $this->session->userdata('id_users');
		$data['nama'] = $this->session->userdata('nama');
		$data['email'] = $this->session->userdata('email');
		$data['id_role'] = $this->session->userdata('id_role');
		
		$nomor_kontrak = $this->input->post('nomor_kontrak');
		$jenis_dokumen = $this->input->post('jenis_dokumen');
		$data['tracking_dokumen'] = $this->admin_model->tracking_dokumen($nomor_kontrak,$jenis_dokumen);
			 
		$this->load->view('header', $data);
		$this->load->view('sidebar', $data);
		$this->load->view('admin/search_dokumen', $data);
		$this->load->view('footer');
	}

//Alasan Keterlambatan
public function alasan_keterlambatan_direksi_pekerjaan() {
		
	$id_dokumen = $this->input->get('id_dokumen');
		$data['nama'] = $this->session->userdata('nama');
		$data['dokumennya'] = $this->admin_model->get_dokumen_direksi_pekerjaan($id_dokumen);
		$data['id_users'] = $this->session->userdata('id_users');
		$data['email'] = $this->session->userdata('email');
		$data['username'] = $this->session->userdata('username');
		$data['id_role'] = $this->session->userdata('id_role');
		$this->load->view('header',$data);
		$this->load->view('sidebar', $data);
		$this->load->view('admin/alasan_keterlambatan_direksi_pekerjaan', $data);
		$this->load->view('footer');
	}
	public function action_alasan_keterlambatan_direksi_pekerjaan() {
	
		$id_dokumen = $this->input->post('id_dokumen');
		$alasan_keterlambatan_direksi_pekerjaan = $this->input->post('alasan_keterlambatan_direksi_pekerjaan', TRUE);
		$data = array('alasan_keterlambatan_direksi_pekerjaan' => $alasan_keterlambatan_direksi_pekerjaan);
		$update = $this->admin_model->update_alasan_keterlambatan_direksi_pekerjaan($data, $id_dokumen);
				if ($update) {
				echo "<script>alert('Berhasil Menambahkan Alasan Keterlambatan')</script>";
				echo "<meta http-equiv=refresh content=0;url=" . base_url() . "Admin/dokumen_direksi_pekerjaan?id_dokumen=".$id_dokumen.">";
				}
		}
		public function alasan_keterlambatan_staff_bat() {
		
			$id_dokumen = $this->input->get('id_dokumen');
				$data['nama'] = $this->session->userdata('nama');
				$data['dokumennya'] = $this->admin_model->get_dokumen_staff_bat($id_dokumen);
				$data['id_users'] = $this->session->userdata('id_users');
				$data['email'] = $this->session->userdata('email');
				$data['username'] = $this->session->userdata('username');
				$data['id_role'] = $this->session->userdata('id_role');
				$this->load->view('header',$data);
				$this->load->view('sidebar', $data);
				$this->load->view('admin/alasan_keterlambatan_staff_bat', $data);
				$this->load->view('footer');
			}
		public function action_alasan_keterlambatan_staff_bat() {
	
			$id_dokumen = $this->input->post('id_dokumen');
			$alasan_keterlambatan_staff_bat = $this->input->post('alasan_keterlambatan_staff_bat', TRUE);
			$data = array('alasan_keterlambatan_msb_bat' => $alasan_keterlambatan_staff_bat);
			$update = $this->admin_model->update_alasan_keterlambatan_staff_bat($data, $id_dokumen);
				if ($update) {
				echo "<script>alert('Berhasil Menambahkan Alasan Keterlambatan')</script>";
				echo "<meta http-equiv=refresh content=0;url=" . base_url() . "Admin/dokumen_view_staff_bat?id_dokumen=".$id_dokumen.">";
					}
			}
		public function alasan_keterlambatan_asman_bat() {
		
			$id_dokumen = $this->input->get('id_dokumen');
				$data['nama'] = $this->session->userdata('nama');
				$data['dokumennya'] = $this->admin_model->get_dokumen_asman_bat($id_dokumen);
				$data['id_users'] = $this->session->userdata('id_users');
				$data['email'] = $this->session->userdata('email');
				$data['username'] = $this->session->userdata('username');
				$data['id_role'] = $this->session->userdata('id_role');
				$this->load->view('header',$data);
				$this->load->view('sidebar', $data);
				$this->load->view('admin/alasan_keterlambatan_asman_bat', $data);
				$this->load->view('footer');
			}
		public function action_alasan_keterlambatan_asman_bat() {
	
			$id_dokumen = $this->input->post('id_dokumen');
			$alasan_keterlambatan_asman_bat = $this->input->post('alasan_keterlambatan_asman_bat', TRUE);
			$data = array('alasan_keterlambatan_msb_bat' => $alasan_keterlambatan_asman_bat);
			$update = $this->admin_model->update_alasan_keterlambatan_asman_bat($data, $id_dokumen);
				if ($update) {
				echo "<script>alert('Berhasil Menambahkan Alasan Keterlambatan')</script>";
				echo "<meta http-equiv=refresh content=0;url=" . base_url() . "Admin/dokumen_view_asman_bat?id_dokumen=".$id_dokumen.">";
					}
			}
		public function alasan_keterlambatan_msb_bat() {
		
			$id_dokumen = $this->input->get('id_dokumen');
				$data['nama'] = $this->session->userdata('nama');
				$data['dokumennya'] = $this->admin_model->get_dokumen_msb_bat($id_dokumen);
				$data['id_users'] = $this->session->userdata('id_users');
				$data['email'] = $this->session->userdata('email');
				$data['username'] = $this->session->userdata('username');
				$data['id_role'] = $this->session->userdata('id_role');
				$this->load->view('header',$data);
				$this->load->view('sidebar', $data);
				$this->load->view('admin/alasan_keterlambatan_msb_bat', $data);
				$this->load->view('footer');
			}
		public function action_alasan_keterlambatan_msb_bat() {
	
			$id_dokumen = $this->input->post('id_dokumen');
			$alasan_keterlambatan_msb_bat = $this->input->post('alasan_keterlambatan_msb_bat', TRUE);
			$data = array('alasan_keterlambatan_msb_bat' => $alasan_keterlambatan_msb_bat);
			$update = $this->admin_model->update_alasan_keterlambatan_msb_bat($data, $id_dokumen);
				if ($update) {
				echo "<script>alert('Berhasil Menambahkan Alasan Keterlambatan')</script>";
				echo "<meta http-equiv=refresh content=0;url=" . base_url() . "Admin/dokumen_view_msb_bat?id_dokumen=".$id_dokumen.">";
					}
			}
		public function alasan_keterlambatan_staff_keuangan() {
		
			$id_dokumen = $this->input->get('id_dokumen');
				$data['nama'] = $this->session->userdata('nama');
				$data['dokumennya'] = $this->admin_model->get_dokumen_staff_keuangan($id_dokumen);
				$data['id_users'] = $this->session->userdata('id_users');
				$data['email'] = $this->session->userdata('email');
				$data['username'] = $this->session->userdata('username');
				$data['id_role'] = $this->session->userdata('id_role');
				$this->load->view('header',$data);
				$this->load->view('sidebar', $data);
				$this->load->view('admin/alasan_keterlambatan_staff_keuangan', $data);
				$this->load->view('footer');
			}
		public function action_alasan_keterlambatan_staff_keuangan() {
	
			$id_dokumen = $this->input->post('id_dokumen');
			$alasan_keterlambatan_staff_keuangan = $this->input->post('alasan_keterlambatan_staff_keuangan', TRUE);
			$data = array('alasan_keterlambatan_msb_keuangan' => $alasan_keterlambatan_staff_keuangan);
			$update = $this->admin_model->update_alasan_keterlambatan_staff_keuangan($data, $id_dokumen);
				if ($update) {
				echo "<script>alert('Berhasil Menambahkan Alasan Keterlambatan')</script>";
				echo "<meta http-equiv=refresh content=0;url=" . base_url() . "Admin/dokumen_view_staff_keuangan?id_dokumen=".$id_dokumen.">";
					}
			}
		public function alasan_keterlambatan_asman_keuangan() {
		
			$id_dokumen = $this->input->get('id_dokumen');
				$data['nama'] = $this->session->userdata('nama');
				$data['dokumennya'] = $this->admin_model->get_dokumen_asman_keuangan($id_dokumen);
				$data['id_users'] = $this->session->userdata('id_users');
				$data['email'] = $this->session->userdata('email');
				$data['username'] = $this->session->userdata('username');
				$data['id_role'] = $this->session->userdata('id_role');
				$this->load->view('header',$data);
				$this->load->view('sidebar', $data);
				$this->load->view('admin/alasan_keterlambatan_asman_keuangan', $data);
				$this->load->view('footer');
			}
		public function action_alasan_keterlambatan_asman_keuangan() {
	
			$id_dokumen = $this->input->post('id_dokumen');
			$alasan_keterlambatan_asman_keuangan = $this->input->post('alasan_keterlambatan_asman_keuangan', TRUE);
			$data = array('alasan_keterlambatan_msb_keuangan' => $alasan_keterlambatan_asman_keuangan);
			$update = $this->admin_model->update_alasan_keterlambatan_asman_keuangan($data, $id_dokumen);
				if ($update) {
				echo "<script>alert('Berhasil Menambahkan Alasan Keterlambatan')</script>";
				echo "<meta http-equiv=refresh content=0;url=" . base_url() . "Admin/dokumen_view_asman_keuangan?id_dokumen=".$id_dokumen.">";
					}
			}
		public function alasan_keterlambatan_msb_keuangan() {
		
			$id_dokumen = $this->input->get('id_dokumen');
				$data['nama'] = $this->session->userdata('nama');
				$data['dokumennya'] = $this->admin_model->get_dokumen_msb_keuangan($id_dokumen);
				$data['id_users'] = $this->session->userdata('id_users');
				$data['email'] = $this->session->userdata('email');
				$data['username'] = $this->session->userdata('username');
				$data['id_role'] = $this->session->userdata('id_role');
				$this->load->view('header',$data);
				$this->load->view('sidebar', $data);
				$this->load->view('admin/alasan_keterlambatan_msb_keuangan', $data);
				$this->load->view('footer');
			}
		public function action_alasan_keterlambatan_msb_keuangan() {
	
			$id_dokumen = $this->input->post('id_dokumen');
			$alasan_keterlambatan_msb_keuangan = $this->input->post('alasan_keterlambatan_msb_keuangan', TRUE);
			$data = array('alasan_keterlambatan_msb_keuangan' => $alasan_keterlambatan_msb_keuangan);
			$update = $this->admin_model->update_alasan_keterlambatan_msb_keuangan($data, $id_dokumen);
				if ($update) {
				echo "<script>alert('Berhasil Menambahkan Alasan Keterlambatan')</script>";
				echo "<meta http-equiv=refresh content=0;url=" . base_url() . "Admin/dokumen_view_msb_keuangan?id_dokumen=".$id_dokumen.">";
					}
			}
	
	
//Dokumen Direksi Pekerjaan
	public function dokumen_direksi_pekerjaan()
	{
			 
		$data['id_users'] = $this->session->userdata('id_users');
		$data['nama'] = $this->session->userdata('nama');
		$data['email'] = $this->session->userdata('email');
		$data['id_role'] = $this->session->userdata('id_role');
		$data['dokumen_view'] = $this->admin_model->tampil_dokumen_direksi_pekerjaan();
			 
		$this->load->view('header', $data);
		$this->load->view('sidebar', $data);
		$this->load->view('admin/dokumen_direksi_pekerjaan', $data);
		$this->load->view('footer');
	}
	
	public function dokumen_verifikasi_direksi_pekerjaan() {
		
		$id_dokumen = $this->input->get('id_dokumen');
		$data['dokumennya'] = $this->admin_model->get_dokumen_direksi_pekerjaan($id_dokumen);
            $data['nama'] = $this->session->userdata('nama');
            $data['id_users'] = $this->session->userdata('id_users');
            $data['email'] = $this->session->userdata('email');
            $data['username'] = $this->session->userdata('username');
			$data['id_role'] = $this->session->userdata('id_role');
			$this->load->view('header',$data);
			$this->load->view('sidebar', $data);
            $this->load->view('admin/dokumen_verifikasi_direksi_pekerjaan', $data);
            $this->load->view('footer');
		}

		//Dokumen Vendor
			public function dokumen_vendor()
			{
					
				$data['id_users'] = $this->session->userdata('id_users');
				$data['nama'] = $this->session->userdata('nama');
				$data['email'] = $this->session->userdata('email');
				$data['id_role'] = $this->session->userdata('id_role');
				$data['dokumen_view'] = $this->admin_model->tampil_dokumen_vendor();
				$data['jenis_dokumen'] = ['Kontrak', 'Laporan Kemajuan Pekerjaan', 'Berita Acara Pemeriksaan Pekerjaan', 'Berita Acara Serah Terima Pekerjaan', 'Berita Acara Masa Pemeliharaan', 'Invoice', 'Kwitansi', 'Faktur Pajak', 'Copy Npwp'];
					
				$this->load->view('header', $data);
				$this->load->view('sidebar', $data);
				$this->load->view('admin/dokumen_view_vendor', $data);
				$this->load->view('footer');
			}

			public function dokumen_verifikasi_vendor() {
		
				$nomor_kontrak = $this->input->get('nomor_kontrak');
					$data['nama'] = $this->session->userdata('nama');
					$data['id_users'] = $this->session->userdata('id_users');
					$data['email'] = $this->session->userdata('email');
					$data['username'] = $this->session->userdata('username');
					$data['id_role'] = $this->session->userdata('id_role');
					$this->load->view('header',$data);
					$this->load->view('sidebar', $data);
					$this->load->view('admin/dokumen_verifikasi_vendor', $data);
					$this->load->view('footer');
				}
	
	public function action_dokumen_verifikasi_direksi_pekerjaan(){
		//print_r ($_POST); exit;
		$id_dokumen = $this->input->post('id_dokumen');
		$cek = $this->admin_model->search_dokumen($id_dokumen);
		$jenis_dokumen = $cek['jenis_dokumen'];
		$email_penerima = $cek['email'];
		//print_r ($email_penerima); exit;
		$tgl= date('d-m-Y');
		   $tgl_komentar_direksi_pekerjaan = date('Y-m-d' , strtotime($tgl));
		
		   $nama_dokumen = $this->input->post('nama_dokumen');
		   $isi_komentar_direksi_pekerjaan = $this->input->post('isi_komentar_direksi_pekerjaan');
		   
		   
		    //KIRIM EMAIL START
		    $from_email = "admin@lokerprogrammer.com"; 
         $to_email = $email_penerima; 

         $config = Array(
               'protocol' => 'smtp',
                'smtp_host' => 'mail.lokerprogrammer.com',
                'smtp_port' => 465,
                'smtp_user' => $from_email,
                'smtp_pass' => 'K@rtini23',
                'mailtype'  => 'html', 
                'charset'   => 'iso-8859-1',
				'smtp_crypto'   => 'ssl',
        );

            $this->load->library('email', $config);
            $this->email->set_newline("\r\n");		

         $this->email->from($from_email, 'Admin e-NVOICE'); 
         $this->email->to($to_email);
         $this->email->subject('Komentar Mengenai Dokumen '.$jenis_dokumen.' Milik Anda'); 
         $this->email->message('Direksi Pekerjaan memberikan komentar pada Dokumen anda, "'.$isi_komentar_direksi_pekerjaan.'"'); 

         //Send mail 
         if($this->email->send()){
				//echo "<script>alert('Email berhasil terkirim')</script>";
         }else {
			//  show_error($this->email->print_debugger()); 
			//	echo "<script>alert('Email gagal dikirim')</script>";	
			//	exit;				
              //   echo "<meta http-equiv=refresh content=0;url=" . base_url() . "Admin/dokumen_view_direksi_pekerjaan?id_dokumen=".$id_dokumen.">";
         } 
		 
		 //KIRIM EMAIL END
		 
		   $data = array('nama_dokumen' => $nama_dokumen,'isi_komentar_direksi_pekerjaan' => $isi_komentar_direksi_pekerjaan,
		   'id_role' => 2,'tgl_komentar_direksi_pekerjaan' => $tgl_komentar_direksi_pekerjaan,);
            
			
			
			$update = $this->admin_model->insert_komen_dokumen_direksi_pekerjaan($data, $id_dokumen);
					if ($update) {
					echo "<script>alert('Berhasil Mengubah Data')</script>";
					echo "<meta http-equiv=refresh content=0;url=" . base_url() . "Admin/dokumen_direksi_pekerjaan?id_dokumen=".$id_dokumen.">";
						 
					} 
	}
	
	
//Dokumen staff_BAT
	public function dokumen_view_staff_bat()
	{
			 
		$data['id_users'] = $this->session->userdata('id_users');
		$data['nama'] = $this->session->userdata('nama');
		$data['email'] = $this->session->userdata('email');
		$data['id_role'] = $this->session->userdata('id_role');
		$data['dokumen_view'] = $this->admin_model->tampil_dokumen_staff_bat();
			 
		$this->load->view('header', $data);
		$this->load->view('sidebar', $data);
		$this->load->view('admin/dokumen_view_staff_bat', $data);
		$this->load->view('footer');
	}
	
	public function dokumen_verifikasi_staff_bat() {
		
			$id_dokumen = $this->input->get('id_dokumen');
            $data['dokumennya'] = $this->admin_model->get_dokumen_staff_bat($id_dokumen);
            $data['nama'] = $this->session->userdata('nama');
            $data['id_users'] = $this->session->userdata('id_users');
            $data['email'] = $this->session->userdata('email');
            $data['username'] = $this->session->userdata('username');
	$data['id_role'] = $this->session->userdata('id_role');
		$this->load->view('header',$data);
		$this->load->view('sidebar', $data);
            $this->load->view('admin/dokumen_verifikasi_staff_bat', $data);
            $this->load->view('footer');
	}
	
	public function action_dokumen_verifikasi_staff_bat(){
		//print_r ($_POST); exit;
		$id_dokumen = $this->input->post('id_dokumen');
		$cek = $this->admin_model->search_dokumen($id_dokumen);
		$jenis_dokumen = $cek['jenis_dokumen'];
		$email_penerima = $cek['email'];
		//print_r ($email_penerima); exit;
		$tgl= date('d-m-Y');
		   $tgl_komentar_staff_bat = date('Y-m-d' , strtotime($tgl));
		
		   $nama_dokumen = $this->input->post('nama_dokumen');
		   $isi_komentar_staff_bat = $this->input->post('isi_komentar_staff_bat');
		   
		   
		    //KIRIM EMAIL START
		    $from_email = "admin@lokerprogrammer.com"; 
         $to_email = $email_penerima; 

         $config = Array(
               'protocol' => 'smtp',
                'smtp_host' => 'mail.lokerprogrammer.com',
                'smtp_port' => 465,
                'smtp_user' => $from_email,
                'smtp_pass' => 'K@rtini23',
                'mailtype'  => 'html', 
                'charset'   => 'iso-8859-1',
				'smtp_crypto'   => 'ssl',
        );

            $this->load->library('email', $config);
            $this->email->set_newline("\r\n");		

         $this->email->from($from_email, 'Admin e-NVOICE'); 
         $this->email->to($to_email);
         $this->email->subject('Komentar Mengenai Dokumen '.$jenis_dokumen.' Milik Anda'); 
         $this->email->message('Staff Bidang Administrasi Teknik memberikan komentar pada Dokumen anda, "'.$isi_komentar_staff_bat.'"'); 

         //Send mail 
         if($this->email->send()){
				//echo "<script>alert('Email berhasil terkirim')</script>";
         }else {
			 // show_error($this->email->print_debugger()); 
				//echo "<script>alert('Email gagal dikirim')</script>";	
				//exit;				
                // echo "<meta http-equiv=refresh content=0;url=" . base_url() . "Admin/dokumen_view_staff_bat?id_dokumen=".$id_dokumen.">";
         } 
		 
		 //KIRIM EMAIL END
		 
		   $data = array('nama_dokumen' => $nama_dokumen,'isi_komentar_staff_bat' => $isi_komentar_staff_bat,
		   'id_role' => 5,'tgl_komentar_staff_bat' => $tgl_komentar_staff_bat,);
            
			
			
			$update = $this->admin_model->insert_komen_dokumen_staff_bat($data, $id_dokumen);
					if ($update) {
					echo "<script>alert('Berhasil Mengubah Data')</script>";
					echo "<meta http-equiv=refresh content=0;url=" . base_url() . "Admin/dokumen_view_staff_bat?id_dokumen=".$id_dokumen.">";
						 
					} 
	}
	
//Dokumen asman_BAT
	public function dokumen_view_asman_bat()
	{
			 
		$data['id_users'] = $this->session->userdata('id_users');
		$data['nama'] = $this->session->userdata('nama');
		$data['email'] = $this->session->userdata('email');
		$data['id_role'] = $this->session->userdata('id_role');
		$data['dokumen_view'] = $this->admin_model->tampil_dokumen_asman_bat();
			 
		$this->load->view('header', $data);
		$this->load->view('sidebar', $data);
		$this->load->view('admin/dokumen_view_asman_bat', $data);
		$this->load->view('footer');
		
	}
public function dokumen_verifikasi_asman_bat() {
		
			$id_dokumen = $this->input->get('id_dokumen');
            $data['dokumennya'] = $this->admin_model->get_dokumen_asman_bat($id_dokumen);
            $data['nama'] = $this->session->userdata('nama');
            $data['id_users'] = $this->session->userdata('id_users');
            $data['id_users'] = $this->session->userdata('email');
            $data['username'] = $this->session->userdata('username');
	$data['id_role'] = $this->session->userdata('id_role');
		$this->load->view('header',$data);
		$this->load->view('sidebar', $data);
            $this->load->view('admin/dokumen_verifikasi_asman_bat', $data);
            $this->load->view('footer');
	}
	
	public function action_dokumen_verifikasi_asman_bat(){
		//print_r ($_POST); exit;
		
		$id_dokumen = $this->input->post('id_dokumen');
		$cek = $this->admin_model->search_dokumen($id_dokumen);
		$jenis_dokumen = $cek['jenis_dokumen'];
		$email_penerima = $cek['email'];
		
		$tgl= date('d-m-Y');
		   $tgl_komentar_asman_bat = date('Y-m-d' , strtotime($tgl));
		$id_dokumen = $this->input->post('id_dokumen');
		   $nama_dokumen = $this->input->post('nama_dokumen');
		   $isi_komentar_asman_bat = $this->input->post('isi_komentar_asman_bat');
		   
		   
		    //KIRIM EMAIL START
		    $from_email = "admin@lokerprogrammer.com"; 
         $to_email = $email_penerima; 

         $config = Array(
                'protocol' => 'smtp',
                'smtp_host' => 'mail.lokerprogrammer.com',
                'smtp_port' => 465,
                'smtp_user' => $from_email,
                'smtp_pass' => 'K@rtini23',
                'mailtype'  => 'html', 
                'charset'   => 'iso-8859-1',
				'smtp_crypto'   => 'ssl',
        );

            $this->load->library('email', $config);
            $this->email->set_newline("\r\n");   

         $this->email->from($from_email, 'Admin e-NVOICE'); 
         $this->email->to($to_email);
         $this->email->subject('Komentar Mengenai Dokumen '.$jenis_dokumen.' Milik Anda'); 
         $this->email->message('Assistant Manager Sub Bidang Administrasi Teknik memberikan komentar pada Dokumen anda, "'.$isi_komentar_asman_bat.'"'); 

         //Send mail 
         if($this->email->send()){
				//echo "<script>alert('Email berhasil terkirim')</script>";
         }else {
				//echo "<script>alert('Email gagal dikirim')</script>";	
				//exit;				
                // echo "<meta http-equiv=refresh content=0;url=" . base_url() . "Admin/dokumen_view_staff_bat?id_dokumen=".$id_dokumen.">";
         } 
		 //KIRIM EMAIL END
		 
		   
		   $data = array('nama_dokumen' => $nama_dokumen,'isi_komentar_asman_bat' => $isi_komentar_asman_bat,
		   'id_role' => 6,'tgl_komentar_asman_bat' => $tgl_komentar_asman_bat,);
            
			$update = $this->admin_model->insert_komen_dokumen_asman_bat($data, $id_dokumen);
					if ($update) {
					echo "<script>alert('Berhasil Mengubah Data')</script>";
					echo "<meta http-equiv=refresh content=0;url=" . base_url() . "Admin/dokumen_view_asman_bat?id_dokumen=".$id_dokumen.">";
						 
					} 
		
	}
	
//Dokumen msb_BAT
	public function dokumen_view_msb_bat()
	{
			 
		$data['id_users'] = $this->session->userdata('id_users');
		$data['nama'] = $this->session->userdata('nama');
		$data['id_role'] = $this->session->userdata('id_role');
		$data['email'] = $this->session->userdata('email');
		$data['dokumen_view'] = $this->admin_model->tampil_dokumen_msb_bat();
			 
		$this->load->view('header', $data);
		$this->load->view('sidebar', $data);
		$this->load->view('admin/dokumen_view_msb_bat', $data);
		$this->load->view('footer');
		
	}
public function dokumen_verifikasi_msb_bat() {
			$id_dokumen = $this->input->get('id_dokumen');
			$cek = $this->admin_model->search_dokumen($id_dokumen);
			$jenis_dokumen = $cek['jenis_dokumen'];
			$email_penerima = $cek['email'];
			
            $data['dokumennya'] = $this->admin_model->get_dokumen_msb_bat($id_dokumen);
            $data['nama'] = $this->session->userdata('nama');
            $data['id_users'] = $this->session->userdata('id_users');
            $data['id_users'] = $this->session->userdata('email');
            $data['username'] = $this->session->userdata('username');
	$data['id_role'] = $this->session->userdata('id_role');
		$this->load->view('header',$data);
		$this->load->view('sidebar', $data);
            $this->load->view('admin/dokumen_verifikasi_msb_bat', $data);
            $this->load->view('footer');
	}
	
	public function action_dokumen_verifikasi_msb_bat(){
		//print_r ($_POST); exit;
		$tgl= date('d-m-Y');
		   $tgl_komentar_msb_bat = date('Y-m-d' , strtotime($tgl));
		$id_dokumen = $this->input->post('id_dokumen');
			$cek = $this->admin_model->search_dokumen($id_dokumen);
			$jenis_dokumen = $cek['jenis_dokumen'];
			$email_penerima = $cek['email'];
		   $nama_dokumen = $this->input->post('nama_dokumen');
		   $isi_komentar_msb_bat = $this->input->post('isi_komentar_msb_bat');
		   
		    //KIRIM EMAIL START
		    $from_email = "admin@lokerprogrammer.com"; 
         $to_email = $email_penerima; 

         $config = Array(
                'protocol' => 'smtp',
                'smtp_host' => 'mail.lokerprogrammer.com',
                'smtp_port' => 465,
                'smtp_user' => $from_email,
                'smtp_pass' => 'K@rtini23',
                'mailtype'  => 'html', 
                'charset'   => 'iso-8859-1',
				'smtp_crypto'   => 'ssl',
        );

            $this->load->library('email', $config);
            $this->email->set_newline("\r\n");   

         $this->email->from($from_email, 'Admin e-NVOICE'); 
         $this->email->to($to_email);
         $this->email->subject('Komentar Mengenai Dokumen '.$jenis_dokumen.' Milik Anda'); 
         $this->email->message('Manager Sub Bidang Administrasi Teknik memberikan komentar pada Dokumen anda, "'.$isi_komentar_msb_bat.'"'); 

         //Send mail 
         if($this->email->send()){
				//echo "<script>alert('Email berhasil terkirim')</script>";
         }else {
				//echo "<script>alert('Email gagal dikirim')</script>";	
				//exit;				
                // echo "<meta http-equiv=refresh content=0;url=" . base_url() . "Admin/dokumen_view_staff_bat?id_dokumen=".$id_dokumen.">";
         } 
		 //KIRIM EMAIL END
		 
		   $data = array('nama_dokumen' => $nama_dokumen,'isi_komentar_msb_bat' => $isi_komentar_msb_bat,
		   'id_role' => 3,'tgl_komentar_msb_bat' => $tgl_komentar_msb_bat,);
            
			$update = $this->admin_model->insert_komen_dokumen_msb_bat($data, $id_dokumen);
					if ($update) {
					echo "<script>alert('Berhasil Mengubah Data')</script>";
					echo "<meta http-equiv=refresh content=0;url=" . base_url() . "Admin/dokumen_view_msb_bat?id_dokumen=".$id_dokumen.">";
						 
					} 
		
	}
	
	
//Dokumen staff_keuangan
	public function dokumen_view_staff_keuangan()
	{
			 
		$data['id_users'] = $this->session->userdata('id_users');
		$data['nama'] = $this->session->userdata('nama');
		
            $data['email'] = $this->session->userdata('email');
		$data['id_role'] = $this->session->userdata('id_role');
		$data['dokumen_view'] = $this->admin_model->tampil_dokumen_staff_keuangan();
			 
		$this->load->view('header', $data);
		$this->load->view('sidebar', $data);
		$this->load->view('admin/dokumen_view_staff_keuangan', $data);
		$this->load->view('footer');
	}
public function dokumen_verifikasi_staff_keuangan() {
		
			$id_dokumen = $this->input->get('id_dokumen');
            $data['dokumennya'] = $this->admin_model->get_dokumen_staff_keuangan($id_dokumen);
            $data['nama'] = $this->session->userdata('nama');
            $data['id_users'] = $this->session->userdata('id_users');
            $data['email'] = $this->session->userdata('email');
            $data['username'] = $this->session->userdata('username');
	$data['id_role'] = $this->session->userdata('id_role');
		$this->load->view('header',$data);
		$this->load->view('sidebar', $data);
            $this->load->view('admin/dokumen_verifikasi_staff_keuangan', $data);
            $this->load->view('footer');
	}
	
	public function action_dokumen_verifikasi_staff_keuangan(){
		//print_r ($_POST); exit;
		$id_dokumen = $this->input->post('id_dokumen');
		$cek = $this->admin_model->search_dokumen($id_dokumen);
		$jenis_dokumen = $cek['jenis_dokumen'];
		$email_penerima = $cek['email'];
		//print_r ($email_penerima); exit;
		$tgl= date('d-m-Y');
		   $tgl_komentar_staff_keuangan = date('Y-m-d' , strtotime($tgl));
		
		   $nama_dokumen = $this->input->post('nama_dokumen');
		   $isi_komentar_staff_keuangan = $this->input->post('isi_komentar_staff_keuangan');
		   
		   
		    //KIRIM EMAIL START
		    $from_email = "admin@lokerprogrammer.com"; 
         $to_email = $email_penerima; 

         $config = Array(
               'protocol' => 'smtp',
                'smtp_host' => 'mail.lokerprogrammer.com',
                'smtp_port' => 465,
                'smtp_user' => $from_email,
                'smtp_pass' => 'K@rtini23',
                'mailtype'  => 'html', 
                'charset'   => 'iso-8859-1',
				'smtp_crypto'   => 'ssl',
        );

            $this->load->library('email', $config);
            $this->email->set_newline("\r\n");		

         $this->email->from($from_email, 'Admin e-NVOICE'); 
         $this->email->to($to_email);
         $this->email->subject('Komentar Mengenai Dokumen '.$jenis_dokumen.' Milik Anda'); 
         $this->email->message('Staff Bidang Keuangan memberikan komentar pada Dokumen anda, "'.$isi_komentar_staff_keuangan.'"'); 

         //Send mail 
         if($this->email->send()){
				//echo "<script>alert('Email berhasil terkirim')</script>";
         }else {
			 // show_error($this->email->print_debugger()); 
				//echo "<script>alert('Email gagal dikirim')</script>";	
				//exit;				
               //  echo "<meta http-equiv=refresh content=0;url=" . base_url() . "Admin/dokumen_view_staff_keuangan?id_dokumen=".$id_dokumen.">";
         } 
		 
		 //KIRIM EMAIL END
		 
		   $data = array('nama_dokumen' => $nama_dokumen,'isi_komentar_staff_keuangan' => $isi_komentar_staff_keuangan,
		   'id_role' => 7,'tgl_komentar_staff_keuangan' => $tgl_komentar_staff_keuangan,);
            
			
			
			$update = $this->admin_model->insert_komen_dokumen_staff_keuangan($data, $id_dokumen);
					if ($update) {
					echo "<script>alert('Berhasil Mengubah Data')</script>";
					echo "<meta http-equiv=refresh content=0;url=" . base_url() . "Admin/dokumen_view_staff_keuangan?id_dokumen=".$id_dokumen.">";
						 
					} 
	}
	
		
//Dokumen asman_keuangan
	public function dokumen_view_asman_keuangan()
	{
			 
		$data['id_users'] = $this->session->userdata('id_users');
		$data['nama'] = $this->session->userdata('nama');
		$data['id_role'] = $this->session->userdata('id_role');
		$data['email'] = $this->session->userdata('email');
		$data['dokumen_view'] = $this->admin_model->tampil_dokumen_asman_keuangan();
			 
		$this->load->view('header', $data);
		$this->load->view('sidebar', $data);
		$this->load->view('admin/dokumen_view_asman_keuangan', $data);
		$this->load->view('footer');
		
	}
public function dokumen_verifikasi_asman_keuangan() {
		
			$id_dokumen = $this->input->get('id_dokumen');
            $data['dokumennya'] = $this->admin_model->get_dokumen_asman_keuangan($id_dokumen);
            $data['nama'] = $this->session->userdata('nama');
            $data['id_users'] = $this->session->userdata('id_users');
            $data['email'] = $this->session->userdata('email');
            $data['username'] = $this->session->userdata('username');
	$data['id_role'] = $this->session->userdata('id_role');
		$this->load->view('header',$data);
		$this->load->view('sidebar', $data);
            $this->load->view('admin/dokumen_verifikasi_asman_keuangan', $data);
            $this->load->view('footer');
	}
	
	public function action_dokumen_verifikasi_asman_keuangan(){
		//print_r ($_POST); exit;
		
		$id_dokumen = $this->input->post('id_dokumen');
		$cek = $this->admin_model->search_dokumen($id_dokumen);
		$jenis_dokumen = $cek['jenis_dokumen'];
		$email_penerima = $cek['email'];
		
		$tgl= date('d-m-Y');
		   $tgl_komentar_asman_keuangan = date('Y-m-d' , strtotime($tgl));
		$id_dokumen = $this->input->post('id_dokumen');
		   $nama_dokumen = $this->input->post('nama_dokumen');
		   $isi_komentar_asman_keuangan = $this->input->post('isi_komentar_asman_keuangan');
		   
		   
		    //KIRIM EMAIL START
		    $from_email = "admin@lokerprogrammer.com"; 
         $to_email = $email_penerima; 

         $config = Array(
                'protocol' => 'smtp',
                'smtp_host' => 'mail.lokerprogrammer.com',
                'smtp_port' => 465,
                'smtp_user' => $from_email,
                'smtp_pass' => 'K@rtini23',
                'mailtype'  => 'html', 
                'charset'   => 'iso-8859-1',
				'smtp_crypto'   => 'ssl',
        );

            $this->load->library('email', $config);
            $this->email->set_newline("\r\n");   

         $this->email->from($from_email, 'Admin e-NVOICE'); 
         $this->email->to($to_email);
         $this->email->subject('Komentar Mengenai Dokumen '.$jenis_dokumen.' Milik Anda'); 
         $this->email->message('Assistant Manager Sub Bidang Administrasi Teknik memberikan komentar pada Dokumen anda, "'.$isi_komentar_asman_keuangan.'"'); 

         //Send mail 
         if($this->email->send()){
				//echo "<script>alert('Email berhasil terkirim')</script>";
         }else {
				//echo "<script>alert('Email gagal dikirim')</script>";	
				//exit;				
                // echo "<meta http-equiv=refresh content=0;url=" . base_url() . "Admin/dokumen_view_staff_bat?id_dokumen=".$id_dokumen.">";
         } 
		 //KIRIM EMAIL END
		 
		   
		   $data = array('nama_dokumen' => $nama_dokumen,'isi_komentar_asman_keuangan' => $isi_komentar_asman_keuangan,
		   'id_role' => 8,'tgl_komentar_asman_keuangan' => $tgl_komentar_asman_keuangan,);
            
			$update = $this->admin_model->insert_komen_dokumen_asman_keuangan($data, $id_dokumen);
					if ($update) {
					echo "<script>alert('Berhasil Mengubah Data')</script>";
					echo "<meta http-equiv=refresh content=0;url=" . base_url() . "Admin/dokumen_view_asman_keuangan?id_dokumen=".$id_dokumen.">";
						 
					} 
		
	}
	
//Dokumen msb_keuangan
	public function dokumen_view_msb_keuangan()
	{
			 
		$data['id_users'] = $this->session->userdata('id_users');
		$data['nama'] = $this->session->userdata('nama');
            $data['email'] = $this->session->userdata('email');
		$data['id_role'] = $this->session->userdata('id_role');
		$data['dokumen_view'] = $this->admin_model->tampil_dokumen_msb_keuangan();
			 
		$this->load->view('header', $data);
		$this->load->view('sidebar', $data);
		$this->load->view('admin/dokumen_view_msb_keuangan', $data);
		$this->load->view('footer');
		
	}
public function dokumen_verifikasi_msb_keuangan() {
			$id_dokumen = $this->input->get('id_dokumen');
			$cek = $this->admin_model->search_dokumen($id_dokumen);
			$jenis_dokumen = $cek['jenis_dokumen'];
			$email_penerima = $cek['email'];
			
            $data['dokumennya'] = $this->admin_model->get_dokumen_msb_keuangan($id_dokumen);
            $data['nama'] = $this->session->userdata('nama');
            $data['id_users'] = $this->session->userdata('id_users');
            $data['email'] = $this->session->userdata('email');
            $data['username'] = $this->session->userdata('username');
	$data['id_role'] = $this->session->userdata('id_role');
		$this->load->view('header',$data);
		$this->load->view('sidebar', $data);
            $this->load->view('admin/dokumen_verifikasi_msb_keuangan', $data);
            $this->load->view('footer');
	}
	
	public function action_dokumen_verifikasi_msb_keuangan(){
		//print_r ($_POST); exit;
		$tgl= date('d-m-Y');
		   $tgl_komentar_msb_keuangan = date('Y-m-d' , strtotime($tgl));
		$id_dokumen = $this->input->post('id_dokumen');
			$cek = $this->admin_model->search_dokumen($id_dokumen);
			$jenis_dokumen = $cek['jenis_dokumen'];
			$email_penerima = $cek['email'];
		   $nama_dokumen = $this->input->post('nama_dokumen');
		   $isi_komentar_msb_keuangan = $this->input->post('isi_komentar_msb_keuangan');
		   
		    //KIRIM EMAIL START
		    $from_email = "admin@lokerprogrammer.com"; 
         $to_email = $email_penerima; 

         $config = Array(
                'protocol' => 'smtp',
                'smtp_host' => 'mail.lokerprogrammer.com',
                'smtp_port' => 465,
                'smtp_user' => $from_email,
                'smtp_pass' => 'K@rtini23',
                'mailtype'  => 'html', 
                'charset'   => 'iso-8859-1',
				'smtp_crypto'   => 'ssl',
        );

            $this->load->library('email', $config);
            $this->email->set_newline("\r\n");   

         $this->email->from($from_email, 'Admin e-NVOICE'); 
         $this->email->to($to_email);
         $this->email->subject('Komentar Mengenai Dokumen '.$jenis_dokumen.' Milik Anda'); 
         $this->email->message('Manager Sub Bidang Administrasi Teknik memberikan komentar pada Dokumen anda, "'.$isi_komentar_msb_keuangan.'"
		 Dokumen anda telah melewati proses verifikasi dan akan segera dilakukan pembayaran
		 '); 

         //Send mail 
         if($this->email->send()){
				//echo "<script>alert('Email berhasil terkirim')</script>";
         }else {
			//	echo "<script>alert('Email gagal dikirim')</script>";	
				//exit;				
               //  echo "<meta http-equiv=refresh content=0;url=" . base_url() . "Admin/dokumen_view_staff_bat?id_dokumen=".$id_dokumen.">";
         } 
		 //KIRIM EMAIL END
		 
		   $data = array('nama_dokumen' => $nama_dokumen,'isi_komentar_msb_keuangan' => $isi_komentar_msb_keuangan,
		   'id_role' => 9,'tgl_komentar_msb_keuangan' => $tgl_komentar_msb_keuangan,);
            
			$update = $this->admin_model->insert_komen_dokumen_msb_keuangan($data, $id_dokumen);
					if ($update) {
					echo "<script>alert('Berhasil Mengubah Data')</script>";
					echo "<meta http-equiv=refresh content=0;url=" . base_url() . "Admin/dokumen_view_msb_keuangan?id_dokumen=".$id_dokumen.">";
						 
					} 
		
	}
	
	
	
	
	//konsultan_view
	public function konsultan_view()
	{
			 
		$id_users = $this->session->userdata('id_users');
		$data['nama'] = $this->session->userdata('nama');
		$data['id_users'] = $this->session->userdata('id_users');
            $data['email'] = $this->session->userdata('email');
		$data['username'] = $this->session->userdata('username');
		$data['id_role'] = $this->session->userdata('id_role');
		$data['konsultan_view'] = $this->admin_model->tampil_konsultan($id_users);
			 
		$this->load->view('header', $data);
		$this->load->view('sidebar', $data);
		$this->load->view('admin/konsultan_view', $data);
		$this->load->view('footer');
		
	}
	
	public function konsultan_add() {
	$data['email'] = $this->session->userdata('email');
	$data['nama'] = $this->session->userdata('nama');
	$data['id_users'] = $this->session->userdata('id_users');
            $data['email'] = $this->session->userdata('email');
	$data['username'] = $this->session->userdata('username');
		$data['id_role'] = $this->session->userdata('id_role');
        	$this->load->view('header', $data);
            $this->load->view('sidebar', $data);
            $this->load->view('admin/konsultan_add', $data);
            $this->load->view('footer', $data);
    }
	
	public function action_konsultan_add() {
		//print_r($_POST); exit;
			$id_users = $this->session->userdata('id_users');
			//$email = $this->session->userdata('email');
		   $tgl= date('d-m-Y');
		   $nomor_kontrak = $this->input->post('nomor_kontrak');
		   $nomor_surat_permohonan_pembayaran = $this->input->post('nomor_surat_permohonan_pembayaran');
		   $email = $this->input->post('email');
		   $jenis_dokumen = $this->input->post('jenis_dokumen');
		   $tgl_upload = date('Y-m-d' , strtotime($tgl));
		   $tgl_berakhir = date('Y-m-d', strtotime('+1 days', strtotime($tgl)));
		  
		   
		   $pathToUpload = './public/document/' . $id_users.'/';
		if ( ! file_exists($pathToUpload) )
		{
			$create = mkdir($pathToUpload, 0777);
			
			if ( ! $create )
			return;
		}
				// START setting konfigurasi upload pdf
			$config1['upload_path'] = './public/document/'. $id_users.'/';
						if ( ! file_exists($config1['upload_path']) )
					{
						$create = mkdir($config1['upload_path'], 0777);
						
						if ( ! $create )
						return;
					}
			$config1['allowed_types'] = 'pdf';
			$config1['overwrite']			= true;
			$config1['max_size']             = 10024; // 10MB
			
			// START load library upload upload_dokumen
			$this->load->library('upload', $config1);
			$this->upload->initialize($config1);
			if (!$this->upload->do_upload('upload_dokumen')) {
				$error = $this->upload->display_errors();
				// menampilkan pesan error
				//print_r($error);
			} else {
				$result1 = $this->upload->data();
				echo "<pre>";
				//print_r($result); exit;
				echo "</pre>";
			}
			$upload_dokumen = !empty($result1['file_name']) ? $result1['file_name'] : '';
			//print_r ($document); exit;
		   	// END load library upload upload_dokumen
		    

			$data = array('tgl_upload' => $tgl_upload,'tgl_berakhir' => $tgl_berakhir,'nomor_kontrak' => $nomor_kontrak,'nomor_surat_permohonan_pembayaran' => $nomor_surat_permohonan_pembayaran,'jenis_dokumen' => $jenis_dokumen,'nama_dokumen' => $upload_dokumen,
			'email' => $email,'id_users' => $id_users,
			'id_role' => 9,
			'id_kontrak' => 1);
                    $insert = $this->admin_model->add_konsultan_data($data);
                    if ($insert) {
                        echo "<script>alert('Berhasil Menambah Data')</script>";
                        echo "<meta http-equiv=refresh content=0;url=" . base_url() . "Admin/konsultan_view />";
                    }
		}
		
		
	
    public function konsultan_delete() {
			$id_dokumen = $this->input->get('id_dokumen');
            $delete = $this->admin_model->konsultan_delete($id_dokumen);
            if ($delete) {
				echo "<script>alert('Berhasil Menghapus Data')</script>";
				echo "<meta http-equiv=refresh content=0;url=" . base_url() . "Admin/konsultan_view>";
            }
        }
		//Konsultan END
		
    	
	//konstruksi_view
	public function konstruksi_view()
	{
			 
		$id_users = $this->session->userdata('id_users');
		$data['nama'] = $this->session->userdata('nama');
		$data['id_users'] = $this->session->userdata('id_users');
		$data['username'] = $this->session->userdata('username');
		$data['id_role'] = $this->session->userdata('id_role');
		$data['konstruksi_view'] = $this->admin_model->tampil_konstruksi($id_users);
			 
		$this->load->view('header', $data);
		$this->load->view('sidebar', $data);
		$this->load->view('admin/konstruksi_view', $data);
		$this->load->view('footer');
		
	}
	
	public function konstruksi_add() {
	$data['email'] = $this->session->userdata('email');
	$data['nama'] = $this->session->userdata('nama');
	$data['id_users'] = $this->session->userdata('id_users');
	$data['username'] = $this->session->userdata('username');
		$data['id_role'] = $this->session->userdata('id_role');
        	$this->load->view('header', $data);
            $this->load->view('sidebar', $data);
            $this->load->view('admin/konstruksi_add', $data);
            $this->load->view('footer', $data);
    }
	
	public function action_konstruksi_add() {
		//print_r($_POST); exit;
			$id_users = $this->session->userdata('id_users');
			//$email = $this->session->userdata('email');
		   $tgl= date('d-m-Y');
		   $nomor_kontrak = $this->input->post('nomor_kontrak');
		   $nomor_surat_permohonan_pembayaran = $this->input->post('nomor_surat_permohonan_pembayaran');
		   $email = $this->input->post('email');
		   $jenis_dokumen = $this->input->post('jenis_dokumen');
		   $tgl_upload = date('Y-m-d' , strtotime($tgl));
		   $tgl_berakhir = date('Y-m-d', strtotime('+1 days', strtotime($tgl)));
		   
		   
		   $pathToUpload = './public/document/' . $id_users.'/';
		if ( ! file_exists($pathToUpload) )
		{
			$create = mkdir($pathToUpload, 0777);
			
			if ( ! $create )
			return;
		}
				// START setting konfigurasi upload pdf
			$config1['upload_path'] = './public/document/'. $id_users.'/';
						if ( ! file_exists($config1['upload_path']) )
					{
						$create = mkdir($config1['upload_path'], 0777);
						
						if ( ! $create )
						return;
					}
			$config1['allowed_types'] = 'pdf';
			$config1['overwrite']			= true;
			$config1['max_size']             = 10024; // 10MB
			
			// START load library upload upload_dokumen
			$this->load->library('upload', $config1);
			$this->upload->initialize($config1);
			if (!$this->upload->do_upload('upload_dokumen')) {
				$error = $this->upload->display_errors();
				// menampilkan pesan error
				//print_r($error);
			} else {
				$result1 = $this->upload->data();
				echo "<pre>";
				//print_r($result); exit;
				echo "</pre>";
			}
			$upload_dokumen = !empty($result1['file_name']) ? $result1['file_name'] : '';
			//print_r ($document); exit;
		   	// END load library upload upload_dokumen
		    

			$data = array('tgl_upload' => $tgl_upload,'tgl_berakhir' => $tgl_berakhir,'nomor_surat_permohonan_pembayaran' => $nomor_surat_permohonan_pembayaran,'nomor_kontrak' => $nomor_kontrak,'jenis_dokumen' => $jenis_dokumen,'nama_dokumen' => $upload_dokumen,
			'email' => $email,'id_users' => $id_users,
			'id_role' => 9,
			'id_kontrak' => 2);
                    $insert = $this->admin_model->add_konstruksi_data($data);
                    if ($insert) {
                        echo "<script>alert('Berhasil Menambah Data')</script>";
                        echo "<meta http-equiv=refresh content=0;url=" . base_url() . "Admin/konstruksi_view />";
                    }
		}
		
		
	
    public function konstruksi_delete() {
			$id_dokumen = $this->input->get('id_dokumen');
            $delete = $this->admin_model->konstruksi_delete($id_dokumen);
            if ($delete) {
				echo "<script>alert('Berhasil Menghapus Data')</script>";
				echo "<meta http-equiv=refresh content=0;url=" . base_url() . "Admin/konstruksi_view>";
            }
        }
		//konstruksi END
		
    	
	//barang_view
	public function barang_view()
	{
			 
		$id_users = $this->session->userdata('id_users');
		$data['nama'] = $this->session->userdata('nama');
		$data['id_users'] = $this->session->userdata('id_users');
		$data['username'] = $this->session->userdata('username');
		$data['id_role'] = $this->session->userdata('id_role');
		$data['barang_view'] = $this->admin_model->tampil_barang($id_users);
			 
		$this->load->view('header', $data);
		$this->load->view('sidebar', $data);
		$this->load->view('admin/barang_view', $data);
		$this->load->view('footer');
		
	}
	
	public function barang_add() {
	$data['email'] = $this->session->userdata('email');
	$data['nama'] = $this->session->userdata('nama');
	$data['id_users'] = $this->session->userdata('id_users');
	$data['username'] = $this->session->userdata('username');
		$data['id_role'] = $this->session->userdata('id_role');
        	$this->load->view('header', $data);
            $this->load->view('sidebar', $data);
            $this->load->view('admin/barang_add', $data);
            $this->load->view('footer', $data);
    }
	
	public function action_barang_add() {
		//print_r($_POST); exit;
			$id_users = $this->session->userdata('id_users');
			//$email = $this->session->userdata('email');
		   $tgl= date('d-m-Y');
		   $nomor_kontrak = $this->input->post('nomor_kontrak');
		   $nomor_surat_permohonan_pembayaran = $this->input->post('nomor_surat_permohonan_pembayaran');
		   $email = $this->input->post('email');
		   $jenis_dokumen = $this->input->post('jenis_dokumen');
		   $tgl_upload = date('Y-m-d' , strtotime($tgl));
		   $tgl_berakhir = date('Y-m-d', strtotime('+1 days', strtotime($tgl)));
		   
		   $pathToUpload = './public/document/' . $id_users.'/';
		if ( ! file_exists($pathToUpload) )
		{
			$create = mkdir($pathToUpload, 0777);
			
			if ( ! $create )
			return;
		}
				// START setting konfigurasi upload pdf
			$config1['upload_path'] = './public/document/'. $id_users.'/';
						if ( ! file_exists($config1['upload_path']) )
					{
						$create = mkdir($config1['upload_path'], 0777);
						
						if ( ! $create )
						return;
					}
			$config1['allowed_types'] = 'pdf';
			$config1['overwrite']			= true;
			$config1['max_size']             = 10024; // 10MB
			
			// START load library upload upload_dokumen
			$this->load->library('upload', $config1);
			$this->upload->initialize($config1);
			if (!$this->upload->do_upload('upload_dokumen')) {
				$error = $this->upload->display_errors();
				// menampilkan pesan error
				//print_r($error);
			} else {
				$result1 = $this->upload->data();
				echo "<pre>";
				//print_r($result); exit;
				echo "</pre>";
			}
			$upload_dokumen = !empty($result1['file_name']) ? $result1['file_name'] : '';
			//print_r ($document); exit;
		   	// END load library upload upload_dokumen
		    

			$data = array('tgl_upload' => $tgl_upload,'nomor_surat_permohonan_pembayaran' => $nomor_surat_permohonan_pembayaran,'tgl_berakhir' => $tgl_berakhir,'nomor_kontrak' => $nomor_kontrak,'jenis_dokumen' => $jenis_dokumen,'nama_dokumen' => $upload_dokumen,
			'email' => $email,'id_users' => $id_users,
			'id_role' => 9,
			'id_kontrak' => 3);
                    $insert = $this->admin_model->add_barang_data($data);
                    if ($insert) {
                        echo "<script>alert('Berhasil Menambah Data')</script>";
                        echo "<meta http-equiv=refresh content=0;url=" . base_url() . "Admin/barang_view />";
                    }
		}
		
		
	
    public function barang_delete() {
			$id_dokumen = $this->input->get('id_dokumen');
            $delete = $this->admin_model->barang_delete($id_dokumen);
            if ($delete) {
				echo "<script>alert('Berhasil Menghapus Data')</script>";
				echo "<meta http-equiv=refresh content=0;url=" . base_url() . "Admin/barang_view>";
            }
        }
		//barang END
		
    	
		
		
}
