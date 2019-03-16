<?php 

/**
 * 
 */
class Faq extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
	}

	public function index() {
		$data["content_page"]="faq_content";
		$this->load->view("index", $data);
	}
}