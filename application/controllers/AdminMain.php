<?php 
 class AdminMain extends CI_Controller {
	 public function __construct() {
		parent::__construct();
		$this->load->model("ProductsModel");
		$uploadconfig["upload_path"]="./images/product/";
		$uploadconfig["allowed_types"]="gif|jpg|png";
		$uploadconfig["max_size"]=1024;
		$this->load->library("upload",$uploadconfig);
	 }
	 
	 public function index() {
		$data["content_page"]="home_list"; 
		$data["products_data"]=$this->ProductsModel->getProducts(0);
		$this->load->view("admin/admin_index",$data); 
	 }
	 
	 public function addProduct() {
		$data["content_page"]="add_form";
		$this->load->view("admin/admin_index",$data); 
	 }

	 public function addProductSubmit() {
		 $product_name=$_POST["product_name"];
		 $price=$_POST["price"];
		 $stock=$_POST["stock"];
		 $product_description=$_POST["product_description"];
		 $brand=$_POST["brand"];
		 $gambar="";

		 if ($this->upload->do_upload("gambar")) {
			 $gambar=$this->upload->file_name;
		 }

		 $sql="INSERT INTO product_tbl(product_name,price,stock,product_description,brand,gambar) 
		  VALUES('". $product_name . "'," . $price . "," . $stock . ",'". $product_description . "','" . $brand ."','" . $gambar . "')";
		  $query=$this->db->query($sql);

		  redirect(base_url() . "AdminMain");
	 }
	 
	 public function editProduct($product_id=0) {
		 if ($product_id>0) {
			$data["content_page"]="edit_form";
			$data["data_product"]=$this->ProductsModel->getProductDetail($product_id);
			$this->load->view("admin/admin_index",$data);
	 	}
	 }
 }