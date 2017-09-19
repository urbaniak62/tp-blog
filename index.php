<!DOCTYPE html>
  <html>
    <head>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"/>
      <link type="text/css" rel="stylesheet" href="css/materialize.css"/>
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
      <h1>MON PREMIER BLOG</h1>
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
    $req=$bdd->query('SELECT *  FROM billet ORDER BY id DESC');
    while($blog=$req->fetch()){
        ?>


        <br>
        <hr>
        <div class="container">
          <p><?php echo $blog['titre'] ." le : " .  $blog['date_creation']; ?></p>
          <p><em><?php echo $blog['contenu']; ?></em></p>
          <a href="commentaire.php?billet=<?php echo $donnees['id']; ?>">Commentaires</a>
        </div>


      <?php
        }
      $req->closeCursor();
     ?>
      <footer>

      </footer>
      <!--Import jQuery before materialize.js-->
      <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript" src="js/main.js"></script>
    </body>
  </html>
