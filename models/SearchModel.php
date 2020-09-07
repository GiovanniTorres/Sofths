<?php
require "Connection.php" ;
class SearchModel extends Connection {
	public function set () {}

	public function get ($searching = "") {
		$this->query = " SELECT * FROM products WHERE name_product LIKE '%$searching%' "  ;
		$this->get_query () ;
			if ($this->rows != null) {
				foreach ($this->rows as $key => $value) {
					$data[$key] = $value ;
				}
			} else if ($this->rows == null) {
				$this->query = " SELECT * FROM categories WHERE category LIKE '%$searching%' "  ;
				$this->get_query () ;
				if ($this->rows != null) {
					foreach ($this->rows as $key => $value) {
						$data[$key] = $value ;
					}
				} else {
					$data[] = null ;	
				}
			}

			/*else {
				$data[] = null ;
			}*/

		//if ($this->rows != null) {
			/*foreach ($this->rows as $key => $value) {
				$data[$key] = $value ;
			}*/
		//}
		/*$this->query = " SELECT * FROM products WHERE id_product LIKE '%$searching%' "  ;
		$this->get_query () ;
		if ($this->rows != $searching) {
			foreach ($this->rows as $key => $value) {
				$data[$key] = $value ;
			}
			$arrayCampo = array ("name_table" => "products", "name_colls" => "id_product");
			return  $arrayCampo ;
		}	else {
			//$arrayCampo = array ("name_table" => null, "name_colls" => null);
			$this->query = " SELECT * FROM categories WHERE category LIKE '%$searching%' "  ;
			$this->get_query () ;
			if ($this->rows != $searching) {
				foreach ($this->rows as $key => $value) {
					$data[$key] = $value ;
				}
				$arrayCampo = array ("name_table" => "categories", "name_colls" => "category");
				return  $arrayCampo ;
			}
		}*/
		return $data ;
		
	}		

	public function del () {}
}