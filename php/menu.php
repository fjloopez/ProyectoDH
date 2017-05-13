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
						<li><a href="main.php"><h4>Home</h4></a></li>
						<li><a href="log_in.php"><h4>Log In</h4></a></li>
						<li><a href="register.php"><h4>Register</h4></a></li>
						<li><a href="faq.php"><h4>FAQs</h4></a></li>
					</ul>
				</div>
			</div>
		</nav>
	<?php else: ?>
		
		<!-- asigna a user_image el path al avatar del usuario en caso de estar seteado si no setea el default -->
		<?php 
			if (!isset($_SESSION['user_img'])){
				$user_img = 'default/path.png';
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
				<a href="profile.php"><img class="user_img" src="<?php echo $user_img; ?>" alt="Avatar del usuario"></a>
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
						<li><a href="main.php"><h4>Home</h4></a></li>
						<li><a href="profile.php"><h4>Profile</h4></a></li>
						<li><a href="faq.php"><h4>FAQs</h4></a></li>
						<li><a href="log_out.php"><h4>Log Out</h4></a></li>
					</ul>
				</div>
			</div>
		</nav>

	<?php endif; ?>

</header>
