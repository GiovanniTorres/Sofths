<?php
require "Connection.php" ;
class CategoryModel extends Connection {
	public function set () {}

	public function get ($category = "") {
		$this->query = ($category != "") ? "SELECT * FROM categories WHERE id_category = '$category'" 
									 : "SELECT * FROM categories" ;
		$this->get_query () ;

		foreach ($this->rows as $key => $value) {
			$data[$key] = $value ;
		}
		return $data ;
	}		

	public function del () {}
}