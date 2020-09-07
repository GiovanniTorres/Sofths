<?php
require "Connection.php" ;
class ProductModel extends Connection {
	public function set ($product_data = array()) {
		/*foreach ($product_data as $key => $value) {
			$$key = $value;
		}
		$this->query = "
		REPLACE INTO products (mail, name, product, password, telephone)
		VALUES ('$mail', '$name', '$product', '$password', '$telephone')";
		$this->set_query();*/
	}

	public function get ($product = "", $category = "") {
		/*$this->query = ($product != "") ? "SELECT * FROM products WHERE id_product = '$product'" 
										: "SELECT * FROM products" ;*/
		if ($product != "") {
			$this->query = "SELECT * FROM products WHERE name_product = '$product'" ;
		} else if ($category != "") {
			$this->query = "SELECT * FROM products AS prod INNER JOIN categories AS cate ON prod.id_category = cate.id_category WHERE category = '$category'" ;
		} else if ($product == "") {
			$this->query = "SELECT * FROM products" ;
		}						

		$this->get_query () ;

		foreach ($this->rows as $key => $value) {
			$data[$key] = $value ;
		}
		return $data ;
	}		

	public function del () {}

	public function validate_product ($product, $password) {
		/*$this->query = "SELECT * FROM products WHERE product = '$product' AND password = '$password'" ;
		$this->get_query () ;
		$data = array () ;
		foreach ($this->rows as $key => $value) {
			$data[$key] = $value ;
		}
		return $data ;*/
	}	
}