<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
      <link rel="stylesheet" href="../CSS/formulaire2.css">
    <title>Inscription</title>
  </head>
  <body class="fond">
    <?php include "navbar.php" ?>
    <form class="box" action="..\traitement\traitement_inscription_parent.php" method="post">
      <div class="g">

        <label class="label" for="">Nom</label>
        <div class="inputbox">
          <input type="text" name="nom" placeholder="Nom"/>
        </div>
        <label class="label" for="">Prenom</label>
        <div class="inputbox">

          <input type="text" name="prenom" placeholder="Prenom"/>
        </div>
        <label class="label"  for="">Mail</label>
      </div>
      <div class="d">
        <div class="inputbox">

          <input type="text" name="mail"  placeholder="Mail"value=""/>
        </div>
        <label class="label" for="">Adresse</label>
        <div class="inputbox">

          <input type="text" name="adresse" placeholder="Adresse">
        </div>
        <label class="label"  for="">Profession</label>
        <div class="inputbox">
          <input type="text" name="profession" placeholder="Profession"/>
        </div>

        <label class="label" for="">Mot de passe</label>
        <div class="inputbox">
          <input type="password" name="mdp" placeholder="Mot de passe"/>
        </div>
      </div>
      <div class="">
        <input type="submit" value="S'inscrire"/>
      </div>
    </form>
  </body>
</html>
