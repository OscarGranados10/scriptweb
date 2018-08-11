<?php 
//Encabezado de la pagina
include ('../../views/front/templates/head.php');

//validar errores
if(isset($_GET['error'])){

	include ('views/errors/errors.php');
}

?>
<div class="login_page">
	<center>
		<h2>¡Enhorabuena!</h2>
		<form class="form_login">
			<p>
				<label>Nombreuse</label>
				<button class="ema_dise">--CA--</button><input type="email" class="form_simple_login" placeholder="Usuario...">
			</p>
			<p>
				<label>Contraseña</label>
				<button class="ema_pass">--YA--</button><input type="password" class="form_simple_login" placeholder="Clave...">
			</p>
			<p>
				<input type="submit" class="btn_login" value="Ingresar">
			</p>
			<p>__________or__________</p>
					<p>
				<button class="btn_face">Ingresar por Facebook</button>
			</p>
			<p>
				<button class="btn_google">Ingresar por Google+</button>
			</p>
		
		</form>
	</center>
</div>

<?php include ('../../views/front/templates/foot.php'); ?>
		