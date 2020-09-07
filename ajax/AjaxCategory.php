<?php
require ("../system/config.php") ;
require_once ("../models/CategoryModel.php") ;
require_once ("../controllers/CategoryController.php") ;
$objectCategoryView = new CategoryController ();
$getCategory = $objectCategoryView->getCategories($category = '');
$register_number_category = count($getCategory);


$Ajax_Category = null ;
/*$Ajax_Category = '
<div class="py-0 text-secondary small black borde">Categoría:&nbsp&nbsp</div>
	<div class="py-0 borde">
		<nav class="navbar navbar-expand-lg navbar-light color_f6f4f0ff">
			<div class="container">
				<div class="dropdown">
					<button class="small black btn btn-white dropdown-toggle" type="button" data-toggle="dropdown"> All
					<span class="caret"></span></button>
					<ul class="dropdown-menu"> ' ;*/

						$Ajax_Category .= '
						<li><a class="text-secondary small black" href="'.SERVERURL.'Tienda/Todo/0/1">Todo</a></li> ' ;

						for ($i=1; $i <= $register_number_category ; $i++) { 
							$Ajax_Category .= '
							<li><a class="text-secondary small black" href="'.SERVERURL.'Tienda/' . $getCategory [$i-1] ['category'] . '/0/1">' . $getCategory [$i-1] ['category'] . '</a></li>
							' ;
						}

					/*$Ajax_Category .= '
					</ul>
				</div>
			</div>
		</nav>
	</div>
	<div class="pl-5 text-secondary small black borde">Resultados:&nbsp&nbsp</div>
	<!--div class="text-secondary small black borde">'.$register_number_category.'</div-->
	' ;*/

	print ($Ajax_Category) ;