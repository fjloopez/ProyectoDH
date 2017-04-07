<!DOCTYPE html>
<html lang="en">
<head>
  <title>Prueba</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/styles.css">
</head>

<body>

<div class="container-fluid"> <!-- Abre el container-fluid -->
  <div class="row content">
    <div class="col-lg-6 col-xs-12 sidenav">  <!--Abre div de Menú -->
      <?php include("menu.php"); ?> 
    </div> <!-- Cierra div de Menú -->

    <div class="col-lg-6 col-xs-12"> <!-- Abre div al costado del menu -->
        <img class="img-responsive mainCharacter" src="..\img\Personaje.png" alt="Main character">
    </div> <!-- Cierra div al costado del menu -->
  </div>
</div> <!-- Cierra el container-fluid -->
<footer class="container-fluid">
  <p>Footer Text</p>
</footer>


</body>
</html>
