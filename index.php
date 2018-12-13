<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <title></title>
  </head>
  <body>
    <header>
      <div class="divLogo">
        <img class="logo" src="./img/amazon-logo.png">
      </div>
      <div class="container">
        <form action="/home.php" method="post">
          <input required name="mail" type="text" placeholder="Adresse e-mail">
          <input required name="password" type="text" placeholder="Mot de passe">
          <input value="Connexion" type="submit">
        </form>
      </div>
    </header>
    <main>
      <div class="second-container">
        <form class="inscription" action="./actions/insertUserAction.php" method="post">
          <h1>Inscription</h1>
          <div>
            <div>
              <input required class="semi" name="name" type="text" placeholder="Pseudo">
            </div>
            <div class="input-full-width">
              <input required class="full" name="mail" type="text" placeholder="e-mail">
              <input required class="full" name="password" type="text" placeholder="mot de passe">
            </div>
              <input class="submit" type="submit" value="Inscription">
          </div>
        </form>
      </div>
    </main>
  </body>
</html>
