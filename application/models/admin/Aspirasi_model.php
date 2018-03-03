<?php
	class Aspirasi_model extends CI_Model{

		public function add_aspirasi($data){
			$this->db->insert('tbl_aspirasi', $data);
			return true;
		}

		public function get_all_aspirasi(){
            
            $id_user = $this->session->userdata('admin_id');
            $sql = "Select * from tbl_aspirasi,tbl_anggota where tbl_anggota.id_anggota=tbl_aspirasi.id_anggota and tbl_aspirasi.id_anggota = $id_user and tbl_aspirasi.flag = '1';";

		    $query=  $this->db->query($sql);
			return $result = $query->result_array();
		}

		public function get_aspirasi_by_id($id){
            $id_user = $this->session->userdata('admin_id');
            $sql = "select * from tbl_aspirasi where id_aspirasi = $id and id_anggota = $id_user;";

		    $query=  $this->db->query($sql);
			return $result = $query->row_array();
		}

		public function edit_aspirasi($data, $id){
			$this->db->where('id_aspirasi', $id);
			$this->db->update('tbl_aspirasi', $data);
			return true;
		}
        
        public function delete_aspirasi($id){
            $sql = "update tbl_aspirasi set flag = '0' where id_aspirasi=$id;";
		    $query=  $this->db->query($sql);
			redirect(base_url('admin/Aspirasi'));
		}

	}

?>