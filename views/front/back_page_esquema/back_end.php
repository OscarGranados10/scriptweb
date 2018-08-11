<?php 
include ('../../../views/front/templates/head_admin.php');

if(isset($_GET['error'])){

	include ('views/errors/errors.php');
}

?>
<center>
<section>
	<div class="div_admin_a">
		<div class="div_admin_a_a">
			<figure>
			<img src="http://localhost/scriptweb/public/images/iconos/user_perfil-01.png" alt="perfil" title="usuario">
		</figure>

		<article>
			<button class="aprendiz">A</button>
			<button class="cordinador">C</button>
			<button class="instructor">I</button>
		</article>
		   
		</div>
		<div class="div_admin_a_b">
			<p>-----------Nombre-----------</p>
			
			<p>-----------Proyecto-----------</p>

			<p>-----------Categoría-----------</p>
		</div>
    </div>
</section>
<section>
	<div class="div_admin_search">
	<form>
			<p>
			<input type="submit" class="btn_buscador" value="---B---">
			<input type="search" class="buscador" placeholder="Buscar....">
		    </p>
		</form>
	</div>
</section>
<section>
	<div class="div_admin_b">
		<div class="div_admin_b_a">
			<figure>
			<img src="http://localhost/scriptweb/public/images/iconos/caperta_user.png" class="div_carpeta">
		</figure>
		</div>
		<div class="div_admin_b_b">
			<div class="recuadro">
			</div>
			<article>
				<button>Código</button>
			    <button>Mapa</button>
			    <button>Navegador</button>
			</article>
		</div>
	</div>
</section>
<section>
	<div class="div_admin_c">
		<div class="div_admin_c_a">
			<img src="http://localhost/scriptweb/public/images/iconos/grafica_admin.png" class="grafica_admin">
			
		</div>
		<div class="div_admin_c_b">
			<button>--------------------</button><br>
			<button>--------------------</button><br>
			<button>--------------------</button><br>
			<button>--------------------</button><br>
			<button>--------------------</button><br>
			<button>--------------------</button><br>
		</div>
</section>
<section>
	<div class="div_admin_d">
		<div class="star_1">
		</div>
		<div class="star_2">
		</div>
		<div class="star_3">
		</div>
		<div class="star_4">
		</div>
		<div class="star_5">
		</div>
	</div>
</section>
</center>

<?php include ('../../../views/front/templates/foot.php'); ?>