<?php include 'head.php' ?>
<?php
	$nameValue = '';
	$surnameValue = '';
	$usernameValue = '';
	$emailValue = '';
	$birth_date ='';
	$gender = '';
?>
<body>
	<div class='container'> <!-- abre container principal-->

		<div class="container_logo">
			<a href="main.php"><img class="img_logo" src="..\img\LogoVA.png" alt="Logo del juego"></a>
		</div>

		<div class="container_menu"><!-- abre container imagen -->
			<?php include 'menu.php'; ?>
		</div><!-- cierra container menu -->

		<?php if (isset($_SESSION['errors_register'])): ?>	<!-- abre el chequeo de errores -->
			<div class="alert">
				<ul>
				<?php foreach((array)$_SESSION['errors_register'] as $error): ?>
						<!-- sin el "array" tiraba error de argumento invalido en el foreach -->
					<li><?php echo $error; ?></li>
				<?php endforeach; ?>
				<?php
					$nameValue = $_SESSION['name'];
					$surnameValue = $_SESSION['surname'];
					$usernameValue = $_SESSION['username'];
					$emailValue = $_SESSION['email'];
					$birth_date = $_SESSION['birth_date'];
					$gender = $_SESSION['gender'];
				?>
				</ul>
			</div>
		<?php endif; ?>		<!-- cierra el chequeo de errores -->


		<div class="container_register"> <!-- abre container register -->

            <h1 class="profile">Perfil</h1>

			<form action="controllers/register.controller.php" method="post">

                <label for="username"> Nombre de Usuario </label>
                <br>
                <input type="text" name="username" placeholder="Usuario" value="<?php echo $usernameValue; ?>" required id="username">
				<br>
				<label for="password"> Creá tu Contraseña </label>
				<br>
				<input type="password" name="password" placeholder="Contraseña" required id="password">
				<br>

				<label for="checkpassword"> Confirmá Contraseña </label>
				<br>

				<input type="password" name="checkpassword" placeholder="Confirmar Contraseña" required id="checkpassword">
				<br>

                <div class="containerAvatar">
                    <label for="avatar">Avatar</label>
                    <input type="file" name="avatar">
                </div>

                <button class="buttonRegistro" align="center" type="submit">Guardar</button>
				<button class="buttonRegistro" type="reset">Borrar</button>

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

<?php
	unset($_SESSION['errors_register']);
?>
