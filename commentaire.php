


<?php
try
{
$bdd = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root', 'chniak24dec78-',
 array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch (Exception $e)
{
      die('Erreur : ' . $e->getMessage());
}
$req=$bdd->prepare('SELECT * FROM billet WHERE id=?');
$req->execute(array($_GET['toto']));
$donnees=$req->fetch(){
  ?>
  
}

<?php
 header('Location: index.php');
 ?>
