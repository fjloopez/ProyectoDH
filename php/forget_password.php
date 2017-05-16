<?php include 'head.php' ?>
<body>
	<div class='container'> <!-- abre container principal-->

		<div class="container_logo">
			<a href="main.php"><img class="img_logo" src="..\img\LogoVA.png" alt="Logo del juego"></a> 		
		</div>

		<div class="container_menu"><!-- abre container imagen -->
			<?php include 'menu.php'; ?>
		</div><!-- cierra container menu -->

		<div class="container_forget_psw"> <!-- abre container olvide forget_psw -->

		<?php if (isset($_SESSION['errors_forget_password'])): ?>	<!-- abre el chequeo de errores -->	
			<div class="alert">
				<p><?php echo $_SESSION['errors_forget_password']; ?></p>
			</div>
		<?php endif; ?>		<!-- cierra el chequeo de errores -->

			<form class="form_forget_psw" action="controllers/forget_password.controller.php" method="post" enctype="multipart/form-data">
			  	<div class="container_form">
				    <label for="nameuser">Usuario</label><br>
				    <input type="text" placeholder="Nombre de usuario" name="username" required id="username">
			    	<button class="buttonSendMail" type="submit">Enviar</button><br>
			 	</div>
			</form>
		
          
     	</div><!-- cierra container forget_psw -->



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
<?php
	unset($_SESSION['errors_forget_password']);
?>