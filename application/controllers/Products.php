<?php 

/**
 * 
 */
class Products extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->model("ProductsModel");
	}

	public function index() {
		$data["content_page"]="product_content";
		$data["products_data"]=$this->ProductsModel->getProducts(); /*ini untuk menamplan semua data products*/
		$this->load->view("index", $data);
	}

	public function productDetail($product_id) {

		$data["content_page"]="product_detail_content";
		$data["product_data"]=$this->ProductsModel->getProductDetail($product_id);
		$this->load->view("index",$data);
	}
}