<?php 
	
	class ProductsModel extends CI_Model {
		
		function __construct() {
			
			parent::__construct();
			$this->load->database();
		}

		public function getProducts($limit=0) {
			if ($limit>0) {
				$sql = "SELECT * FROM product_tbl ORDER BY product_id DESC LIMIT " . $limit;
			} 
			else {
				$sql = "SELECT * FROM product_tbl ORDER BY product_id DESC";
			}
			$query = $this->db->query($sql);
			return $query->result_array(); /*untuk menampilkan jumlah data lebih dari satu*/
		}

		public function getProductDetail($product_id) {
			$sql = "SELECT * FROM product_tbl WHERE product_id=" . $product_id;
			$query = $this->db->query($sql);
			return $query->row(); /*ini hanya menampilkan data satu*/
		}
	}