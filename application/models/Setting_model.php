<?php

class Setting_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }
	
	
	
	
	//Penilaian user
	function tampil_penilaian_user_direksi_pekerjaan() {
        $get = $this->db->query("SELECT 
								  a.nama,
								  (SELECT 
									COUNT(b.id_dokumen) 	
								  FROM
									dokumen b 
								  WHERE b.isi_komentar_direksi_pekerjaan IS NOT NULL) AS jumlah_dokumen_direksi_pekerjaan,
								  (SELECT 
									COUNT(c.id_dokumen) 
								  FROM
									dokumen c 
								  WHERE c.isi_komentar_direksi_pekerjaan IS NOT NULL 
									AND c.alasan_keterlambatan_direksi_pekerjaan IS NOT NULL) AS jumlah_dokumen_direksi_pekerjaan_terlambat 
								FROM
								  users a 
								ORDER BY a.id_users DESC limit 1");
        return $get;
    }
	
	function tampil_penilaian_user_staff_bat() {
        $get = $this->db->query("SELECT 
								  a.nama,
								  (SELECT 
									COUNT(b.id_dokumen) 	
								  FROM
									dokumen b 
								  WHERE b.isi_komentar_staff_bat IS NOT NULL) AS jumlah_dokumen_staff_bat,
								  (SELECT 
									COUNT(c.id_dokumen) 
								  FROM
									dokumen c 
								  WHERE c.isi_komentar_staff_bat IS NOT NULL 
									AND c.alasan_keterlambatan_msb_bat IS NOT NULL) AS jumlah_dokumen_staff_bat_terlambat 
								FROM
								  users a 
								ORDER BY a.id_users DESC limit 1");
        return $get;
    }
	
	function tampil_penilaian_user_asman_bat() {
        $get = $this->db->query("SELECT 
								  a.nama,
								  (SELECT 
									COUNT(b.id_dokumen) 	
								  FROM
									dokumen b 
								  WHERE b.isi_komentar_asman_bat IS NOT NULL) AS jumlah_dokumen_asman_bat,
								  (SELECT 
									COUNT(c.id_dokumen) 
								  FROM
									dokumen c 
								  WHERE c.isi_komentar_asman_bat IS NOT NULL 
									AND c.alasan_keterlambatan_msb_bat IS NOT NULL) AS jumlah_dokumen_asman_bat_terlambat 
								FROM
								  users a 
								ORDER BY a.id_users DESC limit 1");
        return $get;
    }
	
	function tampil_penilaian_user_msb_bat() {
        $get = $this->db->query("SELECT 
								  a.nama,
								  (SELECT 
									COUNT(b.id_dokumen) 	
								  FROM
									dokumen b 
								  WHERE b.isi_komentar_msb_bat IS NOT NULL) AS jumlah_dokumen_msb_bat,
								  (SELECT 
									COUNT(c.id_dokumen) 
								  FROM
									dokumen c 
								  WHERE c.isi_komentar_msb_bat IS NOT NULL 
									AND c.alasan_keterlambatan_msb_bat IS NOT NULL) AS jumlah_dokumen_msb_bat_terlambat 
								FROM
								  users a 
								ORDER BY a.id_users DESC limit 1");
        return $get;
    }
	
	
	function tampil_penilaian_user_staff_keuangan() {
        $get = $this->db->query("SELECT 
								  a.nama,
								  (SELECT 
									COUNT(b.id_dokumen) 	
								  FROM
									dokumen b 
								  WHERE b.isi_komentar_staff_keuangan IS NOT NULL) AS jumlah_dokumen_staff_keuangan,
								  (SELECT 
									COUNT(c.id_dokumen) 
								  FROM
									dokumen c 
								  WHERE c.isi_komentar_staff_keuangan IS NOT NULL 
									AND c.alasan_keterlambatan_msb_keuangan IS NOT NULL) AS jumlah_dokumen_staff_keuangan_terlambat 
								FROM
								  users a 
								ORDER BY a.id_users DESC limit 1");
        return $get;
    }
	
	function tampil_penilaian_user_asman_keuangan() {
        $get = $this->db->query("SELECT 
								  a.nama,
								  (SELECT 
									COUNT(b.id_dokumen) 	
								  FROM
									dokumen b 
								  WHERE b.isi_komentar_asman_keuangan IS NOT NULL) AS jumlah_dokumen_asman_keuangan,
								  (SELECT 
									COUNT(c.id_dokumen) 
								  FROM
									dokumen c 
								  WHERE c.isi_komentar_asman_keuangan IS NOT NULL 
									AND c.alasan_keterlambatan_msb_keuangan IS NOT NULL) AS jumlah_dokumen_asman_keuangan_terlambat 
								FROM
								  users a 
								ORDER BY a.id_users DESC limit 1");
        return $get;
    }
	
	function tampil_penilaian_user_msb_keuangan() {
        $get = $this->db->query("SELECT 
								  a.nama,
								  (SELECT 
									COUNT(b.id_dokumen) 	
								  FROM
									dokumen b 
								  WHERE b.isi_komentar_msb_keuangan IS NOT NULL) AS jumlah_dokumen_msb_keuangan,
								  (SELECT 
									COUNT(c.id_dokumen) 
								  FROM
									dokumen c 
								  WHERE c.isi_komentar_msb_keuangan IS NOT NULL 
									AND c.alasan_keterlambatan_msb_keuangan IS NOT NULL) AS jumlah_dokumen_msb_keuangan_terlambat 
								FROM
								  users a 
								ORDER BY a.id_users DESC limit 1");
        return $get;
    }
	
	//form
	
	
    function search_form($id_form) {
        $get = $this->db->query("SELECT *
                               FROM form where id_form = '$id_form' ");
        if ($get->num_rows() == 1) {
            return $get->row_array();
        }
    }
    
	
	function tampil_form() {
        $get = $this->db->query("SELECT 
		  a.* 
		FROM
		  form a  
		 
		
		ORDER BY a.id_form  DESC");
        return $get;
    }
	
	
	public function add_form($data) {
        $input = $this->db->insert('form', $data);
        return $input;
    }

    function insert_komen_form($data, $id_form) {
        $update = $this->db->update('form', $data, array('id_form' => $id_form));
		
        return $update;
    }
	
	 function form_delete($id) {
        $delete = $this->db->delete('form', array('id_form' => $id));
        return $delete;
    }
	
    function get_form($id_form) {
        $get = $this->db->query("SELECT *
                               FROM form a
                               WHERE a.id_form =$id_form");
        if ($get->num_rows() == 1) {
            return $get->row_array();
        }
    }
	//finish form staff bat
	
	
}