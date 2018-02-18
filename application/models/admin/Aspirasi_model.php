<?php
	class Aspirasi_model extends CI_Model{

		public function add_user($data){
			$this->db->insert('tbl_aspirasi', $data);
			return true;
		}

		public function get_all_aspirasi(){
            
            $id_user = $this->session->userdata('admin_id');
            $sql = "Select * from tbl_aspirasi,tbl_anggota where tbl_anggota.id_anggota=tbl_aspirasi.id_anggota and tbl_aspirasi.id_anggota = $id_user;";

		    $query=  $this->db->query($sql);
			return $result = $query->result_array();
		}

		public function get_user_by_id($id){
			$query = $this->db->get_where('ci_users', array('id' => $id));
			return $result = $query->row_array();
		}

		public function edit_user($data, $id){
			$this->db->where('id', $id);
			$this->db->update('ci_users', $data);
			return true;
		}

	}

?>