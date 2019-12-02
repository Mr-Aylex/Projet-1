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



    </form>

  </body>
</html>
