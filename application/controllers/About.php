<?php

	/**
	 * 
	 */
	class About extends CI_Controller {
		
		function __construct() {
			parent::__construct();
		}

		function index() {
			$data["content_page"]="about_content"; /*home_content tarik data dari view */
			$this->load->view("index",$data);
		}
	}