<?php
try
{
$bdd = new PDO('mysql:host=localhost;dbname=miniChat;charset=utf8', 'root', 'chniak24dec78-',
 array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch (Exception $e)
{
      die('Erreur : ' . $e->getMessage());
}

if (isset($_POST['pseudo']) && isset($_POST['message'])) {
  $pseudo =$_POST['pseudo'];
  $message=$_POST['message'];
  $req    = $bdd->prepare('INSERT INTO miniChat (pseudo,message)
                           VALUES(:pseudo, :message)');
  $req-> execute(array(
    'pseudo' =>$pseudo,
    'message'=>$message,
  ));
}


 header('Location: miniChat.php');
 ?>
