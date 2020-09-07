<?php
function showFormRegister () {
	$form1 = '
	
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
			
	' ;

return printf($form1);	
}

function showFormLogin () {
	$form2 = "
	<form id='loginUsr' class='col-md-12' data-login>

		<div class='col-md-3 alinear'>
			<div class='alinear col-md-12 '>
				<input type='text' id='login-user' name='login-user' class='col-md-12 rounded bg_input border' placeholder='Usuario'>	
			</div>
			
			<div class='alinear col-md-12 '>
				<input type='text' id='login-password' name='login-password' class='col-md-12 rounded bg_input border' placeholder='Contraseña'>
			</div>
			<br>
					
			<div class='col-md-12'>
				<input type='submit' id='bEnviar' class='col-md-12 btn_submit text-white'>
				<input type='hidden' id='transaction' name='transaction' value='validate-user' />
			</div>
		</div>
		<br>

		<div class='col-md-3 alinear'>
			<div id='login-mensaje1' class='notification_hide col-md-12 notification_2_1 form-danger text-center text-white rounded'>
				<span id='icon-notification' class='icon-notification text-warning'>&nbspUsuario</span>
			</div>

			<div id='login-mensaje2' class='notification_hide col-md-12 notification_2_2 form-danger text-center text-white rounded'>
				<span class='icon-notification text-warning'>&nbspContraseña</span>
			</div>
		</div>

	</form>



	<!--form id='loginUsr' class='formLogin borde' data-login>
		<div class='row boxInput borde borde-primary'>
			<div class='divInputLogini borde'><input name='user' class='inputLogin' type='text'></div>
			<div class='divInputLogini borde'><input name='password' class='inputLogin' type='text'></div>
			<div class='divInputLogins borde'><input class='inputLogin' type='submit'></div>
		</div>
	</form-->
	" ;

return printf($form2);	
}