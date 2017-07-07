<?php include 'head.php' ?>
<?php 

      if (!isset($_SESSION['logUser'])){
        $play_button = 'log_in.php';
      } else{
        $play_button = '#';
        // $play_button = 'game.php';
      }


      if(!isset($_SESSION["theme"])){
        $themeId = "inside";
      }else{
        $themeId = $_SESSION["theme"];
      }
?>

  <body>
    
    <div class='container'> <!-- abre container principal-->
      <form>
        <button id="<?php echo $themeId; ?>" class="themeButton"><?php echo $themeId; ?></button>
      </form>
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
          <div id="slider">
              <div class="container_slider">
                  <img class="slider_img" src="http://lorempixel.com/900/600/sports" /><!--
                --><img class="slider_img" src="http://lorempixel.com/900/600/city" /><!--
                --><img class="slider_img" src="http://lorempixel.com/900/600/cats" /><!--
                --><img class="slider_img" src="http://lorempixel.com/900/600/food" /><!--
                --><img class="slider_img" src="http://lorempixel.com/900/600/people" />
              </div>
          </div>
          <div class="container_slider_buttons">
              <button type="button" class="left" onclick="plusDivs(-1)">&#10094;</button>
              <button type="button" class="right" onclick="plusDivs(1)">&#10095;</button>
          </div>
      </div>

        
    <div class="container_footer">
            <?php include "footer.php" ?>
    </div>
    
    </div> <!-- cierra container principal-->


    <script>
        var slideIndex = 1;
        showDivs(slideIndex);

        function plusDivs(n) {
            showDivs(slideIndex += n);
        }

        function showDivs(n) {
            var i;
            var x = document.getElementsByClassName("slider_img");
            if (n > x.length) {slideIndex = 1}
            if (n < 1) {slideIndex = x.length}
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            x[slideIndex-1].style.display = "block";
        }
    </script>



    <script type="text/javascript">
      window.onload = function(){
        var estilos = document.querySelector(".estilos");
        var btn = document.querySelector(".themeButton");


        var isClicked = false;
        btn.onclick = function(e){
          e.preventDefault();
          isClicked = !isClicked;
          isClicked == true ? estilos.href="../css/stylesOutside.css" : estilos.href="../css/stylesInside.css";
          if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp = new XMLHttpRequest();
          } else {
                // code for IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
          }
          if (this.id === "inside"){
            this.id = "outside"
          }else{
            this.id = "inside"
          }
          console.log(this.id)
          xmlhttp.onreadystatechange = function() {
              if (this.readyState == 4 && this.status == 200) {
                  document.querySelector(".themeButton").innerHTML = JSON.parse(this.responseText);
              }
          };
          xmlhttp.open("GET","controllers/theme.controller.php?q="+this.id,true);
          xmlhttp.send();
        }
      }

    </script>
  </body>
</html>
