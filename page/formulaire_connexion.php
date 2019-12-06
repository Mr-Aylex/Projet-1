<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

        <link rel="stylesheet" href="../CSS/formulaire.css">
    <title></title>
<style>

.fond{
  margin:0;
  padding:0;
  font-family: sans-serif;
  background-image:url(dev3.jpg);
  height: 750px;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center center;
}
label:hover{
  color:#0c2461;
  transition: 0.50s;
}


h1:hover{
  color:#0c2461;
  transition: 0.50s;
}
.box{

  position:absolute;
  top:50%;
  left:50%;
  transform:translate(-50%,-50%);
  width:400px;
  padding:20px;
  padding:20px 30px;
  background-color:rgba(0,0,0,.8);
  box-sizing:border-box;
  box-shadow: 0 15px 25px rgba(0,0,0,.5);
  border-radius: 10px;


}

h1{
  margin:0 0 30px;
  padding:0;
  color:#fff;
  text-align:center;
}
.box .inputbox{
  position: relative;
}

.box .inputbox input{
  width:100%;
  padding:20px 0;
  font-size:12px ;
  color:white;
  letter-spacing: 1px ;
  margin-bottom: 30px;
  outline:none;
  background:transparent;
  border: 0;
  outline: 0;
  border-bottom: 1px solid white;
  font-size: 1.4rem;
  color: #ccc;
}



.box .inputbox label {
  position:absolute;
  top:0;
  left:0;
  font-size: 12px;
  color:#fff;
  pointer-events:none;
  transition:.5s;
}

label{
  top:5px
  left:0;
  color:white;
  font-size: 18px;
}

.box input[type="submit"] {
  background: transparent;
  border :none;
  outline:none;
  color:#fff;
  background:#0c2461;
  padding:10px 20px;
  cursor:pointer;
  boder-radius:5px ;
}

</style>
  </head>
  <body class="fond">
    <?php include "navbar.php" ?>

    <form class="box" action="..\traitement\traitement_connexion.php" method="post">
      <h1 style="color:white;">Connexion</h1>
      <label  style="color:white; " class="label" >Entrez votre adresse mail : </label>
      <div class="inputbox">

        <input  type="Mail" name="mail" placeholder="Mail" required=""/>

      </div>

      <label  style="color:white;" class="label">Entrez votre mot de passe :</label>
      <div class="inputbox" >

        <input type="password" name="mot_de_passe" placeholder="Mot de passe" required=""/>

      </div>

      <div>
        <input type="submit" value="Connexion"/>
      </div>


      <div>
        <a style="color:white;" href="mot_de_passe_oublie.php">Mot de passe oublié?</a>

        <a  style="color:white;" href="formulaire_inscription_eleve.php">Inscription</a>
      </div>
    </form>

  </body>
</html>
