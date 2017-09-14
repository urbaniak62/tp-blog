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
      <header>
        <h1>MINI-CHAT</h1>
      </header>
      <form class="" action="minChat_post.php" method="post">
        <label for="pseudo">pseudo</label>
        <input type="text" name="pseudo" value="">
        <label for="message">message</label>
        <textarea name="message" rows="30" cols="50">

        </textarea>
        <input type="submit" name="envoyer" value="envoyer">
      </form>
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

      $minichat= $bdd ->query('SELECT * FROM miniChat ORDER BY id DESC LIMIT 0,20 ');
        while ($req = $minichat->fetch()) {
        ?>
        <div class="box">
          <p>pseudo : <?php echo $req['pseudo']; ?></p>
          <p>Message : <?php echo $req['message']; ?></p><hr>

        </div>



      <?php
        }
      $minichat->closeCursor();
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
