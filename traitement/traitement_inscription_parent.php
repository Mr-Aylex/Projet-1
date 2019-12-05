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
  var_dump($donne);
  if (isset($donne)) {
    foreach ($donne as $key => $value) {
      echo "boucle";
      if ($value['nom']==$prenom and $value['prenom']==$prenom) {
        var_dump($donne);
        header('Location: ..\page\formulaire_inscription_parent.php');
      }
      elseif ($value['mail']==$mail) {
        var_dump($donne);
        header('Location: ..\page\formulaire_inscription_parent.php');
      }
      elseif ($value['numero']==$numero) {
        var_dump($donne);
        header('Location: ..\page\formulaire_inscription_parent.php');
      }
      else {
        var_dump($donne);
        $req = $bdd->prepare('INSERT INTO profil_parent(nom, prenom, mail, numero, profession, adresse, mot_de_passe) VALUES(:nom, :prenom, :mail, :profession, :numero, :adresse, :mdp)');
        $req->execute(array(
          'nom'=>$nom,
          'prenom'=>$prenom,
          'mail'=>$mail,
          'numero'=>$numero,
          'adresse'=>$adresse,
          'mdp'=>$mdp,
          'profession'=>$profession));
          header('Location: ..\page\formulaire_connexion.php');
        }
      }
  }
  else {
    $req = $bdd->prepare('INSERT INTO profil_parent(nom, prenom, mail, numero, profession, adresse, mot_de_passe) VALUES(:nom, :prenom, :mail, :profession, :numero, :adresse, :mdp)');
    $req->execute(array(
      'nom'=>$nom,
      'prenom'=>$prenom,
      'mail'=>$mail,
      'numero'=>$numero,
      'adresse'=>$adresse,
      'mdp'=>$mdp,
      'profession'=>$profession));
      header('Location: ..\page\formulaire_connexion.php');
  }
}
 ?>
