<?php

session_start();

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

        <link rel="stylesheet" href="formulaire.css">
    <title></title>

  </head>
  <body>

    <div class="box">
    <form class="" action="formulaire_connexion.php" method="post">



      <div>
        <label>Adresse Mail</label>
        <input type="Mail" name="mail" placeholder="Mail"/>
      </div>


      <div>
        <label>Mot de passe</label>
        <input type="Mot_de_passe" name="mot_de_passe" placeholder="Mot de passe"/>
      </div>

      <div>
        <input type="submit" value="Connexion"/>
      </div>


      <div>
        <a href="mot_de_passe_oublie.php">Mot de passe oublié</a>
      </div>
    </form>
</div>
  </body>
</html>
