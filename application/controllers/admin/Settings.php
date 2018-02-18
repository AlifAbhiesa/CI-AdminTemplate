<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Settings extends MY_Controller {

		public function __construct(){
			parent::__construct();
			$this->load->model('admin/Settings_model', 'Settings_model');
		}

		public function index(){
			echo "Halaman ini tidak dapat di akses !";
            sleep(5);
            redirect(base_url('admin/Profile'));
		}
		
		public function edit($id = 0){
			if($this->input->post('submit')){
				

				
                    $skill = $_POST['skill'];
                    $notes = $_POST['notes'];
                    $instagram = $_POST['instagram'];
					$data = array(
						'skill' => $skill,
						'notes' => $notes,
						'instagram' => $instagram,
					);
					$result = $this->Settings_model->edit_user($data, $id);
					if($result){
						$this->session->set_flashdata('msg', 'Record is Updated Successfully!');
						redirect(base_url('admin/Profile'));
					}
				
			}
			else{
				$data['user'] = $this->Settings_model->get_user_by_id($id);
				$data['view'] = 'admin/settings/index';
				$this->load->view('admin/layout', $data);
			}
		}

		public function del($id = 0){
			$this->db->delete('ci_users', array('id' => $id));
			$this->session->set_flashdata('msg', 'Record is Deleted Successfully!');
			redirect(base_url('admin/users'));
		}

	}


?>