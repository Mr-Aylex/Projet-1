<?php
session_start();
if (empty($_POST['nom']) or empty($_POST['prenom']) or empty($_POST['age']) or empty($_POST['classe'])) {
      header('Location: ..\page\formulaire_inscription_parent.php');
  }
else {
  $nom=$_POST['nom'];
  $prenom=$_POST['prenom'];
  $age=$_POST['age'];
  $classe=$_POST['classe'];
}
 ?>
