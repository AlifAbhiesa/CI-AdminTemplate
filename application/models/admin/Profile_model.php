<?php
	class Profile_model extends CI_Model{

		

		public function get_profile(){
            
            $id_user = $this->session->userdata('admin_id');
            $sql = "select * from tbl_anggota,tbl_about where tbl_anggota.id_anggota=tbl_about.id_anggota and tbl_anggota.id_anggota = $id_user";

		    $query=  $this->db->query($sql);
			return $result = $query->result_array();
		}
	}

?>