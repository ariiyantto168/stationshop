<?php

	/**
	 * 
	 */
	class Home extends CI_Controller {
		
		function __construct() {
			parent::__construct();
			$this->load->model("ProductsModel");
		}

		function index() {
			$data["content_page"]="home_content"; /*home_content tarik data dari view */
			$data["products_data"]=$this->ProductsModel->getProducts(6); /*get products di ambil dari function di model ProductsModel untuk menampilkan data*/
			$this->load->view("index",$data);
		}
	}