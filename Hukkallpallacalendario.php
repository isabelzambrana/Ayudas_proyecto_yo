<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Actividades y Proyectos</title>
  <link rel="Stylesheet"href="Hukkallpallacalendario.css">
</head>
<body id="principal">
  <?php
  require 'db.php';
  require '1 Encabezado.php';
  ?>
    <section><!--Calendario-->
      <div class="Calendario">
      <h1>Calendario</h1>
    </section>

    <center><h1>Proyectos</h1></center><!--Proyectos-->
<section class="proyectos">

   <!--ecocanje-->
   <div class="ecocanje" id="ecocanje">
        <h2>ecocanje</h2>
        <img class="uno" src="ecocanje.png"  >
    </div>  
    
     
  
    <!--Compostar--> 
    <div class="compostar" id="compostar">
        <h2>Compostar</h2>
        <img class="dos"src="compost.jpg"  width="230" height="230" >
    </div>   
      
     


   <!--huertos sanos-->          
   <div class="huertos" id="huertos_sanos">
        <h2>Huertos sanos</h2>
        <img class="tres" src="huerto.jpg"  width="230" height="230" >
   </div>


</section>
</body>
<?php
require '7 pie de pagina.php';
?>
</html>