<?php

	/**
	 * 
	 */
	class TestController extends CI_controller {
		
		function __construct() {
			parent::__construct();
		}

		public function index() {
			$this->load->view("testview");
		}

		public function testlagi(){
			$this->load->view("testlagi");
		}
	}