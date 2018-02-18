<?php
	class Auth_model extends CI_Model{

		public function login($data){
            $nrp = $data['nrp'];
            $password = md5($data['password']);
			$sql = "select * from tbl_anggota where nrp_anggota = $nrp and password_anggota = '$password' and keterangan_anggota = 'Aktif'";
            
            $query=  $this->db->query($sql);
			
			if ($query->num_rows() == 0){
				return false;
			}
			else{
				//Compare the password attempt with the password we have stored.
				$result = $query->row_array();
			   
			        return $result = $query->row_array();
			    
				
			}
		}

		public function change_pwd($data, $id){
			$this->db->where('id', $id);
			$this->db->update('ci_users', $data);
			return true;
		}

	}

?>