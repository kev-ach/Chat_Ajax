<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Chat en AJAX !</title>
  <link rel="stylesheet" href="css/app.css">
  <link rel="stylesheet" href="css/footer.css">
</head>
<body>
  <header>
    <h1>Chat en AJAX</h1>
    <h3>Utilisation de PHP, MySQL, Javascript, Requete Ajax, HTML, CSS</h3>
  </header>

  <section class="chat">
    <div id="sidebar" class="box">
      <div id="chat">
        <h3>Chat en direct</h3>

        <div class="messages">

        </div>

        <div class="user-inputs">
          <form action="handler.php?task=write" method="POST">
            <input type="text" id="author" name="author" placeholder="Pseudo">
            <input type="text" id="content" name="content" placeholder="Ecrire un message ...">
            <button type="submit">🔥 Envoyer !</button>
          </form>
        </div>
      </div>
    </div>
  </section>
  <script src="js/app.js"></script>
</body>
<?php include("footer.html"); ?>
</html>
