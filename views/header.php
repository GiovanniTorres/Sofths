<?php if ($_SESSION['i']) { $usuarioConectado = $_SESSION['user']; } else { $usuarioConectado = 0; } ?>
<script> var usuarioConectadoJava = '<?php echo $usuarioConectado;?>'; </script>

<?php
require_once ('./system/config.php') ;
$divide = 0;
if (isset($_GET['r'])) $divide = explode("/", $_GET['r']);
$name_page = $divide[0] ;
$num_page = $divide[1] ;
$header_html = '
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="'.SERVERURL.'public/bootstrap-4.3.1-dist/css/bootstrap.min.css">
	<script src="https://js.stripe.com/v3/"></script>
	<script src="'.SERVERURL.'public/js/jquery-3.4.0.min.js"></script>
	<script src="'.SERVERURL.'public/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="'.SERVERURL.'public/css/style.css">
	<link rel="stylesheet" href="'.SERVERURL.'public/css/app.css">
	<link rel="stylesheet" href="'.SERVERURL.'public/fonts/style.css">
	<link rel="stylesheet" href="'.SERVERURL.'public/fonts1/style.css">
</head>
<body>
	<nav class="navbar principal navbar-expand-lg navbar-light color_f6f4f0ff">

		<div class="container justify_content_center">

			<a class="navbar-brand text-dark" href="#">Sofths</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-control="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto borde">
					<li class="nav-item"><a href="'.SERVERURL.'" class="nav-link text-dark">Home</a></li>
					<li class="nav-item"><a href="'.SERVERURL.'Tienda/Todo/0/1" class="nav-link text-dark">Tienda</a></li> 
					<li class="nav-item"><div class="col-md-12 borde"></div></li> 
					<li class="nav-item dropdown">';
						if ($name_page == "template") {
						$header_html .= '
						<!--img src="'.SERVERURL.'images/carrito.png" class="nav-link carrito_cali dropdown-toggle img-fluid" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></img-->';
						}

						$header_html .= '
						<!--div id="carrito" class="dropdown-menu" aria-labeledby="navbarCollapse">
							<table id="lista-carrito" class="table">
								<thead>
									<tr>
										<th class="trListaCart card-header"></th>
										<th class="trListaCart card-header">Imagen</th>
										<th class="trListaCart card-header">Nombre</th>
										<th class="trListaCart card-header">Precio</th>
										<th class="trListaCart card-header"></th>
									</tr>
								</thead>
								<tbody>
								
								<span id="total"></span>
								</tbody>
							</table>	
							<div class="justify-content-center d-flex borde">
								<div class="col-md-6 borde"><a href="#" id="empty_cart" class="btn btn-primary btn-block">Vaciar</a></div>
								<div class="col-md-6 borde"><a href="#" id="procesar-pedido" class="btn btn-danger btn-block">Procesar</a></div>
							</div>
						</div-->
					</li>';

					if ($name_page == "template") {
					$header_html .= '
					<li class="nav-item"><span href="'.SERVERURL.'exit" class="nav-link text-light" id="contador"></span></li>
					';
					}

					$header_html .= '
					<li class="nav-item"><div class="col-md-12 borde"></div></li>
					<li class="nav-item"><div class="col-md-12 borde"></div></li>
					<li class="nav-item"><div class="col-md-12 borde"></div></li>
					<li class="nav-item"><div class="col-md-12 borde"></div></li>
					<li class="nav-item"><div class="col-md-12 borde"></div></li>
					<li class="nav-item"><div class="col-md-12 borde"></div></li>
					<li class="nav-item"><div class="col-md-12 borde"></div></li>
					<li class="nav-item"><div class="col-md-12 borde"></div></li>
					<li class="nav-item"><div class="col-md-12 borde"></div></li>
					<li class="nav-item"><div class="col-md-12 borde"></div></li>
					<li class="nav-item"><div class="col-md-12 borde"></div></li>
					<li class="nav-item"><div class="col-md-12 borde"></div></li>
					<li class="nav-item"><div class="col-md-12 borde"></div></li>
					<li class="nav-item"><div class="col-md-12 borde"></div></li>
					<li class="nav-item"><div class="col-md-12 borde"></div></li>
					<li class="nav-item"><div class="col-md-12 borde"></div></li>
					 ';

					 	//if ($name_page == "") {
							if (!$_SESSION['i']) 
							$header_html .= '
							<form id="formLogin" class="form_height py_n" method="post">
								<div class="col-md-3 alinear">
									<div class="alinear mar_log">
										<input type="text" id="user" name="user" class="login text-center border border-white rounded" placeholder="Usuario">	
									</div>
									
									<div class="alinear mar_log">
										<input type="password" id="password" name="password" class="login text-center border border-white rounded" placeholder="******">
									</div>
									<br>
											
									<div class="">
										<input type="submit" id="bEnviar" class="login col-md-12 btn_submit text-white bg-secondary border border-secondary rounded">
									</div>
								</div>
								<br>

								<div class="col-md-3 alinear">
									<div id="login-mensaje1" class="notification_hide col-md-12 notification_2_1 form-danger text-center text-white rounded">
										<span id="icon-notification" class="icon-notification text-warning">&nbspUsuario</span>
									</div>

									<div id="login-mensaje2" class="notification_hide col-md-12 notification_2_2 form-danger text-center text-white rounded">
										<span class="icon-notification text-warning">&nbspContraseña</span>
									</div>
								</div>
							</form> ' ;
						//}

					if ($_SESSION["i"])
					$header_html .= '
					<li class="nav-item"><a href="'.SERVERURL.'Tienda/1" id="bienvenido_user" class="nav-link text-dark">Bienvenido (a): '.$_SESSION["user"].'</a></li> 
					<li class="nav-item shut">
						<a href="'.SERVERURL.'exit" class="nav-link">
							<span id="log_out" class="icon-switch"></span>
						</a>
					</li> ' ;


				$header_html .= '
				</ul>			
			</div>
		</div>
	</nav>
	<div class="py-0 borde">
		<div class="container py-0 borde">
			<div class="py-0 borde">' ;

				if (isset($divide[3])) {
					$header_html .= '
					<a href="'.SERVERURL.'" class="text-secondary small black">Home</a><span class="text-secondary small black">/</span>
					<a href="'.SERVERURL.$divide[0].'/'.$divide[1].'/'.$divide[2].'/'.$divide[3].'" class="text-secondary small black">'.$divide[0] . '</a><span class="text-secondary small black">/</span>
					<span class="text-secondary small black">' . $divide[3] .'</span>' ;
				} elseif (isset($divide[1])) {
					$header_html .= '
					<a href="'.SERVERURL.'" class="text-secondary small black">Home</a><span class="text-secondary small black">/</span>
					<span class="text-secondary small black">'.$divide[0].'</span>' ;
				}
				
			$header_html .= '
			</div>
		</div>
	</div>


	<script src="'.SERVERURL.'public/js/validate.js"></script>
	<main>' ;
	
if (!isset($_POST['user']) AND !isset($_POST['password'])) {
	$login_background = 'text-light' ;
	$login_massage = '&nbsp' ;
} else {
	if (empty($_POST['user']) AND empty($_POST['password'])) {
		$login_background = 'text-warning' ;
		$login_massage = 'Ingresa usuario y contraseña' ;
	} else {
		$login_session = new SessionController () ;
		$session = $login_session->login($_POST['user'], $_POST['password']) ;
		if (empty($session)) {
			$login_background = 'text-danger' ;
			$login_massage = 'No existe usuario o contraseña' ;
		} else {
			$_SESSION['i'] = true ;
			foreach ($session as $row) {
				$_SESSION['mail'] = $row['mail'] ;
				$_SESSION['name'] = $row['name'] ;
				$_SESSION['user'] = $row['user'] ;
				$_SESSION['password'] = $row['password'] ;
				$_SESSION['telephone'] = $row['telephone'] ;
			}
			
			header('Location:' . SERVERURL) ;
		}
	}
}

print ($header_html) ;
