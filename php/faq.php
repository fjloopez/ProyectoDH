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
				<h3 class="question_one">Pregunta Uno</h3>
			</a>

			<div class="container_answer_one" id="container_answer_one"> <!-- Abre Respuesta uno -->
	          	<p class="answer_one">
	          		Resp preg 1
	          		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur sequi delectus quo, eos laudantium totam porro iusto a fuga ducimus recusandae dicta. Ea nam, repudiandae corporis quam eos itaque ipsum!
	          	</p>
	        </div> <!-- Cierra Respuesta uno -->


			<a href="#container_answer_two">
				<h3 class="question_two">Pregunta Dos</h3>
			</a>

			<div class="container_answer_two" id="container_answer_two"> <!-- Abre Respuesta dos -->
	          	<p class="answer_two">
	          		Resp preg 2
	          		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur sequi delectus quo, eos laudantium totam porro iusto a fuga ducimus recusandae dicta. Ea nam, repudiandae corporis quam eos itaque ipsum!
	          	</p>
	        </div> <!-- Cierra Respuesta dos -->

			<a href="#container_answer_three">
				<h3 class="question_three">Pregunta Tres</h3>
			</a>

			<div class="container_answer_three" id="container_answer_three"> <!-- Abre Respuesta tres -->
	          	<p class="answer_three">
	          		Resp preg 3
	          		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur sequi delectus quo, eos laudantium totam porro iusto a fuga ducimus recusandae dicta. Ea nam, repudiandae corporis quam eos itaque ipsum!
	          	</p>
	        </div> <!-- Cierra Respuesta tres -->

			<a href="#container_answer_four">
				<h3 class="question_four">Pregunta Cuatro</h3>
			</a>

	         <div class="container_answer_four" id="container_answer_four"> <!-- Abre Respuesta cuatro -->
	          	<p class="answer_four">
	          		Resp preg 4
	          		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur sequi delectus quo, eos laudantium totam porro iusto a fuga ducimus recusandae dicta. Ea nam, repudiandae corporis quam eos itaque ipsum!
	          	</p>
	        </div> <!-- Cierra Respuesta cuatro -->
          
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