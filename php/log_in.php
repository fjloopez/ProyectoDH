<?php include 'head.php' ?>
<?php  
	$username = '';
?>
<body>
	<div class='container'> <!-- abre container principal-->

		<div class="container_logo">
			<a href="main.php"><img class="img_logo" src="..\img\LogoVA.png" alt="Logo del juego"></a> 		
		</div>

		<div class="container_menu"><!-- abre container imagen -->
			<?php include 'menu.php'; ?>
		</div><!-- cierra container menu -->


		<div class="container_login"> <!-- abre container log in -->
		<?php 
			if (isset($_COOKIE["rememberMe"])){
				$username = $_COOKIE['rememberMe'];
			}
		?>

		<?php if (isset($_SESSION['errors_log_in'])): ?>	<!-- abre el chequeo de errores -->	
			<div class="alert">
				<?php foreach($_SESSION['errors_log_in'] as $error): ?>
					<p><?php echo $error; ?></p>
				<?php endforeach; ?>
				<?php  
					if (!isset($_SESSION['errors_log_in']['notvalid'])){
						$username = $_SESSION['username'];
					}					
				?>
			</div>
		<?php endif; ?>		<!-- cierra el chequeo de errores -->
		
          
			<form class="form_login" action="controllers/log_in.controller.php" method="post" enctype="multipart/form-data">
			  	<div class="container_form">
				    <label for="nameuser">Usuario</label><br>
				    <input type="text" placeholder="Nombre de usuario" name="username" required id="username" value="<?php echo $username; ?>"><br>

				    <label for="userpassword">Contraseña</label><br>
				    <input type="password" placeholder="Contraseña" name="password" required id="userpassword">
				    <br><br>

			    	<button class="buttonLogin" type="submit">Login</button><br>
			  		<span class="rememberMe">
			  			<input type="checkbox" name="rememberMe" id="rememberMe"> Recuérdame
			 		</span><br>
			 	</div>
			</form>
		
				<div class="container_form2">
				    <span class="psw"><a href="forget_password.php">¿Olvide mi contraseña?</a></span>
			    </div>
			
          
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

<?php
	unset($_SESSION['errors_log_in']);
?>