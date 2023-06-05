<!DOCTYPE html>
<html>
<head>
  <title>MMitinéraire</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
// Appel du bloc Header et du Menu>
require ('header.php');
?>

  <main>
    <!-- Contenu principal -->
    <center>
  <h1>Vous cherchez un co-voiturage ? </h1>
  <h1> Nous avons ce qu'il vous faut !</h1>
  <br>
  <div id="gridimage">
  <img class="imagegrid" src="images/imagegal1.jpg" alt="monimage">
  <img class="imagegrid" src="images/imagegal2.jpg" alt="monimage">
  <img class="imagegrid" src="images/imagegal4.jpg" alt="monimage">
  <img class="imagegrid" src="images/imagegal5.jpg" alt="monimage">
</div>

<br>
<br>
<h2>MMitinéraire , l'application de co-voiturage pour les MMI par les MMI.</h2s>
<br>
<br>  
<a><button class="big-button">Recherchez un trajet</button></a>
</center>
  </main>
  <?php
// Appel du Pied de Page
require ('footer.php');
?>

</body>
</html>
