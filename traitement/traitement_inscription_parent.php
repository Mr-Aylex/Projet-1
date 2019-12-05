<?php
if (empty($_POST['nom']) or empty($_POST['prenom']) or empty($_POST['adresse']) or empty($_POST['mail']) or empty($_POST['mdp']) or empty($_POST['profession']) or empty($_POST['numero'])){
      header('Location: ..\page\formulaire_inscription_parent.php');
  }
else {
  $nom=$_POST['nom'];
  $prenom=$_POST['prenom'];
  $adresse=$_POST['adresse'];
  $mail=$_POST['mail'];
  $numero=$_POST['numero'];
  $profession=$_POST['profession'];
  $mdp=md5($_POST['mdp']);
  try
  {
    $bdd = new PDO('mysql:host=localhost;dbname=projet_site_lycee;charset=utf8','root','');
  }
  catch(Exception $e)
  {
    die('Erreur:'.$e->getMessage());
  }
  $req = $bdd->query('SELECT nom, prenom, mail, numero FROM profil_parent');
  $donne=$req->fetchall();

  foreach ($donne as $key => $value) {
    if ($value['nom']==$prenom and $value['prenom']==$prenom) {
      header('Location: ..\page\formulaire_inscription_parent.php');
    }
    elseif ($value['mail']==$mail) {
      header('Location: ..\page\formulaire_inscription_parent.php');
    }
    elseif ($value['numero']==$numero) {
      header('Location: ..\page\formulaire_inscription_parent.php');
    }
    else {
      var_dump($donne['nom']);
      $req = $bdd->prepare('INSERT INTO profil(nom, prenom, mail, profession, adresse, mot_de_passe) VALUES(:nom, :prenom, :mail, :profession ,:adresse, :mdp)');
      $req->execute(array(
        'nom'=>$nom,
        'prenom'=>$prenom,
        'mail'=>$mail,
        'adresse'=>$adresse,
        'mdp'=>$mdp,
        'profession'=>$profession));
        header('Location: ..\page\formulaire_connexion.php');
    }
  }
}
 ?>
