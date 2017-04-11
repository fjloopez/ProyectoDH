<!DOCTYPE html>
<html>
<head>
	<title>FAQ</title>
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


		<div class="container_faq"> <!-- abre container faq -->
          
			<a href="#container_answer_one">
				<h3 class="question_one">¿Qué es Viking Adventures?</h3>
			</a>

			<div class="container_answer_one" id="container_answer_one"> <!-- Abre Respuesta uno -->
	          	<p class="answer_one">
	          		Viking Adventures es un juego al estilo novela gráfica, donde uno puede elegir su propio
	          		camino y crear su historia dependiendo de las desiciones que tome.
	          	</p>
	        </div> <!-- Cierra Respuesta uno -->


			<a href="#container_answer_two">
				<h3 class="question_two">¿Cómo hago para elegir mi propio camino?</h3>
			</a>

			<div class="container_answer_two" id="container_answer_two"> <!-- Abre Respuesta dos -->
	          	<p class="answer_two">
	          		A lo largo del viaje, al personaje principal se le van dando distintas opciones sobre las situaciones
	          		en las cuales se va encontrando. Éstas se pueden elegir con los botones que aparecen al fondo de la 
	          		pantalla, al estilo "multiple choice".
	          	</p>
	        </div> <!-- Cierra Respuesta dos -->

			<a href="#container_answer_three">
				<h3 class="question_three">¿Los personajes son los que se ven en el inicio?</h3>
			</a>

			<div class="container_answer_three" id="container_answer_three"> <!-- Abre Respuesta tres -->
	          	<p class="answer_three">
	          		Si, uno puede elegir entre el personaje masculino y el femenino. Aunque los dos comiencen en el mismo
	          		lugar, el hecho de ser varón o mujer abre distintas posibilidades a lo largo del viaje.
	          	</p>
	        </div> <!-- Cierra Respuesta tres -->

			<a href="#container_answer_four">
				<h3 class="question_four">¿Hay más de un final?</h3>
			</a>

	         <div class="container_answer_four" id="container_answer_four"> <!-- Abre Respuesta cuatro -->
	          	<p class="answer_four">
	          		Si, la idea es que las desiciones que uno toma puedan llevar a finales completamente distintos. Todavía no
	          		establecimos una cantidad fija de finales, ya que vamos a ir implementando cada vez más.
	          	</p>
	        </div> <!-- Cierra Respuesta cuatro -->

	        <a href="#container_answer_five">
				<h3 class="question_four">¿Necesito bajarme algún archivo para jugar?</h3>
			</a>

	         <div class="container_answer_five" id="container_answer_five"> <!-- Abre Respuesta cinco -->
	          	<p class="answer_four">
	          		No, el juego es 100% online. No hace falta bajar ningún archivo ya que se juega desde el navegador.
	          	</p>
	        </div> <!-- Cierra Respuesta cinco -->
          
      </div><!-- cierra container faq -->



		<div class="container_img_faq"> <!-- abre container imagen -->
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