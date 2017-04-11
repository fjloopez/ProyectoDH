<!DOCTYPE html>
<html>
<head>
	<title>Log In</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/styles.css">
</head>
<body>
	<div class='container'> <!-- abre container principal-->

		<div class="container_logo">
			<img class="img_logo" src="..\img\logoVA.png" alt="Logo del juego">
		</div>

		<div class="container_menu"><!-- abre container imagen -->
			<?php include 'menu.php'; ?>
		</div><!-- cierra container menu -->


		<div class="container_register"> <!-- abre container register -->
          
			<form action="script.php" method="post" class="register">
				<label>Nombre y Apellido</label>
				<br>
				<input type="text" name="firstname" placeholder="Nombre" required>
				<input type="text" name="surname" placeholder="Apellido" required>
				<br>

				<label>Correo Electrónico </label>
				<br>
				<input type="email" name="email" placeholder="Correo Electrónico" required>
				<br>

				<label> Confirmá tu Correo </label>
				<br>
				<input type="email" name="verificarcorreo" placeholder="Confirmar Correo" required>
				<br>

				<label> Creá tu Contraseña </label>
				<br>
				<input type="password" name="contraseña" placeholder="Contraseña" required>
				<br>

				<label> Confirmá Contraseña </label>
				<br>
				<input type="password" name="verificacioncontraseña" placeholder="Confirmar Contraseña" required>
				<br>

				<label for="birth_date">Fecha de Nacimiento </label>
				<br>
				<input type="date" name="birth_date" placeholder="Fecha de Nacimiento">
				<br>

				<label> Género</label>
				<br>
				<input type="radio" name="gender" value="male" checked> Hombre<br>
				<input type="radio" name="gender" value="female"> Mujer<br>
				<input type="radio" name="gender" value="other"> Prefiero no decirlo
				<br>

				<button align="center" type="submit">Enviar</button>
				<button type="reset">Borrar</button>
				
			</form>
          
     	</div><!-- cierra container register -->




		<div class="container_img_login"> <!-- abre container imagen -->
			<article>
				<section>
					<img class="img_character" src="..\img\Personajes.png" alt="Main character">
				</section>
			</article>
		</div><!-- cierra container imagen -->


		<div class="container_footer">
			<?php include "footer.php" ?>
		</div>

	</div> <!-- cierra container principal-->



</body>
</html>