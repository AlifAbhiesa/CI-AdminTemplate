<?php
	class Timeline_model extends CI_Model{

		

		public function get_all_timeline(){
            
            $id_user = $this->session->userdata('admin_id');
            $sql = "Select * from tbl_aspirasi,tbl_anggota where tbl_anggota.id_anggota=tbl_aspirasi.id_anggota order by id_aspirasi DESC";

		    $query=  $this->db->query($sql);
			return $result = $query->result_array();
		}
	}

?>