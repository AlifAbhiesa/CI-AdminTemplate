<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Dashboard extends MY_Controller {

		public function __construct(){
			parent::__construct();
		}

		public function index(){
			$data['view'] = 'Dashboard/index';
			$this->load->view('layout', $data);
		}
        
        public function Typography(){
			$data['view'] = 'Dashboard/typography';
			$this->load->view('layout', $data);
		}
        
        public function helperclasse(){
			$data['view'] = 'Dashboard/helperclasses';
			$this->load->view('layout', $data);
		}
        
        public function CardBasic(){
			$data['view'] = 'Dashboard/widgets/cards/basic';
			$this->load->view('layout', $data);
		}
        
        public function CardColored(){
			$data['view'] = 'Dashboard/widgets/cards/colored';
			$this->load->view('layout', $data);
		}
		
		

	}


?>