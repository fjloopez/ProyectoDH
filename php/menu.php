<header>

	<?php if (!isset($_SESSION['logUser'])): ?>
		<nav class="nav_menu">
			<!-- mm = menu mobile -->
			<div class="container_mm">
				<a href="main.php"><img class="img_logo_mm" src="..\img\logoV.png" alt="Logo del juego"></a>
			</div>
			<!-- mh = menu hamburguesa -->


			<div class="container_desplegable">
				<div class="container_mh">
					<a href="#container_menu_list">
						<div class="top_mh"></div>
						<div class="mid_mh"></div>
						<div class="bot_mh"></div>
					</a>
				</div>

				<div class="container_menu_list" id="container_menu_list">
					<ul class="list_menu">
						<li><a href="main.php"><h4>Inicio</h4></a></li>
						<li><a href="log_in.php"><h4>Ingresa</h4></a></li>
						<li><a href="register.php"><h4>Registrate</h4></a></li>
						<li><a href="faq.php"><h4>FAQs</h4></a></li>
					</ul>
				</div>
			</div>
		</nav>
	<?php else: ?>

		<!-- asigna a user_image el path al avatar del usuario en caso de estar seteado si no setea el default -->
		<?php
			if (!isset($_SESSION['user_img'])){
				$user_img = '../img/avatars/defaultAvatar.png';
			} else{
				$user_img = $_SESSION['user_img'];
			}
		?>
		<!-- ml = menu logueado -->
		<nav class="nav_menu">
			<!-- mm = menu mobile -->
			<div class="container_mm">
				<a href="main.php"><img class="img_logo_mm" src="..\img\logoV.png" alt="Logo del juego"></a>
			</div>

			<!-- marca del usuario -->
			<div class="container_user">
				<a href="#"><img class="user_img" src="<?php echo $user_img; ?>" alt="Avatar del usuario"></a> <!-- profile.php -->
					<div class="showUsername">
						<label><h4 class="usernameText"> <?php
							$showUsername = ($_SESSION['username']);
							if (isset ($_SESSION['username'] )){
								echo "$showUsername";
							} else {
								echo "hola";
							}
						?></h4></label>
					</div>
			</div>

			<!-- mh = menu hamburguesa -->
			<div class="container_desplegable">
				<div class="container_mh">
					<a href="#container_menu_list">
						<div class="top_mh"></div>
						<div class="mid_mh"></div>
						<div class="bot_mh"></div>
					</a>
				</div>

				<div class="container_menu_list" id="container_menu_list">
					<ul class="list_menu">
						<li><a href="main.php"><h4>Inicio</h4></a></li>
						<li><a href="profile.php"><h4>Perfil</h4></a></li> <!-- href='profile.php' -->
						<li><a href="faq.php"><h4>FAQs</h4></a></li>
						<li><a href="log_out.php"><h4>Cerrar Sesión</h4></a></li>
					</ul>
				</div>
			</div>
		</nav>

	<?php endif; ?>

</header>
