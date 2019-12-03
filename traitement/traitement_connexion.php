<?php

try {
  $bdd = new PDO('mysql:host=localhost;dbname=profil;charset=utf8','root','');

}
catch(Exception $e)
{
  die('ERREUR:'.$e->getMessage());
}


$mail = $_POST["mail"];
$mot_de_passe = md5($_POST["mot_de_passe"]);

$req = $bdd->preprare('SELECT *FROM  profil WHERE mail=:mail and mot_de_passe=:mot_de_passe');
$req->execute(array('mail'=>$mail,'mot_de_passe'=>$mot_de_passe));
$connexion = $req->fetch();

if($connexion == true){
  header("Location:page_principale.php");
}

else{
  header("Location:formulaire_connexion.php");
}

?>
