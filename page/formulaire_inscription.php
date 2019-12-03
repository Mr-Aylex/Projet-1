<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Inscription</title>
  </head>
  <body>
    <form class="" action="..\traitement\traitement_inscription.php" method="post">
      <div class="">
        <label for="">nom</label>
        <input type="text" name="nom" >
      </div>
      <div class="">
        <label for="">prenom</label>
        <input type="text" name="prenom" value="">
      </div>
      <div class="">
        <label for="">age</label>
        <input type="number" name="age" value="">
      </div>
      <div class="">
        <label for="">mail</label>
        <input type="text" name="mail" value="">
      </div>
      <div class="">
        <label for="">adresse</label>
        <input type="text" name="adresse" value="">
      </div>
      <div class="">
        <label for="">classe</label>
        <select class="" name="classe">
          <option value="STI2D">bac STI2D</option>
          <option value="TU">bac pro TU</option>
          <option value="MEI">bac pro MEI</option>
          <option value="SN">bac pro SN</option>
          <option value="CPRP">BTS CPRP</option>
          <option value="SLAM">BTS SIO option SLAM</option>
          <option value="SISR">BTS SIO option SISR</option>
        </select>
      </div>
      <div class="">
        <label for="">mot de passe</label>
        <input type="password" name="mdp" value="">
      </div>
      <div class="">
        <label for="">statut</label>
        <select class="" name="statut">
          <option value="parent">Parent</option>
          <option value="eleve">Eleve</option>
        </select>
      </div>
      <div class="">
        <input type="submit" name="" value="S'inscrire">
      </div>
    </form>
  </body>
</html>
