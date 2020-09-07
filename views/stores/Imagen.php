<?php
if (isset($_GET['r'])) $divide = explode("/", $_GET['r']);
$name_page = $divide[4] ;
$num_page = $divide[5] ;

$objectProductView = new ProductController ();
$getProduct = $objectProductView->getProducts($product = $num_page, $category = '');
//$register_number = count($getProduct);

$show_template = '
<div class="container d_flex p-3 borde">
	<div class="big_box_first borde">
		<div class="img_bigg py-0 borde"></div>
	</div>

	<div class="d_flexc py-2 borde">
		<div class="boxes box_A pr-0 borde">
			<img src="' . $getProduct [0] ['image'] . '" class="images_small img_1">
		</div>
		<div class="boxes box_B pr-0 pl-0 borde">
			<img src="/images/gal_img_def_2.png" class="images_small img_2">
		</div>
		<div class="boxes box_C pl-0 borde">
			<img src="/images/gal_img_def_3.png" class="images_small img_3">
		</div>
	</div>

	<div class="big_box_second box_img_big borde">
		<div class="img_big p-2 borde"></div>
	</div>

	<div class="description_right py-2 borde">
		<div class="col-md-12 py-0 borde" id="features_product1">
			<div class="card-deck mb-0 text-center">
				<div class="col-md-12 p-0 borde">

					<div class="card-header border">
						<div class="text-center name_product"> ' . $getProduct [0] ['name_product'] . ' </div>
					</div>

					<div class="border">
						<div class="box_img_product p-3">' . $getProduct [0] ['description'] . '</div>
						<div class="image_hidden box_img_product border border-secondary"> <img src="' . $getProduct [0] ['image'] . '" class="img_product"/> </div>
						<div class="text-center py-2"><h5>$ <span class="price_product">' . $getProduct [0] ['price'] . '</span></h5></div>
						<!--a class="text-white btn btn-block py-1 btn_secondary lol" href="'.SERVERURL.$divide[0].'/'.$divide[1].'/'.'Imagen/'.$num_page.'">Ver</a-->
						<a class="text-white btn btn-block py-1 btn-primary add_product1" data-id="1" href="">Agregar</a>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>

<script src="http://localhost/public/js/imagen/carrito1.js"></script>
<script src="http://localhost/public/js/imagen/pedido1.js"></script>
<script src="http://localhost/public/js/carusel.js"></script> 
' ;
print($show_template) ;


/*
<div class="container d_flex p-3 border">
	<div class="big_box_first border">
		<div class="img_bigg py-0 border"></div>
	</div>

	<div class="d_flexc p-2 border">
		<div class="boxes box_A p-1 border">
			<img src="/images/gal_img_def_1.png" class="images_small img_1">
		</div>
		<div class="boxes box_B col-md-12 p-1 border">
			<img src="/images/gal_img_def_2.png" class="images_small img_2">
		</div>
		<div class="boxes box_C col-md-12 p-1 border">
			<img src="/images/gal_img_def_3.png" class="images_small img_3">
		</div>
	</div>

	<div class="big_box_second box_img_big border">
		<div class="img_big p-2 border"></div>
	</div>

	<div class="description_right p-2 border">
		<div class="col-md-12 py-1 border">
			<div class="col-md-12 py-3 border"></div>	
			<div class="col-md-12 py-3 border"></div>	
			<div class="col-md-12 py-3 border"></div>	
			<div class="col-md-12 py-3 border"></div>	
		</div>
	</div>
</div>

<script src="http://localhost/public/js/carusel.js"></script> ' ;
*/