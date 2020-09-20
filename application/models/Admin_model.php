<?php

class Admin_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    //alasan_keterlambatan
    public function update_alasan_keterlambatan_direksi_pekerjaan($data, $id_dokumen)
    {
        $update = $this->db->update('dokumen', $data, array('id_dokumen' => $id_dokumen));
        return $update;
    }
    public function update_alasan_keterlambatan_staff_bat($data, $id_dokumen)
    {
        $update = $this->db->update('dokumen', $data, array('id_dokumen' => $id_dokumen));
        return $update;
    }
    public function update_alasan_keterlambatan_asman_bat($data, $id_dokumen)
    {
        $update = $this->db->update('dokumen', $data, array('id_dokumen' => $id_dokumen));
        return $update;
    }
    public function update_alasan_keterlambatan_msb_bat($data, $id_dokumen)
    {
        $update = $this->db->update('dokumen', $data, array('id_dokumen' => $id_dokumen));
        return $update;
    }
    public function update_alasan_keterlambatan_staff_keuangan($data, $id_dokumen)
    {
        $update = $this->db->update('dokumen', $data, array('id_dokumen' => $id_dokumen));
        return $update;
    }
    public function update_alasan_keterlambatan_asman_keuangan($data, $id_dokumen)
    {
        $update = $this->db->update('dokumen', $data, array('id_dokumen' => $id_dokumen));
        return $update;
    }
    public function update_alasan_keterlambatan_msb_keuangan($data, $id_dokumen)
    {
        $update = $this->db->update('dokumen', $data, array('id_dokumen' => $id_dokumen));
        return $update;
    }
	
	//upload_nodin_konsultan

	function tampil_upload_nodin_konsultan() {
        $get = $this->db->query("SELECT 
				a.* , COUNT(a.jenis_dokumen) AS jumlah_dokumen
				FROM
				dokumen a
				WHERE a.id_kontrak = 1
				GROUP BY a.id_users
				HAVING jumlah_dokumen > 9
				ORDER BY a.id_dokumen  DESC ");
					return $get;
                }
    
                //upload_nodin_konstruksi	
    function tampil_upload_nodin_konstruksi() {
        $get = $this->db->query("SELECT 
				a.* , COUNT(a.jenis_dokumen) AS jumlah_dokumen
				FROM
				dokumen a
				WHERE a.id_kontrak = 2
				GROUP BY a.id_users
				HAVING jumlah_dokumen > 11
				ORDER BY a.id_dokumen  DESC ");
					return $get;
				}
				
	function tampil_upload_nodin_barang() {
        $get = $this->db->query("SELECT 
				a.* , COUNT(a.jenis_dokumen) AS jumlah_dokumen
				FROM
				dokumen a
				WHERE a.id_kontrak = 3
				GROUP BY a.id_users
				HAVING jumlah_dokumen > 9
				ORDER BY a.id_dokumen  DESC ");
					return $get;
                }
                
    function update_upload_nodin_konsultan($data, $id_users) {
       $update = $this->db->update('dokumen', $data, array('id_users' => $id_users));
       return $update;
    }
    function update_upload_nodin_konstruksi($data, $id_users) {
        $update = $this->db->update('dokumen', $data, array('id_users' => $id_users));
        return $update;
    }
    function update_upload_nodin_barang($data, $id_users) {
            $update = $this->db->update('dokumen', $data, array('id_users' => $id_users));
            return $update;
    }
                
	//tracking_view
	
	function tracking_dokumen($nomor_kontrak,$jenis_dokumen) {
        $get = $this->db->query("SELECT 
		  a.* , (select nama_role from role  where id_role = a.id_role) as nama_role,
		  (select nama from users where id_users = a.id_users) as nama_vendor,
		  (select jenis_kontrak from kontrak where id_kontrak = a.id_kontrak) as jenis_kontrak
		FROM
		  dokumen a  
		where a.nomor_kontrak = '$nomor_kontrak' and a.jenis_dokumen='$jenis_dokumen' ORDER BY a.id_dokumen DESC ");
        return $get;
		
		
    }
	function tampil_tracking_view($id_users) {
        $get = $this->db->query("SELECT 
		  a.* , (select nama_role from role  where id_role = a.id_role) as nama_role,
		  (select nama from users where id_users = a.id_users) as nama_vendor,
		  (select jenis_kontrak from kontrak where id_kontrak = a.id_kontrak) as jenis_kontrak
		FROM
		  dokumen a  
		where a.id_users = $id_users
		ORDER BY a.id_dokumen  DESC ");
        return $get;
		
		
    }
	function get_role($id_users) {
        $get = $this->db->query("SELECT 
		  a.* , (select nama_role from role  where id_role = a.id_role) as nama_role,
		  (select nama from users where id_users = a.id_users) as nama_vendor,
		  (select jenis_kontrak from kontrak where id_kontrak = a.id_kontrak) as jenis_kontrak
		FROM
		  dokumen a  
		where a.id_users = $id_users
		ORDER BY a.id_dokumen  DESC limit 1");
        if ($get->num_rows() == 1) {
            return $get->row_array();
        }
		
		
    }
	
	
	//dokumen direksi_pekerjaan
	
	
    
	
    function search_dokumen_direksi_pekerjaan($id_dokumen) {
        $get = $this->db->query("SELECT *
                               FROM dokumen where id_dokumen = '$id_dokumen' ");
        if ($get->num_rows() == 1) {
            return $get->row_array();
        }
    }
    
	
	function tampil_dokumen_direksi_pekerjaan() {
        $get = $this->db->query("SELECT 
		  a.* , (select nama_role from role  where id_role = a.id_role) as nama_role,
		  (select nama from users where id_users = a.id_users) as nama_vendor,
		  (select jenis_kontrak from kontrak where id_kontrak = a.id_kontrak) as jenis_kontrak
		FROM
		  dokumen a  
		 
		where id_role = 9
		ORDER BY a.id_dokumen  DESC");
        return $get;
    }

    //dokumen vendor

    function tampil_dokumen_vendor() {
        $get = $this->db->query("SELECT 
		 a.*, 
        (select nama from users where id_users = a.id_users) as nama_vendor
		FROM
		  dokumen a  
          
		ORDER BY a.nomor_kontrak  DESC");
        return $get;
    }

    function get_dokumen_vendor($nomor_kontrak) {
        $get = $this->db->query("SELECT *
                               FROM dokumen a
                               WHERE a.nomor_kontrak =$nomor_kontrak");
        if ($get->num_rows() == 1) {
            return $get->row_array();
        }
    }
	
	
	public function add_dokumen_data_direksi_pekerjaan($data) {
        $input = $this->db->insert('dokumen', $data);
        return $input;
    }

    function insert_komen_dokumen_direksi_pekerjaan($data, $id_dokumen) {
        $update = $this->db->update('dokumen', $data, array('id_dokumen' => $id_dokumen));
		
        return $update;
    }
	
	 function dokumen_delete_direksi_pekerjaan($id) {
        $delete = $this->db->delete('dokumen', array('id_dokumen' => $id));
        return $delete;
    }
	
    function get_dokumen_direksi_pekerjaan($id_dokumen) {
        $get = $this->db->query("SELECT *
                               FROM dokumen a
                               WHERE a.id_dokumen =$id_dokumen");
        if ($get->num_rows() == 1) {
            return $get->row_array();
        }
    }
	//finish dokumen direksi_pekerjaan
	
	//dokumen
	
	function search_dokumen($id_dokumen) {
        $get = $this->db->query("SELECT *
                               FROM dokumen where id_dokumen = '$id_dokumen' ");
        if ($get->num_rows() == 1) {
            return $get->row_array();
        }
    }
    
	
    function search_dokumen_staff_bat($id_dokumen) {
        $get = $this->db->query("SELECT *
                               FROM dokumen where id_dokumen = '$id_dokumen' ");
        if ($get->num_rows() == 1) {
            return $get->row_array();
        }
    }
    
	
	function tampil_dokumen_staff_bat() {
        $get = $this->db->query("SELECT 
		  a.* , (select nama_role from role  where id_role = a.id_role) as nama_role,
		  (select nama from users where id_users = a.id_users) as nama_vendor,
		  (select jenis_kontrak from kontrak where id_kontrak = a.id_kontrak) as jenis_kontrak
		FROM
		  dokumen a  
		 
		where id_role = 2
		ORDER BY a.id_dokumen  DESC");
        return $get;
    }
	
	
	public function add_dokumen_data_staff_bat($data) {
        $input = $this->db->insert('dokumen', $data);
        return $input;
    }

    function insert_komen_dokumen_staff_bat($data, $id_dokumen) {
        $update = $this->db->update('dokumen', $data, array('id_dokumen' => $id_dokumen));
		
        return $update;
    }
	
	 function dokumen_delete_staff_bat($id) {
        $delete = $this->db->delete('dokumen', array('id_dokumen' => $id));
        return $delete;
    }
	
    function get_dokumen_staff_bat($id_dokumen) {
        $get = $this->db->query("SELECT *
                               FROM dokumen a
                               WHERE a.id_dokumen =$id_dokumen");
        if ($get->num_rows() == 1) {
            return $get->row_array();
        }
    }
	//finish dokumen staff bat
	
	//dokumen asman bat
    function search_dokumen_asman_bat($id_dokumen) {
        $get = $this->db->query("SELECT *
                               FROM dokumen where id_dokumen = '$id_dokumen' ");
        if ($get->num_rows() == 1) {
            return $get->row_array();
        }
    }
    
	
	function tampil_dokumen_asman_bat() {
        $get = $this->db->query("SELECT 
		  a.* , (select nama_role from role  where id_role = a.id_role) as nama_role,
		  (select nama from users where id_users = a.id_users) as nama_vendor,
		  (select jenis_kontrak from kontrak where id_kontrak = a.id_kontrak) as jenis_kontrak
		FROM
		  dokumen a  
		 
		where id_role = 5
		ORDER BY a.id_dokumen  DESC");
        return $get;
    }
	
	
	public function add_dokumen_data_asman_bat($data) {
        $input = $this->db->insert('dokumen', $data);
        return $input;
    }

    function insert_komen_dokumen_asman_bat($data, $id_dokumen) {
        $update = $this->db->update('dokumen', $data, array('id_dokumen' => $id_dokumen));
		
        return $update;
    }
	
	 function dokumen_delete_asman_bat($id) {
        $delete = $this->db->delete('dokumen', array('id_dokumen' => $id));
        return $delete;
    }
	
    function get_dokumen_asman_bat($id_dokumen) {
        $get = $this->db->query("SELECT *
                               FROM dokumen a
                               WHERE a.id_dokumen =$id_dokumen");
        if ($get->num_rows() == 1) {
            return $get->row_array();
        }
    }
	//finish dokumen asman bat
	
	//dokumen msb bat
    function search_dokumen_msb_bat($id_dokumen) {
        $get = $this->db->query("SELECT *
                               FROM dokumen where id_dokumen = '$id_dokumen' ");
        if ($get->num_rows() == 1) {
            return $get->row_array();
        }
    }
    
	
	function tampil_dokumen_msb_bat() {
        $get = $this->db->query("SELECT 
		  a.* , (select nama_role from role  where id_role = a.id_role) as nama_role,
		  (select nama from users where id_users = a.id_users) as nama_vendor,
		  (select jenis_kontrak from kontrak where id_kontrak = a.id_kontrak) as jenis_kontrak
		FROM
		  dokumen a  
		 
		where id_role = 6
		ORDER BY a.id_dokumen  DESC");
        return $get;
    }
	
	
	public function add_dokumen_data_msb_bat($data) {
        $input = $this->db->insert('dokumen', $data);
        return $input;
    }

    function insert_komen_dokumen_msb_bat($data, $id_dokumen) {
        $update = $this->db->update('dokumen', $data, array('id_dokumen' => $id_dokumen));
		
        return $update;
    }
	
	 function dokumen_delete_msb_bat($id) {
        $delete = $this->db->delete('dokumen', array('id_dokumen' => $id));
        return $delete;
    }
	
    function get_dokumen_msb_bat($id_dokumen) {
        $get = $this->db->query("SELECT *
                               FROM dokumen a
                               WHERE a.id_dokumen =$id_dokumen");
        if ($get->num_rows() == 1) {
            return $get->row_array();
        }
    }
	//finish dokumen asman bat
	
	//dokumen staff keuangan
    function search_dokumen_staff_keuangan($id_dokumen) {
        $get = $this->db->query("SELECT *
                               FROM dokumen where id_dokumen = '$id_dokumen' ");
        if ($get->num_rows() == 1) {
            return $get->row_array();
        }
    }
    
	
	function tampil_dokumen_staff_keuangan() {
        $get = $this->db->query("SELECT 
		  a.* , (select nama_role from role  where id_role = a.id_role) as nama_role,
		  (select nama from users where id_users = a.id_users) as nama_vendor,
		  (select jenis_kontrak from kontrak where id_kontrak = a.id_kontrak) as jenis_kontrak
		FROM
		  dokumen a  
		 
		where id_role = 3
		ORDER BY a.id_dokumen  DESC");
        return $get;
    }
	
	
	public function add_dokumen_data_staff_keuangan($data) {
        $input = $this->db->insert('dokumen', $data);
        return $input;
    }

    function insert_komen_dokumen_staff_keuangan($data, $id_dokumen) {
        $update = $this->db->update('dokumen', $data, array('id_dokumen' => $id_dokumen));
		
        return $update;
    }
	
	 function dokumen_delete_staff_keuangan($id) {
        $delete = $this->db->delete('dokumen', array('id_dokumen' => $id));
        return $delete;
    }
	
    function get_dokumen_staff_keuangan($id_dokumen) {
        $get = $this->db->query("SELECT *
                               FROM dokumen a
                               WHERE a.id_dokumen =$id_dokumen");
        if ($get->num_rows() == 1) {
            return $get->row_array();
        }
    }
	//finish dokumen staff keuangan
	
	//dokumen asman keuangan
    function search_dokumen_asman_keuangan($id_dokumen) {
        $get = $this->db->query("SELECT *
                               FROM dokumen where id_dokumen = '$id_dokumen' ");
        if ($get->num_rows() == 1) {
            return $get->row_array();
        }
    }
    
	
	function tampil_dokumen_asman_keuangan() {
        $get = $this->db->query("SELECT 
		  a.* , (select nama_role from role  where id_role = a.id_role) as nama_role,
		  (select nama from users where id_users = a.id_users) as nama_vendor,
		  (select jenis_kontrak from kontrak where id_kontrak = a.id_kontrak) as jenis_kontrak
		FROM
		  dokumen a  
		 
		where id_role = 7
		ORDER BY a.id_dokumen  DESC");
        return $get;
    }
	
	
	public function add_dokumen_data_asman_keuangan($data) {
        $input = $this->db->insert('dokumen', $data);
        return $input;
    }

    function insert_komen_dokumen_asman_keuangan($data, $id_dokumen) {
        $update = $this->db->update('dokumen', $data, array('id_dokumen' => $id_dokumen));
		
        return $update;
    }
	
	 function dokumen_delete_asman_keuangan($id) {
        $delete = $this->db->delete('dokumen', array('id_dokumen' => $id));
        return $delete;
    }
	
    function get_dokumen_asman_keuangan($id_dokumen) {
        $get = $this->db->query("SELECT *
                               FROM dokumen a
                               WHERE a.id_dokumen =$id_dokumen");
        if ($get->num_rows() == 1) {
            return $get->row_array();
        }
    }
	//finish dokumen asman keuangan
	
	//dokumen msb keuangan
    function search_dokumen_msb_keuangan($id_dokumen) {
        $get = $this->db->query("SELECT *
                               FROM dokumen where id_dokumen = '$id_dokumen' ");
        if ($get->num_rows() == 1) {
            return $get->row_array();
        }
    }
    
	
	function tampil_dokumen_msb_keuangan() {
        $get = $this->db->query("SELECT 
		  a.* , (select nama_role from role  where id_role = a.id_role) as nama_role,
		  (select nama from users where id_users = a.id_users) as nama_vendor,
		  (select jenis_kontrak from kontrak where id_kontrak = a.id_kontrak) as jenis_kontrak
		FROM
		  dokumen a  
		 
		where id_role = 8
		ORDER BY a.id_dokumen  DESC");
        return $get;
    }
	
	
	public function add_dokumen_data_msb_keuangan($data) {
        $input = $this->db->insert('dokumen', $data);
        return $input;
    }

    function insert_komen_dokumen_msb_keuangan($data, $id_dokumen) {
        $update = $this->db->update('dokumen', $data, array('id_dokumen' => $id_dokumen));
		
        return $update;
    }
	
	 function dokumen_delete_msb_keuangan($id) {
        $delete = $this->db->delete('dokumen', array('id_dokumen' => $id));
        return $delete;
    }
	
    function get_dokumen_msb_keuangan($id_dokumen) {
        $get = $this->db->query("SELECT *
                               FROM dokumen a
                               WHERE a.id_dokumen =$id_dokumen");
        if ($get->num_rows() == 1) {
            return $get->row_array();
        }
    }
	//finish dokumen staff keuangan
	
	
	//tracking
    function search_tracking($id_tracking) {
        $get = $this->db->query("SELECT *
                               FROM tracking where id_tracking = '$id_tracking' ");
        if ($get->num_rows() == 1) {
            return $get->row_array();
        }
    }
    
	
	function tampil_tracking() {
        $get = $this->db->query("SELECT 
		  *
		FROM
		  tracking  
		ORDER BY id_tracking DESC ");
        return $get;
    }
	
	
	public function add_tracking_data($data) {
        $input = $this->db->insert('tracking', $data);
        return $input;
    }

    function update_tracking($data, $id_tracking) {
        $update = $this->db->update('tracking', $data, array('id_tracking' => $id_tracking));
		
        return $update;
    }
	
	 function tracking_delete($id) {
        $delete = $this->db->delete('tracking', array('id_tracking' => $id));
        return $delete;
    }
	
    function get_tracking($id_tracking) {
        $get = $this->db->query("SELECT *
                               FROM tracking a
                               WHERE a.id_tracking =$id_tracking");
        if ($get->num_rows() == 1) {
            return $get->row_array();
        }
    }
	
	//USER
    function search_users($username) {
        $get = $this->db->query("SELECT *
                               FROM users where username = '$username' ");
        if ($get->num_rows() == 1) {
            return $get->row_array();
        }
    }
    
	
	function tampil_user() {
        $get = $this->db->query("SELECT 
		  a.*,
		  (SELECT 
			b.nama_role 
		  FROM
			role b 
		  WHERE a.id_role = b.id_role) AS nama_role 
		FROM
		  users a 
		ORDER BY id_users DESC ");
        return $get;
    }
	
	
	public function add_users_data($data) {
        $input = $this->db->insert('users', $data);
        return $input;
    }

    function update_users($data, $id_users) {
        $update = $this->db->update('users', $data, array('id_users' => $id_users));
		
        return $update;
    }
	
	 function users_delete($id) {
        $delete = $this->db->delete('users', array('id_users' => $id));
        return $delete;
    }
	
    function get_users($id_users) {
        $get = $this->db->query("SELECT *
                               FROM users a
                               WHERE a.id_users =$id_users");
        if ($get->num_rows() == 1) {
            return $get->row_array();
        }
    }
	
	//MENU
	function tampil_menu() {
        $get = $this->db->query("SELECT 
			a.id_menu,
		  a.nama_menu,
		  a.link,
		  a.icon,
		  a.is_main_menu,
		  (SELECT 
			b.nama_menu 
		  FROM
			menu b 
		  WHERE b.id_menu = a.is_main_menu) AS menu_utamanya 
		FROM
		  menu a ");
        return $get;
    }
	
	
	public function add_menu_data($data) {
        $input = $this->db->insert('menu', $data);
        return $input;
    }

    function update_menu($data, $id_menu) {
        $update = $this->db->update('menu', $data, array('id_menu' => $id_menu));
		
        return $update;
    }
	
	 function menu_delete($id) {
        $delete = $this->db->delete('menu', array('id_menu' => $id));
        return $delete;
    }
	
    function get_menu($id_menu) {
        $get = $this->db->query("SELECT 
							  a.`id_menu`,
							  a.`nama_menu`,
							  a.`link`,
							  a.`icon`,
							  a.`is_main_menu`,
							  (SELECT 
								b.nama_menu 
							  FROM
								menu b 
							  WHERE b.id_menu = a.is_main_menu) AS nama_menu_utamanya 
							FROM
							  menu a 
							WHERE a.id_menu = $id_menu");
        if ($get->num_rows() == 1) {
            return $get->row_array();
        }
    }
	
	// daily Activity
	
	function tampil_daily() {
        $get = $this->db->query("SELECT *
		FROM
		  daily_activity 
		ORDER BY id_daily_activity DESC ");
        return $get;
    }
	
	
	public function add_daily_activity_data($data) {
        $input = $this->db->insert('daily_activity', $data);
        return $input;
    }
	
	 function daily_activity_delete($id) {
        $delete = $this->db->delete('daily_activity', array('id_daily_activity' => $id));
        return $delete;
    }
	
	 function dapat_daily_activity($id_daily_activity) {
        $get = $this->db->query("SELECT *
                               FROM daily_activity a
                               WHERE a.id_daily_activity =$id_daily_activity");
        if ($get->num_rows() == 1) {
            return $get->row_array();
        }
    }
	
	 function update_daily_activity($data, $id_daily_activity) {
        $update = $this->db->update('daily_activity', $data, array('id_daily_activity' => $id_daily_activity));
		
        return $update;
    }
    
	// warranty notice
	
	function tampil_warranty_notice() {
        $get = $this->db->query("SELECT *
		FROM
		  warranty_notice 
		ORDER BY id_warranty_notice DESC ");
        return $get;
    }
	
	
	public function add_warranty_notice_data($data) {
        $input = $this->db->insert('warranty_notice', $data);
        return $input;
    }
	
	 function warranty_notice_delete($id) {
        $delete = $this->db->delete('warranty_notice', array('id_warranty_notice' => $id));
        return $delete;
    }
	
	 function dapat_warranty_notice($id_warranty_notice) {
        $get = $this->db->query("SELECT *
                               FROM warranty_notice a
                               WHERE a.id_warranty_notice =$id_warranty_notice");
        if ($get->num_rows() == 1) {
            return $get->row_array();
        }
    }
	
	 function update_warranty_notice($data, $id_warranty_notice) {
        $update = $this->db->update('warranty_notice', $data, array('id_warranty_notice' => $id_warranty_notice));
		
        return $update;
    }
	
	
	
	//Vendor
	function tampil_vendor() {
        $get = $this->db->query("SELECT 
		  *
		FROM
		  vendor
		ORDER BY id_vendor DESC ");
        return $get;
    }
	
	
	public function add_vendor_data($data) {
        $input = $this->db->insert('vendor', $data);
        return $input;
    }
	
	function update_vendor($data, $id_vendor) {
        $update = $this->db->update('vendor', $data, array('id_vendor' => $id_vendor));
		
        return $update;
    }
	
	 function vendor_delete($id) {
        $delete = $this->db->delete('vendor', array('id_vendor' => $id));
        return $delete;
    }
	
	 function get_vendor($id_vendor) {
        $get = $this->db->query("SELECT *
                               FROM vendor a
                               WHERE a.id_vendor =$id_vendor");
        if ($get->num_rows() == 1) {
            return $get->row_array();
        }
    }
	
	function list_unit() {
        $get = $this->db->query("SELECT 
		  id_unit, nama_unit
		FROM
		  unit
		ORDER BY id_unit DESC ");
        return $get;
    }

    
	//Konsultan
	function tampil_konsultan($id_users) {
        $get = $this->db->query("SELECT 
		  *
		FROM
        dokumen 
		where id_kontrak =1 and id_users =$id_users 
		ORDER BY id_dokumen DESC ");
        return $get;
    }

    
	public function add_konsultan_data($data) {
        $input = $this->db->insert('dokumen', $data);
        return $input;
    }
	
	function update_konsultan($data, $id_dokumen) {
        $update = $this->db->update('dokumen', $data, array('id_dokumen' => $id_dokumen));
		
        return $update;
    }
	
	 function konsultan_delete($id) {
        $delete = $this->db->delete('dokumen', array('id_dokumen' => $id));
        return $delete;
    }
	
	 function get_konsultan($id_dokumen) {
        $get = $this->db->query("SELECT *
                               FROM dokumen a
                               WHERE a.id_dokumen =$id_dokumen");
        if ($get->num_rows() == 1) {
            return $get->row_array();
        }
    }
	
	//Konstruksi
	function tampil_konstruksi($id_users) {
        $get = $this->db->query("SELECT 
		  *
		FROM
        dokumen 
		where id_kontrak =2 and id_users =$id_users 
		ORDER BY id_dokumen DESC ");
        return $get;
    }

    
	public function add_konstruksi_data($data) {
        $input = $this->db->insert('dokumen', $data);
        return $input;
    }
	
	function update_konstruksi($data, $id_dokumen) {
        $update = $this->db->update('dokumen', $data, array('id_dokumen' => $id_dokumen));
		
        return $update;
    }
	
	 function konstruksi_delete($id) {
        $delete = $this->db->delete('dokumen', array('id_dokumen' => $id));
        return $delete;
    }
	
	 function get_konstruksi($id_dokumen) {
        $get = $this->db->query("SELECT *
                               FROM dokumen a
                               WHERE a.id_dokumen =$id_dokumen");
        if ($get->num_rows() == 1) {
            return $get->row_array();
        }
    }
	
	//Barang
	function tampil_barang($id_users) {
        $get = $this->db->query("SELECT 
		  *
		FROM
        dokumen 
		where id_kontrak =3 and id_users =$id_users 
		ORDER BY id_dokumen DESC ");
        return $get;
    }

    
	public function add_barang_data($data) {
        $input = $this->db->insert('dokumen', $data);
        return $input;
    }
	
	function update_barang($data, $id_dokumen) {
        $update = $this->db->update('dokumen', $data, array('id_dokumen' => $id_dokumen));
		
        return $update;
    }
	
	 function barang_delete($id) {
        $delete = $this->db->delete('dokumen', array('id_dokumen' => $id));
        return $delete;
    }
	
	 function get_barang($id_dokumen) {
        $get = $this->db->query("SELECT *
                               FROM dokumen a
                               WHERE a.id_dokumen =$id_dokumen");
        if ($get->num_rows() == 1) {
            return $get->row_array();
        }
    }
	
	
	
    
	
}
