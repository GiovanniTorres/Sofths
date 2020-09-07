

<?php
if (isset($_GET['r'])) $divide = explode("/", $_GET['r']);

$name_page 	= $divide[0] ;
if ( $divide[1] == "Todo"	) 	{	$cate = '' ; 		} else { $cate = $divide[1] 	; }
if ( $divide[2] == "0"		) 	{ 	$id_prod = '' ; 	} else { $id_prod = $divide[2] 	; }
$num_page 	= $divide[3] ;

$objectProductView = new ProductController ();
$getProduct = $objectProductView->getProducts($product = $id_prod, $category = $cate);
$register_number = count($getProduct);

$html_template = '
	<div class="payment col-md-12">

		<div class="payment_header">
			<a href="" id="btn_closes"><div class="btn_close"></div></a>
		</div>

		<form action="'.SERVERURL.'CreateCharge.php" method="post" id="payment-form">
			<div class="form-row">
		    	<label for="card-element" class="text-secondary pl-1">
		      		Introduce núm. de tarjeta (Crédito o débito)
		    	</label>
			    <div id="card-element">
			    	<!-- A Stripe Element will be inserted here. -->
			    </div>

			    <!-- Used to display form errors. -->
				<div id="card-errors" role="alert"></div>
			</div>

			<div class="container justify-content-center">
				<button id="pay" class="text-white btn btn-block btn-primary border border-primary">Realizar Pago</button>
			</div>
		</form>

	</div>
' ;

/*Categorias*/
$html_template .= '
<div class="container pt-0 d-flex borde">

	<div class="py-0 text-secondary small black borde">Categoría:&nbsp&nbsp</div>

	<div class="py-0 borde">
		<nav class="navbar navbar-expand-lg navbar-light color_f6f4f0ff">
			<div class="container">
				<div class="dropdown">
					<button class="small black btn btn-white dropdown-toggle" type="button" data-toggle="dropdown"> '.$divide[1].'
					<span class="caret"></span></button>

					<ul class="dropdown-menu">
					<div class="categories_ajax">
						<!--span>AjaxCategory.php</span-->
					</div>
					</ul>

				</div>
			</div>
		</nav>
	</div>

	<div class="pl-5 text-secondary small black borde">
		<input type="text" id="bsearch" class="box_search" placeholder="buscar...">

		<ul class="list_search">
			<!--li class="element_list_search"><a href="#" class="text-secondary"><i class="element_search"></i>HTML</a></li-->
		</ul>
	</div>

	<div class="pl-5 text-secondary small black borde">Resultados:&nbsp&nbsp</div>

	<div class="text-secondary small black borde">'.$register_number.'</div>

</div>
 ' ;

$register_for_page = 6 ;
$pages_for_show = 8 ;
$beginshow = 1 ;

$aprox_pages = $register_number / $register_for_page ;
$string_number = $aprox_pages % 100 ;
$residuo = $register_number % $register_for_page ;
if ($residuo > 0) {
	$totalPages = $string_number + 1;
} else {
	$totalPages = $string_number;
}
$end_regis_for_this_page = $register_for_page * $num_page ;
$begin_regis_for_this_page = $end_regis_for_this_page - 5 ; //($register_for_page - 1) ;

$lastcola = $totalPages - ($pages_for_show - 1) ;
if ($num_page > $lastcola) {
	$beginshow = $lastcola ;
	$endshow = $beginshow + ($pages_for_show - 1) ;
} else {
	$division = $num_page / $pages_for_show ;
	if ((int) $division == $division) {
		$multiplicador = $division ;
	} else {
		$string_number_2 = $division % 100;
		$multiplicador = $string_number_2 + 1 ;
	}
$multiplicador ;
$endshow = $pages_for_show * $multiplicador ;
$beginshow = $endshow - ($pages_for_show - 1) ;
}


/*Productos*/
$html_template .= '
<div class="container p-3 borde" id="features_product">

	<div class="py-2 d_flexa borde">

		<div class="marco2 p-2 borde">
			<div class="p-3 borde">
				<div class="Tienda card-deck"> ' ;

					for ($a=1; $a <= $register_number; $a++) {
						if ($a >= $begin_regis_for_this_page && $a <= $end_regis_for_this_page) {
						$html_template .= '
						<div class="col-md-4 p-1 borde">
							<div class="card-header border">
								<a class="lol" href="'.SERVERURL.$divide[0].'/'.$divide[1].'/'.$divide[2].'/'.$divide[3].'/Imagen/'.$getProduct [$a-1] ['name_product'].'">
									<div class="box_img_product border border-secondary"> <img src="' . $getProduct [$a-1] ['image'] . '" class="img_product"/> </div>
								</a>
							</div>
							<div class="card-body border">
								<div class="text-center p-0 small black name_product"> ' . $getProduct [$a-1] ['name_product'] . ' </div>
								<div class="text-center py-2"><h5>$ <span class="price_product">' . $getProduct [$a-1] ['price'] . '</span></h5></div>
								<!--a class="text-white btn btn-block py-1 btn_secondary lol" href="'.SERVERURL.$divide[0].'/'.$divide[1].'/'.$divide[2].'/'.$divide[3].'/Imagen/'.$getProduct [$a-1] ['id_product'].'">Ver</a-->
								<a class="text-white btn btn-block py-1 btn_primary add_product" data-id="1" href="">Agregar</a>
							</div>
						</div> ' ;
						}
					}

				$html_template .= '
				</div>				
			</div>
		</div> ' ;

/*Carrito*/
		$html_template .= '
		<div class="marco3 p-3 pt-4 borde">
			<div class="py-0 borde">
				<div class="carr p-0 border">
					<div id="carrito" class="py-0 borde">
						<table id="lista-carrito">
							<thead>
								<tr>
									<th class="trListaCart card-header">Id</th>
									<th class="trListaCart card-header">Imagen</th>
									<th class="trListaCart card-header">Nombre</th>
									<th class="trListaCart card-header">Precio</th>
									<th class="trListaCart card-header"></th>
								</tr>
							</thead>
							<tbody>
										
							</tbody>
						</table>	
					</div>
				</div>
				<div class="col-md-12 d-flex py-2 border">
					<!--div class="col-md-3 py-1 borde"></div-->
					<div class="col-md-7 py-1 borde">
						<p><span class="totals"><b>Sub-total</b></span></p>
						<p><span class="totals"><b>IVA</b></span></p>
						<p><span class="totals"><b>Total</b></span></p>
					</div>
					<div class="col-md-4 py-1 borde">
						<p><span class="totals" id="subtotal"></span></p>
						<p><span class="totals" id="igv"></span></p>
						<p><span class="totals" id="total"></span></p>
					</div>
				</div>
				<div class="justify-content-center py-3 d-flex borde">
					<div class="col-md-6 borde"><a href="#" id="empty_cart" class="text-white btn btn_secondary btn-block">Vaciar</a></div>
					<div class="col-md-6 borde"><a href="#" id="request_purchase" class="text-white btn btn_success btn-block">Solicitar</a></div>
				</div>
			</div>
		</div>

	</div>
</div> ' ;
				
/*Paginacións*/				
$html_template .= '
<div class="justify-content-center template_gost_1 border">
	<div class="py-2 justify-content-center d-flex fontsize_x_small align-items-center text-light borde"></div>
	<div class="container col-md-5 fontsize_x_small color_text_oscuro text-center py-1 borde">
		Página '.$num_page.' 
	</div>
	<div class="py-2 justify-content-center d-flex fontsize_x_small align-items-center text-light borde"> ' ;

	for ($i=1; $i <= $totalPages ; $i++) { 
		if ($i >= $beginshow && $i <= $endshow) {
			if ($i == $beginshow && $i > 1) {
				$html_template .= '
				&nbsp<a class="textDecoration fontsize_x_small" href="'.SERVERURL.'Tienda/'.($beginshow - 1).'"><div class="btnbackstylePagination"><span class="icon-backward2"></span></div></a> ';
			}
			$html_template .= '
			&nbsp<a class="textDecoration fontsize_x_small" href="'.SERVERURL.$divide[0].'/'.$divide[1].'/'.$divide[2].'/'.$i.'"><div class="stylePagination">'.$i.'</div></a> ';
			if ($i == $endshow && $endshow < $totalPages) {
				$html_template .= '
				&nbsp<a class="textDecoration fontsize_x_small" href="'.SERVERURL.'Tienda/'.($endshow + 1).'"><div class="btnforwstylePagination"><span class="icon-forward3"></span></div></a> ';
			}
		}
	}

	$html_template .= '
	</div>
	<div class="container col-md-5 fontsize_x_small color_text_oscuro text-center py-1 borde"> ' ;

		if ($endshow < 8) {
			$html_template .= '
			Mostrando ( 1 - '.( $endshow ).' ) de '.$totalPages.' páginas ' ;
		} else {
			$html_template .= '
			Mostrando ( '.($beginshow ).' - '.( $endshow ).' ) de '.$totalPages.' páginas ' ;
		}

	$html_template .= '
	</div>
	<div class="py-2 justify-content-center d-flex fontsize_x_small align-items-center text-light borde"></div>
</div>



<script src="http://localhost/public/js/tienda/carrito.js"></script>
<script src="http://localhost/public/js/tienda/pedido.js"></script>
<script src="http://localhost/public/js/tienda/stripe.js"></script>
' ;
print $html_template;


















































/*
<!--div class="container" id="lista-productos">
	<div class="card-deck text-center">
		<div class="col-md-4 py-3 borde">

			<div class="card-header border">
				<h3 class="card-title pricing-card-title userActive"><span class="">Gio</span></h3>
				<h4 class="my-0 font-weight-bold">Hugo Boss</h4>
			</div>

			<div class="card-body border color">
				<img class="imageSize" src="" />
				<h3 class="card-title pricing-card-title precio"><span class="">$300.00</span></h3>
				<ul class="list-unstyled mt-3 mb-4">
					<li></li>
					<li>8 GB RAM</li>
					<li>8 GB RAM</li>
					<li>8 GB RAM</li>
				</ul>
				<a class="btn btn-block btn-primary agregar-carrito" data-id="1" href="#">Comprar</a>
			</div>

		</div>
	</div>
</div>


<script src="http://localhost/public/js/carrito.js"></script>
<script src="http://localhost/public/js/pedido.js"></script-->
*/