<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

        <link rel="stylesheet" href="..\formulaire.css">
    <title></title>

  </head>
  <body>


    <form class="box" action="page_principale.php" method="post">
      <h1>Connexion</h1>

      <div >
        <input  type="Mail" name="mail" placeholder="Mail"/>
      </div>


      <div >
        <input type="password" name="mot_de_passe" placeholder="Mot de passe"/>
      </div>

      <div>
        <input type="submit" value="Connexion"/>
      </div>


      <div>
        <a href="mot_de_passe_oublie.php">Mot de passe oublié</a>
      </div>
    </form>

  </body>
</html>
