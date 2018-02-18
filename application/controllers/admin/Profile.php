<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Profile extends MY_Controller {

		public function __construct(){
			parent::__construct();
			$this->load->model('admin/Profile_model');
		}

		public function index(){
			$data['all_profile'] =  $this->Profile_model->get_profile();
			$data['view'] = 'admin/profile/index';
			$this->load->view('admin/layout', $data);
		}
		

	}


?>