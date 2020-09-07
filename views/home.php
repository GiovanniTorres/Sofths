<?php
if (isset($_GET['r'])) $divide = explode("/", $_GET['r']);
//$name_page = $divide[0] ;
//$num_page = $divide[1] ;

$home_html = ' 
<div class="image1">
	<img src="./images/sofths_principal.png" width="100%" alt="Responsive image" height="auto">
</div>

<div class="blue_beyond">

	<div class="container justify-content-center align-items-center d_flex borde">
		<div class="marco1">
			<div class="col-md-12 text-secondary text-center"> <p class="title"> ¿ Para que sirve una página web ? </p> </div>
			<div class="col-md-12 text-secondary">
				<p align="justify" class="text-light">
					Si tienes una empresa o negocio, una página web es ideal para ti, no busques mas tenemos la solucion perfecta para decirle al mundo lo que vendes, lo que piensas o lo que haces, registrate y obten un mundo de posibilidades.
				</p>
			</div>
		</div>

		<div class="py-2 marco1 image2 py-1 borde">
			<div class="py-1 borde">
				<img src="./images/homeImg1.png" width="100%" alt="Responsive image" height="auto">
			</div>
		</div>
	</div><br /><br />

	<div class="col-md-12 py-1">
		<div class="col-md-12 py-1">
			<div class="container">
				<div class="row justify-content-center">
					<a href="'.SERVERURL.'Tienda/Todo/0" class="col_md_n3 py-2 enlace1 text-center rounded">Plantillas</a>
				</div>
			</div>
		</div>
	</div><br /><br />

</div>



<div class="dark_blue">

	<div class="container justify-content-center align-items-center d_flex borde">

		<div class="marco1 display1">
			<div class="col-md-12 text-secondary text-center"> <p class="title"> Diseñamos tu sitio web a tu medida </p> </div>
			<div class="col-md-12 text-secondary">
				<p align="justify" class="text-light">
					Nos adaptamos a tu presupuesto, tenemos los mejores diseños y herramientas, solicita una cotización en este enlace.
				</p>
			</div>
		</div>

		<div class="marco1 display1">
			<div class="py-2 col-md-12 image2 borde">
				<div class="borde">
					<img src="./images/homeImg2.png" width="80%" alt="Responsive image" height="auto">
				</div>
			</div>
		</div>


		<div class="marco1 display2">
			<div class="col-md-12 image2 borde">
				<div class="borde">
					<img src="./images/homeImg2.png" width="80%" alt="Responsive image" height="auto">
				</div>
			</div>
		</div>

		<div class="marco1 display2">
			<div class="col-md-12 text-secondary text-center"> <p class="title"> Diseñamos tu sitio web a tu medida </p> </div>
			<div class="col-md-12 text-secondary py-">
				<p align="justify" class="text-light">
					Nos adaptamos a tu presupuesto, tenemos los mejores diseños y herramientas, solicita una cotización en este enlace.
				</p>
			</div>
		</div><br /><br />

	</div>

	<div class="col-md-12 py-1">
		<div class="col-md-12 py-1">
			<div class="container">
				<div class="row justify-content-center">
					<a href="'.SERVERURL.'Tienda/1" class="col_md_n3 py-2 enlace1 text-center rounded">Plantillas</a>
				</div>
			</div>
		</div>
	</div><br /><br />

</div>


<div class="blue_beyond">
	<div class="container">
		<div class="row justify-content-center borde"> 
		<div class="margin_register borde rounded">' ;

			if (!$_SESSION['i']) 
			$home_html .= ' 
			<form id="altaUser" data-insert>
				<div class="col-md-12 text-center text-secondary "><h5>Registrate</h5></div><br>
				
				<div class="col-md-12 alinear">
					<div class="alinear col-md-12 py-2 ">
						<input type="text" id="register-name" name="register-name" class="col-md-12 rounded py-2 border" placeholder="Introduce el nombre">
					</div>
					
					<div id="register-mensaje1" class="notification_hide notification1 form-danger text-center text-white rounded">
						<span id="icon-notification" class="icon-notification text-warning"><span class="messenger">&nbspNombre</span></span>
					</div>
				</div>

				<div class="col-md-12 alinear">
					<div class="alinear col-md-12 py-2 ">
						<input type="text" id="register-user" name="register-user" class="col-md-12 rounded py-2 border" placeholder="Introduce el usuario">	
					</div>
					<div id="register-mensaje2" class="notification_hide notification1 form-danger text-center text-white rounded">
						<span id="icon-notification" class="icon-notification text-warning"><span class="messenger">&nbspUsuario</span></span>
					</div>
				</div>

				<div class="col-md-12 alinear">
					<div class="alinear col-md-12 py-2 ">
						<input type="text" id="register-password" name="register-password" class="col-md-12 rounded py-2 border" placeholder="Introduce la contraseña">
					</div>
					<div id="register-mensaje3" class="notification_hide notification1 form-danger text-center text-white rounded">
						<span class="icon-notification text-warning"><span class="messenger">&nbspContraseña</span></span>
					</div>
				</div>

				<div class="col-md-12 alinear">
					<div class="alinear col-md-12 py-2 ">
						<input type="text" id="register-telephone" name="register-telephone" class="col-md-12 rounded py-2 border" placeholder="Móvil">
					</div>
					<div id="register-mensaje4" class="notification_hide notification1 form-danger text-center text-white rounded">
						<span class="icon-notification text-warning"><span class="messenger">&nbspTeléfono</span></span>
					</div>
				</div>
				
				<div class="col-md-12 alinear">
					<div class="alinear col-md-12 py-2 ">
						<input type="text" id="register-mail" name="register-mail" class="col-md-12 rounded py-2 border" placeholder="E-mail">	
					</div>
					<div id="register-mensaje5" class="notification_hide notification1 form-danger text-center text-white rounded">
						<span class="icon-notification text-warning"><span class="messenger">&nbspCorreo</span></span>
					</div>
				</div>
				<br>
				
				<div class="col-md-12 alinear">
					<div class="col-md-12 py-2">
						<input type="submit" id="bEnviar" class="col-md-12 py-2 btn_submit text-white">
						<input type="hidden" id="transaction" name="transaction" value="insert" />
					</div>
				</div>
			</form>

			<div class="bg_04253e" id="loading2"></div>
			</div>
		</div>
	</div>
</div> ' ;

if ($_SESSION['i']) 
$home_html .= ' 
<div class="text-white text-center">
<a href="" class="text-danger">
	<span class=" btn_user"><img src="'.SERVERURL.'images/user_img.png" class="img_usr"></span>
</a>
</div>
<div class="text-white text-center">'.$_SESSION["user"].'</div>
' ;


if (!$_SESSION['i']) 
$home_html .= ' 
 ' ;
print ($home_html) ;
