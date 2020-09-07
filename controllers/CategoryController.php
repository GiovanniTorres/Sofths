<?php
class CategoryController {
	private $categorymodel ;

	public function __construct () {
		$this->categorymodel = new CategoryModel () ;
	}

	public function getCategories ($category = "") {
		return $this->categorymodel->get ($category) ;
	}

	public function setCategories ($category_data) {
		return $this->categorymodel->set ($category_data) ;
	}

	public function __destruct () {
		unset($this->categorymodel) ;
	}
}