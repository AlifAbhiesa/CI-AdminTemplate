<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Aspirasi extends MY_Controller {

		public function __construct(){
			parent::__construct();
			$this->load->model('admin/Timeline_model');
		}

		public function index(){
			$data['view'] = 'aspirasi/index';
			$this->load->view('layout', $data);
		}
        public function Form(){
			$data['view'] = 'aspirasi/form';
			$this->load->view('layout', $data);
		}
        
         public function Post(){
			
		}
		
		

	}


?>