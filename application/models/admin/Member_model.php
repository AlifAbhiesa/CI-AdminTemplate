<?php
	class Member_model extends CI_Model{


		public function get_all_member(){
            
            $sql = "Select * from tbl_anggota order by nrp_anggota ASC";

		    $query=  $this->db->query($sql);
			return $result = $query->result_array();
		}

		public function get_member_by_id($id){
			$sql = "Select * from tbl_anggota, tbl_about where tbl_anggota.id_anggota = tbl_about.id_anggota and tbl_anggota.id_anggota = $id order by nrp_anggota ASC";

		    $query=  $this->db->query($sql);
			return $result = $query->result_array();
		}

	}

?>