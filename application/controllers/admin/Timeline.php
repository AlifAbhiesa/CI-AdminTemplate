<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Timeline extends MY_Controller {

		public function __construct(){
			parent::__construct();
			$this->load->model('admin/Timeline_model');
		}

		public function index(){
			$data['all_timeline'] =  $this->Timeline_model->get_all_timeline();
			$data['view'] = 'admin/timeline/index';
			$this->load->view('admin/layout', $data);
		}
		
		

	}


?>