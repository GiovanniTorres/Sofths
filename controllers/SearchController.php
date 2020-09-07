<?php
class SearchController {
	private $searchmodel ;

	public function __construct () {
		$this->searchmodel = new SearchModel () ;
	}

	public function getSearch ($searching = "") {
		return $this->searchmodel->get ($searching) ;
	}

	public function setSearch ($searching_data) {
		return $this->searchmodel->set ($searching_data) ;
	}

	public function __destruct () {
		unset($this->searchmodel) ;
	}
}