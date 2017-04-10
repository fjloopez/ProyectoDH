<!DOCTYPE html>
<html>
  <head>
    <title>Prueba</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/styles.css">
  </head>

  <body>
    
    <div class='container'> <!-- abre container principal-->
      
      <div class="container_logo">
          <img class="img_logo" src="..\img\vikings-sign2.jpg" alt="Logo del juego">
      </div>
      
      <div class="container_menu"><!-- abre container imagen -->
          <?php include 'menu.php'; ?>
      </div><!-- cierra container menu -->
      
      <div class="container_img_main"> <!-- abre container imagen -->
          <article>
            <section>
              <img class="img_character" src="..\img\Personajes.png" alt="Main character">
            </section>
          </article>
      </div><!-- cierra container imagen -->
      
      <div class="slider">
          <img class="img_slider1" src="..\img\howdy.jpg">
      </div>

      
      
        
    <div class="container_footer">
            <?php include "footer.php" ?>
    </div>
    
    </div> <!-- cierra container principal-->
    

    

  
  </body>
</html>
