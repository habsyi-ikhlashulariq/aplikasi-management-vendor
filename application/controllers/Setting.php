<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends CI_Controller {
	public $data = array();

    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->helper(array('form', 'url'));
        $this->load->library(array('form_validation', 'session','enkripsi'));
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
	

//PENIALIAN USER
	public function penilaian_view() {
        
			$data['penilaian_user_direksi_pekerjaan'] = $this->Setting_model->tampil_penilaian_user_direksi_pekerjaan();
			$data['penilaian_user_staff_bat'] = $this->Setting_model->tampil_penilaian_user_staff_bat();
			$data['penilaian_user_asman_bat'] = $this->Setting_model->tampil_penilaian_user_asman_bat();
			$data['penilaian_user_msb_bat'] = $this->Setting_model->tampil_penilaian_user_msb_bat();
			$data['penilaian_user_staff_keuangan'] = $this->Setting_model->tampil_penilaian_user_staff_keuangan();
			$data['penilaian_user_asman_keuangan'] = $this->Setting_model->tampil_penilaian_user_asman_keuangan();
			$data['penilaian_user_msb_keuangan'] = $this->Setting_model->tampil_penilaian_user_msb_keuangan();
			$data['nama'] = $this->session->userdata('nama');
			$data['username'] = $this->session->userdata('username');
			$data['id_role'] = $this->session->userdata('id_role');
			$data['email'] = $this->session->userdata('email');
			$this->load->view('header',$data);
			$this->load->view('sidebar', $data);
            $this->load->view('Setting/penilaian_view',$data);
            $this->load->view('footer');
    }

//USERS
	public function users_view() {
        
			$data['users_view'] = $this->admin_model->tampil_user();
			$data['nama'] = $this->session->userdata('nama');
			$data['username'] = $this->session->userdata('username');
			$data['id_role'] = $this->session->userdata('id_role');
			$data['email'] = $this->session->userdata('email');
		$this->load->view('header',$data);
		$this->load->view('sidebar', $data);
            $this->load->view('Setting/users_view',$data);
            $this->load->view('footer');
    }
	
	public function users_add() {
        	$data['username'] = $this->session->userdata('username');
			$data['nama'] = $this->session->userdata('nama');
	$data['id_role'] = $this->session->userdata('id_role');
		$this->load->view('header',$data);
		$this->load->view('sidebar', $data);
            $this->load->view('Setting/users_add');
            $this->load->view('footer');
    }
	
	public function action_users_add() {
		//print_r($_POST); exit;
			$nama = $this->input->post('nama');
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$password_baru = $this->enkripsi->encrypt_decrypt('encrypt', $password);
			//$password = hash("sha256",$this->input->post('password'));
			$role = $this->input->post('role');
			$email = $this->input->post('email');
			$data = array('username' => $username,'password' => $password_baru,'id_role' => $role,'nama' => $nama,'email' => $email,'status' => 'aktif');
			$insert = $this->admin_model->add_users_data($data);
			if ($insert) {
				echo "<script>alert('Berhasil Menambah Data')</script>";
				echo "<meta http-equiv=refresh content=0;url=" . base_url() . "setting/users_view>";
			}
    }
	
	public function users_edit() {
		
			$id_users = $this->input->get('id_users');
            $data['usernya'] = $this->admin_model->get_users($id_users);
            $data['username'] = $this->session->userdata('username');
			$data['nama'] = $this->session->userdata('nama');
			$data['id_role'] = $this->session->userdata('id_role');
			$data['stts'] =['aktif', 'nonaktif'];
			$this->load->view('header',$data);
			$this->load->view('sidebar', $data);
            $this->load->view('Setting/users_edit', $data);
            $this->load->view('footer');
	}
	
	public function action_users_edit(){
		//print_r ($_POST); exit;
		$id_users = $this->input->post('id_users');
		   $nama = $this->input->post('nama');
		   $username = $this->input->post('username');
		   $password = $this->input->post('password');
		   $password_baru = $this->enkripsi->encrypt_decrypt('encrypt', $password);
		   $role = $this->input->post('role');
		   $email = $this->input->post('email');
		   $stts = $this->input->post('stts');
			$data = array('username' => $username,'password' => $password_baru,'id_role' => $role,'nama' => $nama, 'status' => $stts,'email' => $email);
            
			$update = $this->admin_model->update_users($data, $id_users);
					if ($update) {
					echo "<script>alert('Berhasil Mengubah Data')</script>";
					echo "<meta http-equiv=refresh content=0;url=" . base_url() . "setting/users_view?id_users=".$id_users.">";
						 
					} 
		
	}
	
    public function users_delete() {
			$id_users = $this->input->get('id_users');
            $delete = $this->admin_model->users_delete($id_users);
            if ($delete) {
				echo "<script>alert('Berhasil Menghapus Data')</script>";
				echo "<meta http-equiv=refresh content=0;url=" . base_url() . "setting/users_view>";
            }
        }
    	
	
	//Vendor
	public function vendor_view() {
       
			
			$data['vendor_view'] = $this->admin_model->tampil_vendor();
			$data['nama'] = $this->session->userdata('nama');
			$data['username'] = $this->session->userdata('username');
	$data['id_role'] = $this->session->userdata('id_role');
		$this->load->view('header',$data);
		$this->load->view('sidebar', $data);
            $this->load->view('Setting/vendor_view',$data);
            $this->load->view('footer');
		
    }
	
	public function vendor_add() {
		
			
        	$data['username'] = $this->session->userdata('username');
			$data['nama'] = $this->session->userdata('nama');
	$data['id_role'] = $this->session->userdata('id_role');
		$this->load->view('header',$data);
		$this->load->view('sidebar', $data);
            $this->load->view('Setting/vendor_add');
            $this->load->view('footer');
		
    }
	
	public function action_vendor_add() {
		
			
			$nama_vendor = $this->input->post('nama_vendor', TRUE);
			$alamat_vendor = $this->input->post('alamat_vendor', TRUE);
			$telepon = $this->input->post('telepon', TRUE);
			$data= array('nama_vendor' => $nama_vendor,'alamat_vendor' => $alamat_vendor,'telepon' => $telepon,);
			$insert = $this->admin_model->add_vendor_data($data);
			
			if ($insert) {
				echo "<script>alert('Berhasil Menambah Data')</script>";
				echo "<meta http-equiv=refresh content=0;url=" . base_url() . "setting/vendor_view>";
			}
		
    }
	
	public function vendor_edit() {
		
			
			$id_vendor = $this->input->get('id_vendor');
            $data['vendornya'] = $this->admin_model->get_vendor($id_vendor);
            $this->data['title'] = 'Update Vendor :: ';
            $this->load->view('header', $this->data);
            $this->load->view('sidebar', $data);
            $this->load->view('Setting/vendor_edit', $data);
            $this->load->view('footer');
		
	}
	
	public function action_vendor_edit(){
	//print_r ($_POST); exit;
		
					
					$id_vendor = $this->input->post('id_vendor');
					$nama_vendor = $this->input->post('nama_vendor', TRUE);
					$alamat_vendor = $this->input->post('alamat_vendor', TRUE);
					$telepon = $this->input->post('telepon', TRUE);
					$data = array('nama_vendor' => $nama_vendor,'alamat_vendor' => $alamat_vendor,'telepon' => $telepon,);
					$update = $this->admin_model->update_vendor($data, $id_vendor);
							if ($update) {
							echo "<script>alert('Berhasil Mengubah Data')</script>";
							echo "<meta http-equiv=refresh content=0;url=" . base_url() . "setting/vendor_view?id_vendor=".$id_vendor.">";
							} 
						
			}
	
	public function vendor_delete() {
	
			
				$id_vendor = $this->input->get('id_vendor');
				$delete = $this->admin_model->vendor_delete($id_vendor);
				if ($delete) {
					
					$this->session->set_flashdata('msg','User-deleted');
					echo "<meta http-equiv=refresh content=0;url=" . base_url() . "setting/vendor_view>";
					//echo "<script>alert('Berhasil Menghapus Data')</script>";
				}
			
        }
	
	//form
	public function form_view() {
       
			
	$data['email'] = $this->session->userdata('email');
			$data['form_view'] = $this->Setting_model->tampil_form();
			$data['nama'] = $this->session->userdata('nama');
			$data['username'] = $this->session->userdata('username');
	$data['id_role'] = $this->session->userdata('id_role');
		$this->load->view('header',$data);
		$this->load->view('sidebar', $data);
            $this->load->view('Setting/form_view',$data);
            $this->load->view('footer');
		
    }
	
	public function form_add() {
		
	$data['email'] = $this->session->userdata('email');
	$data['nama'] = $this->session->userdata('nama');
	$data['id_users'] = $this->session->userdata('id_users');
	$data['username'] = $this->session->userdata('username');
		$this->load->view('header',$data);
		$this->load->view('sidebar', $data);
            $this->load->view('Setting/form_add');
            $this->load->view('footer');
		
    }
	
	public function action_form_add() {
		
			//print_r($_POST); exit;
			$id_users = $this->session->userdata('id_users');
		
		   $judul_form = $this->input->post('judul_form');
		   $email = $this->input->post('email');
		   
		   $pathToUpload = './public/form/';
		if ( ! file_exists($pathToUpload) )
		{
			$create = mkdir($pathToUpload, 0777);
			
			if ( ! $create )
			return;
		}
				// START setting konfigurasi upload pdf
			$config1['upload_path'] = './public/form/';
						if ( ! file_exists($config1['upload_path']) )
					{
						$create = mkdir($config1['upload_path'], 0777);
						
						if ( ! $create )
						return;
					}
			$config1['allowed_types'] = 'docx|pdf';
			$config1['overwrite']			= true;
			$config1['max_size']             = 10024; // 10MB
			
			// START load library upload upload_dokumen
			$this->load->library('upload', $config1);
			$this->upload->initialize($config1);
			if (!$this->upload->do_upload('nama_file')) {
				$error = $this->upload->display_errors();
				// menampilkan pesan error
				//print_r($error);
			} else {
				$result1 = $this->upload->data();
				echo "<pre>";
				//print_r($result); exit;
				echo "</pre>";
			}
			$nama_file = !empty($result1['file_name']) ? $result1['file_name'] : '';
			//print_r ($document); exit;
		   	// END load library upload nama_file
		    

			$data = array('judul_form' => $judul_form,'nama_file' => $nama_file);
                    $insert = $this->Setting_model->add_form($data);
                    if ($insert) {
                        echo "<script>alert('Berhasil Menambah Data')</script>";
                        echo "<meta http-equiv=refresh content=0;url=" . base_url() . "Setting/form_view />";
                    }
		
    }
	
	
	public function form_delete() {
	
			
				$id_form = $this->input->get('id_form');
				$delete = $this->Setting_model->form_delete($id_form);
				if ($delete) {
					
					$this->session->set_flashdata('msg','User-deleted');
					echo "<meta http-equiv=refresh content=0;url=" . base_url() . "Setting/form_view>";
					//echo "<script>alert('Berhasil Menghapus Data')</script>";
				}
			
        }
	
	
    	
		
	
	
}
