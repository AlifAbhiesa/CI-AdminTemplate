<?php
	class Timeline_model extends CI_Model{

		

		public function get_all_timeline(){
            
            $id_user = $this->session->userdata('admin_id');
            $sql = "Select * from tbl_aspirasi LEFT JOIN tbl_anggota ON tbl_anggota.id_anggota = tbl_aspirasi.id_anggota where flag = '1' and privasi = 'public' or privasi = 'Anonim' order by id_aspirasi DESC";

		    $query=  $this->db->query($sql);
			return $result = $query->result_array();
		}
        
        
        public function get_recent_timeline(){
            
            $sql = "Select * from tbl_aspirasi,tbl_anggota where flag = '1' and tbl_anggota.id_anggota=tbl_aspirasi.id_anggota and tbl_aspirasi.privasi = 'Public' and updated != date and updated BETWEEN DATE(NOW() - INTERVAL 2 DAY) and DATE(NOW()) order by updated DESC";

		    $query=  $this->db->query($sql);
			return $result = $query->result_array();
		}
	}

?>
