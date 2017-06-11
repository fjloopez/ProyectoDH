<?php include 'head.php'; ?>
<body>
	<div class='container'> <!-- abre container principal-->

		<div class="container_logo">
			<a href="main.php"><img class="img_logo" src="..\img\LogoVA.png" alt="Logo del juego"></a> 		
		</div>

		<div class="container_menu"><!-- abre container imagen -->
			<?php include 'menu.php'; ?>
		</div><!-- cierra container menu -->


		<div class="container_login"> <!-- abre container log out -->
          
			<form class="form_login" action="controllers/log_out.controller.php" method="post" enctype="multipart/form-data">
			  	<div class="container_form">
			    	<button class="buttonLogout" type="submit" name="accept" id="accept">Aceptar</button>
			    	<button class="buttonLogout" type="submit" name="cancel" id="cancel">Cancelar</button><br>
			 	</div>
			</form>
          
     	</div><!-- cierra container log out -->



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