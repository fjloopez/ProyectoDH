<!DOCTYPE html>
<html>
  <head>
    <title>Viking Adventures</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
      
      <div class="container_play"> <!-- abre container play -->

        <div class="container_img_main"> <!-- abre container imagen -->
          <img class="img_character" src="..\img\Personajes.png" alt="Main character">

          <div class="container_play_button"> <!-- abre container del boton jugar -->
            <button type="button" class="play_button">Play!</button>  
          </div> <!-- cierra container del boton jugar -->

        </div> <!-- cierra container imagen -->
        
      </div><!-- cierra container play -->
      
      <div class="slider">
          <img class="img_slider1" src="..\img\howdy.jpg">
      </div>

      
      
        
    <div class="container_footer">
            <?php include "footer.php" ?>
    </div>
    
    </div> <!-- cierra container principal-->
    

    

  
  </body>
</html>
