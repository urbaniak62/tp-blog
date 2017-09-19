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
<<<<<<< HEAD:index.php
      <h1>MON PREMIER BLOG</h1>
=======
      <div class="container">
        <h1>MINI-CHAT</h1>

      <form class="" action="minChat_post.php" method="post">
        <label for="pseudo">pseudo</label>
        <input type="text" name="pseudo" value="">
        <label for="message">message</label>
        <textarea name="message" rows="30" cols="50">

        </textarea>
        <input type="submit" name="envoyer" value="envoyer">
      </form>
>>>>>>> 47d32bae98d7f42bb5db23fda7bb6ab53351b3f8:miniChat.php
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
<<<<<<< HEAD:index.php


        <br>
        <hr>
        <div class="container">
          <p><?php echo $blog['titre'] ." le : " .  $blog['date_creation']; ?></p>
          <p><em><?php echo $blog['contenu']; ?></em></p>
          <a href="commentaire.php?billet=<?php echo $donnees['id']; ?>">Commentaires</a>
        </div>
=======
          <fieldset>
            <hr>
            <p>pseudo : <?php echo $req['pseudo']; ?></p>
            <p>Message : <?php echo $req['message']; ?></p>
            <hr>
          </fieldset>



      </div>
>>>>>>> 47d32bae98d7f42bb5db23fda7bb6ab53351b3f8:miniChat.php


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
