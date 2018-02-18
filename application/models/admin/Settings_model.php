<?php
	class Settings_model extends CI_Model{

		

		public function get_user_by_id(){
            $id = $this->session->userdata('admin_id');
			$query = $this->db->get_where('tbl_about', array('id_anggota' => $id));
			return $result = $query->row_array();
		}

		public function edit_user($data, $id){
			$this->db->where('id_about', $id);
			$this->db->update('tbl_about', $data);
			return true;
		}

	}

?>