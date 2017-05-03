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
			<a href="main.php"><img class="img_logo" src="..\img\LogoVA.png" alt="Logo del juego"></a> 		</div>

		<div class="container_menu"><!-- abre container imagen -->
			<?php include 'menu.php'; ?>
		</div><!-- cierra container menu -->


		<div class="container_login"> <!-- abre container log in -->
          
			<form class="form_login" action="/action_page.php">
			  	<div class="container_form">
				    <label for="nameuser">Usuario</label>
				    <input type="text" placeholder="Nombre de usuario" name="username" required id="nameuser">

				    <label for="userpassword">Contraseña</label>
				    <input type="password" placeholder="Contraseña" name="password" required id="userpassword">

			    	<button type="submit">Login</button>
			  		<input type="checkbox" checked="checked"> Recuérdame
			 	</div>

				<div class="container_form2">
				    <span class="psw">¿Olvidaste tu <a href="#">Contraseña?</a></span>
			    </div>
			</form>
          
     	</div><!-- cierra container log in -->



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