<?php
require ("../system/config.php") ;
require_once ("../models/SearchModel.php") ;
require_once ("../controllers/SearchController.php") ;
$l = $_POST["l"] ;

$objectCategoryView = new SearchController ();
$getSearch = $objectCategoryView->getSearch($searching = $l);
$register_number_category = count($getSearch);

$Ajax_Category = '' ;
for ($i=1; $i <= $register_number_category ; $i++) {
	if (isset($getSearch [$i-1] ['name_product'])) {
		$Ajax_Category .= '
		<li  class="element_list_search"><a class="text-secondary small black" href="'.SERVERURL.'Tienda/Todo/' . $getSearch [$i-1] ['name_product'] . '/1">' . $getSearch [$i-1] ['name_product']. '</a></li>
		' ;
	} else if (isset($getSearch [$i-1] ['category'])) {
		$Ajax_Category .= '
		<li  class="element_list_search"><a class="text-secondary small black" href="'.SERVERURL.'Tienda/' . $getSearch [$i-1] ['category'] . '/0/1">' . $getSearch [$i-1] ['category']. '</a></li>
		' ;
	} else {
		$Ajax_Category .= '
		<li  class="element_list_search"><a class="text-secondary small black" href="#">No hay resultados</a></li>
		' ;	
	}
}

	print ($Ajax_Category) ;