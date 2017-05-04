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
			<a href="main.php"><img class="img_logo" src="..\img\LogoVA.png" alt="Logo del juego"></a> 
		</div>

		<div class="container_menu"><!-- abre container imagen -->
			<?php include 'menu.php'; ?>
		</div><!-- cierra container menu -->

		<?php if (isset($_SESSION['errors'])): ?>	<!-- abre el chequeo de errores -->	
			<div class="alert">
				<?php foreach($_SESSION['errors'] as $error): ?>
					<p><?php echo $error; ?></p>
				<?php endforeach; ?>
			</div>
		<?php endif; ?>		<!-- cierra el chequeo de errores -->


		<div class="container_register"> <!-- abre container register -->
			<h2>TU REGISTRO FUE EXITOSO</h2>
			<h2>TU REGISTRO FUE EXITOSO</h2>
			<h2>TU REGISTRO FUE EXITOSO</h2>
			<h2>TU REGISTRO FUE EXITOSO</h2>
          
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