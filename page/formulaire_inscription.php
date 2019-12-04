<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
      <link rel="stylesheet" href="../CSS/formulaire2.css">
    <title>Inscription</title>
  </head>
  <body class="fond">
    <?php include "navbar.php" ?>
    <form class="box" action="..\traitement\traitement_inscription.php" method="post">
      <div class="g">

        <label class="label" for="">Nom</label>
        <div class="inputbox">
          <input type="text" name="nom" placeholder="Nom"/>
        </div>
        <label class="label" for="">Prenom</label>
        <div class="inputbox">

          <input type="text" name="prenom" placeholder="Prenom"/>
        </div>
        <label class="label" for="" >Age</label>
        <div class="inputbox">
          <input type="number" name="age" placeholder="Age"/>
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
        <label class="label" for="">Classe</label>
        <div class="select">

          <select class="" name="classe">
            <option value="STI2D">Bac STI2D</option>
            <option value="TU">Bac pro TU</option>
            <option value="MEI">Bac pro MEI</option>
            <option value="SN">Bac pro SN</option>
            <option value="CPRP">BTS CPRP</option>
            <option value="SLAM">BTS SIO option SLAM</option>
            <option value="SISR">BTS SIO option SISR</option>
          </select>
        </div>

        <label class="label" for="">Mot de passe</label>
        <div class="inputbox">
          <input type="password" name="mdp" placeholder="Mot de passe"/>
        </div>


        <div class="select">


          <label for="">Statut</label>
          <div class="inputbox">

            <select class="" name="statut">
              <option value="parent">Parent</option>
              <option value="eleve">Eleve</option>
            </select>
          </div>

        </div>
      </div>
      <div class="">
        <input type="submit" value="S'inscrire"/>
      </div>
    </form>
  </body>
</html>
