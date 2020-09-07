<?php
class ProductController {
	private $productmodel ;

	public function __construct () {
		$this->productmodel = new ProductModel () ;
	}

	public function getProducts ($product, $category) {
		return $this->productmodel->get ($product, $category) ;
	}

	public function setProducts ($product_data) {
		return $this->productmodel->set ($product_data) ;
	}

	public function __destruct () {
		unset($this->productmodel) ;
	}
}