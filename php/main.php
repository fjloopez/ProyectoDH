<?php include 'head.php' ?>
<?php 
      if (!isset($_SESSION['logUser'])){
        $play_button = 'log_in.php';
      } else{
        $play_button = '#';
        // $play_button = 'game.php';
      }
    ?>

  <body>
    
    <div class='container'> <!-- abre container principal-->
      
      <div class="container_logo"> <!-- abre container del logo -->
          <a href="main.php"><img class="img_logo" src="..\img\LogoVA.png" alt="Logo del juego"></a> 
      </div> <!-- cierra container del logo -->
      
      <div class="container_menu"> <!-- abre container menu -->
          <?php include 'menu.php'; ?>
      </div><!-- cierra container menu -->
      
      <div class="container_play"> <!-- abre container play -->

        <div class="container_img_main"> <!-- abre container imagen -->
          <img class="img_character" src="..\img\Personajes.png" alt="Main character">

          <div class="container_play_button"> <!-- abre container del boton jugar -->
            <button type="button" class="play_button" > <a href="<?php echo $play_button ?>" class="play_button_link">Play!</a></button>  
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
