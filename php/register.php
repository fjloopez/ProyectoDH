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
	
		<button class="themeButton">theme</button>

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
			<form id="formJS" action="controllers/register.controller.php" method="post" class="register" enctype="multipart/form-data">
				<label for="nombreyapellido">Nombre y Apellido</label>
				<br>
				<input type="text" name="name" placeholder= "Nombre" value="<?php echo $nameValue; ?>" required id="nombreyapellido">
				<span class="errName"></span>

				<input type="text" name="surname" placeholder="Apellido" value="<?php echo $surnameValue; ?>" required>
				<br>
				<span class="errSurn"></span>

				<label for="username"> Nombre de Usuario </label>
				<br>
				<input type="text" name="username" placeholder="Usuario" value="<?php echo $usernameValue; ?>" required id="username">
				<br>
				<span class="errUser"></span>

				<label for="mail">Correo Electrónico </label>
				<br>
				<input type="email" name="email" placeholder="Correo Electrónico" value="<?php echo $emailValue; ?>" required id="mail">
				<br>
				<span class="errEmail"></span>

				<label for="password"> Creá tu Contraseña </label>
				<br>
				<input type="password" name="password" placeholder="Contraseña" required id="password">
				<br>
				<span class="errPass"></span>

				<label for="checkpassword"> Confirmá Contraseña </label>
				<br>
				<input type="password" name="checkpassword" placeholder="Confirmar Contraseña" required id="checkpassword">
				<br>
				<span class="errCheck"></span>

				<label for="birth_date">Fecha de Nacimiento </label>
				<br>
				<input type="date" name="birth_date" value="<?php echo $birth_date; ?>" required>
				<br>
				<span class="errBirth"></span>

				<label> Género</label>
				<br>

				<label><input type="radio" name="gender" value="male" <?php if ($gender == 'male'){ echo 'checked';} ?> required> Hombre</label><br>
				<label><input type="radio" name="gender" value="female" <?php if ($gender == 'female'){ echo 'checked';} ?> required> Mujer</label><br>
				<label><input type="radio" name="gender" value="other" <?php if ($gender == 'other'){ echo 'checked';} ?> required> Prefiero no decirlo</label><br>
				<span class="errGender"></span>

				<div class="containerAvatar">
					<label for="avatar">Avatar</label>
					<input type="file" name="avatar">
				</div>

				<button id="submit" class="buttonRegistro" align="center" type="submit">Enviar</button>
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

	<script type="text/javascript">

		window.addEventListener("load", doAll);


        function doAll(){

        var form = document.getElementById("formJS");

        var name = form.name;
        var surname = form.surname;
        var username = form.username;
        var email = form.email;
        var pass = form.password;
        var check = form.checkpassword;
        var birth = form.birth_date;
        var gender = form.gender;

        function validate(){
            var errors = {};

            if (name.value === '') {
                errors.errName = "El nombre es obligatorio";
            }

            if (surname.value === '') {
                errors.errSurn = "El pellido es obligatorio";
            }

            if (username.value === '') {
                errors.errUser = "Nombra a tu vikingo!";
            }

            if (email.value === '') {
                errors.errEmail = "El mail es obligatorio";
            }

            if (pass.value === '') {
                errors.errPass = "Olvidó poner su contraseña";
            }

            if (check.value === '') {
                errors.errCheck = "Confirmar contraseña";
            }

            if (birth.value === '') {
               errors.errBirth = "Debe completar su fecha de nacimiento";
            }

            if (gender.value.checked !== true) {
                errors.errGender = "Debe seleccionar un género, aunque prefiera no aclararlo"
            }
            return errors;
        }

        form.addEventListener("submit", function(e){
            e.preventDefault();
            console.log(e);

            var errors = validate();

            if(Object.keys(errors).length 	> 0){
                for (var i = 0; i< errors.lenght; i++) {
                    var span = document.querySelector("." + errors[i].name);
                    span.innerText = errors[i];
                }
            }
        }
    })


//        function isValid(){
//            var xmlhttp = new XMLHttpRequest();
//              xmlhttp.onreadystatechange = function {
//                  if (this.readyState == 4 && this.status == 200) {
//                      document.querySelector("submit").innerHTML = JSON.parse(this.responseText);
//                  }
//
//            };
//        xmlhttp.open("POST", "controllers/register.controller.php", true);
//        xmlhttp.send();
//        }
    }

	</script>

</body>
</html>

<?php
	unset($_SESSION['errors_register']);
?>