<?php 
//Encabezado de la pagina
include ('../../views/front/templates/head.php');

//validar errores
if(isset($_GET['error'])){

	include ('views/errors/errors.php');
}

?>
<div class="register_page">
<center>
	<h2>Registrarte</h2>
	<form class="form_register">
		<p> 
			<label>Nombres</label><br>
			<input type="text" name="nombre_primero" class="form_simple" placeholder="Primer Nombre..." required><br>
	
			<input type="text" name="apellido_primero" class="form_simple"  placeholder="Primer Apellido" required>
		</p>
		<hr>
		<p>
			<label>Usuario</label><br><br>
			<select class="select_usuario">
				<option>Aprendiz</option>
				<option>Instructor</option>
				<option>Cordinador Academico</option>
				<option selected>Tipo de Usuario</option>
			</select>
		</p>
			<hr>

		<p>
			<label>Generos</label><br>
			<input type="radio" class="generos" value="Masculino" name="gender" checked>Masculino
			<input type="radio" class="generos" value="Femenino" name="gender">Femenino
			<input type="radio" class="generos" value="Otro" name="gender">Otro
					</p>
			<hr>

		<p>
			<label>Fecha</label><br><br>
			<select name="anio_ig" class="select_fecha">
			<script>
				var a;
				for(a=2018; a>1930; a++){

					document.write("<option>" + a "</option>")
				}

			</script>
			<option selected>Año</option>
		    </select>
		    <select name="mes_ig" class="select_fecha">
						 <script>
				var m;
				for(m=1; m>12; m++){

					document.write("<option>" + m "</option>")
				}

			</script>   	
 			<option selected> Mes</option>
		    </select>
		    <select name="dia_ig" class="select_fecha">
		    <script>
				var d;
				for(d=1; d>31; d++){

					document.write("<option>" + d "</option>")
				}

			</script>
			<option selected> Dia</option>	
		    </select>
		</p>
			<hr>

		<p>
			<label>Identificación</label><br><br>
			<select class="ident_select">
				<option>Tarjeta de Identidad</option>
				<option>Cedula de extranjeria</option>
				<option>Cedula de ciudadania</option>
				<option selected>Seleccionar Documento</option>
			</select><br>
			<input type="number" class="form_simple" placeholder="12345..." >
		</p>
			<hr>

		<p>
			<label>Email</label><br>
			<input type="email"  class="form_simple" placeholder="Email">
		</p>
			<hr>

		<p>
			<label>Contraseña</label><br>
			<input type="password" class="form_simple"  placeholder="Contraseña...">
		</p>
		<p>
			<input type="password" class="form_simple"  placeholder="Confirmar Contraseña">
		</p>
			<hr>

		<p>
			<label>Telefonos</label><br>
			<select class="cell_select">
				<script>
				var e;
				for(e='+57'; d>'+1'; e++){

					document.write("<option>" + e "</option>")
				}

			</script>
			<option selected>+57</option>	

			<input type="number" class="form_simple"  placeholder="Celular...">
		</p>
		<p>
			<input type="submit" value="T">
			<input type="number" class="form_simple" placeholder="Telefono...">
		</p>
			<hr>

		<p>
			<label>Territorio</label><br><br>
			<select class="te_select">
				<option selected>Paises</option>
				<option>Paises</option>
				<option>Paises</option>
				<option>Paises</option>
				<option>Paises</option>
				<option>Paises</option>
				<option>Paises</option>
				<option>Paises</option>
				<option>Paises</option>
				<option>Paises</option>
				<option>Paises</option>
				<option>Paises</option>
				<option>Paises</option>
				<option>Paises</option>
			</select><br><br>
		</p>
		<p>
			<select class="te_select">
				<option selected> Departamentos/estados/provincias</option>
				<option>Departamento</option>
				<option>Departamento</option>
				<option>Departamento</option>
				<option>Departamento</option>
                <option>Departamento</option>
                <option>Departamento</option>
                <option>Departamento</option>
                <option>Departamento</option>
                 <option>Departamento</option>
			</select><br><br>
		</p>
		<p>
			<select class="te_select">
				<option selected> Ciudades/municipios</option>
				<option>Ciudad</option>
				<option>Ciudad</option>
				<option>Ciudad</option>
				<option>Ciudad</option>
				<option>Ciudad</option>
				<option>Ciudad</option>
				<option>Ciudad</option>
				<option>Ciudad</option>
				<option>Ciudad</option>
				<option>Ciudad</option>
			</select><br><br>
		</p>
		<p>
			<select class="te_select" >
				<option selected> Comunas</option>
				<option>Comuna</option>
				<option>Comuna</option>
				<option>Comuna</option>
				<option>Comuna</option>
				<option>Comuna</option>
				<option>Comuna</option>
				<option>Comuna</option>
				<option>Comuna</option>
				<option>Comuna</option>
			</select>
		</p>
				<hr>
           	<hr>
          <p>
          	<input type="submit" class="btn_enviar" value="Registrarse">
          	<input type="reset" class="btn_borrar" value="borrar">
          </p>
	</form>




<!--

				<fieldset>
					<legend>Formulario de Registro</legend>
						<form name="register" method="post" action="http://localhost/scriptweb/app/Http/Controllers/registroController.php">
							<p>
								<select name="genre" required>
									<option value="hombre">Hombre</option>
									<option value="mujer">Mujer</option>
									<option value="genero" selected>Genero</option>
								</select>
							</p>
							<p>
								<input type="text" name="nombre" placeholder="Nombre completo.." required>
							</p>
							<p>
								<input type="email" name="correo" placeholder="Correo electronico.." required>
							</p>
							<p>
								<input type="password" name="password" placeholder="Contraseña.." required>
							</p>
							<p>
								<input type="password" name="conf_pass" placeholder="Confirmar contraseña.." required>
							</p>
							<p>
								<input type="submit" name="btn-register" value="Registrar usuario">
								<input type="reset" value="Limpiar datos">
							</p>
						</form>
					</fieldset>
-->
</center>
</div>

<?php include ('../../views/front/templates/foot.php'); ?>