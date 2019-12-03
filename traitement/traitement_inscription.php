<?php
if (empty($_POST['nom']) or empty($_POST['prenom']) or empty($_POST['age'])
or empty($_POST['adresse']) or empty($_POST['mail']) or empty($_POST['statut'])
or empty($_POST['classe']) or empty($_POST['mdp'])){
      header('Location: ..\page\formulaire_inscription.php');
  }
else {
  $nom=$_POST['nom'];
  $prenom=$_POST['prenom'];
  $age=$_POST['age'];
  $adresse=$_POST['adresse'];
  $mail=$_POST['mail'];
  $statut=$_POST['statut'];
  $classe=$_POST['classe'];
  $mdp=md5($_POST['mdp']);
  try
  {
    $bdd = new PDO('mysql:host=localhost;dbname=projet_site_lycee;charset=utf8','root','');
  }
  catch(Exception $e)
  {
    die('Erreur:'.$e->getMessage());
  }

  $req = $bdd->prepare('INSERT INTO profil(nom, prenom, age, mail, adresse, statut, classe, mot_de_passe) VALUES(:nom, :prenom, :age, :mail, :adresse, :statut, :classe , :mdp)');
  $req->execute(array(
    'nom'=>$nom,
    'prenom'=>$prenom,
    'age'=>$age,
    'mail'=>$mail,
    'adresse'=>$adresse,
    'statut'=>$statut,
    'classe'=>$classe,
    'mdp'=>$mdp));
  header('Location: ..\page\formulaire_connexion.php');
}
 ?>
