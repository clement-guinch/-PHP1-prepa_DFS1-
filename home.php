<?php
session_start();
require_once('./db.php');
include('./templates/header.html');
if (isset($_POST['email']) && isset($_POST['password'])){
  $_SESSION['email']=$_POST['email'];
  $_SESSION['password']=$_POST['password'];
}
$products = getAllProducts();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Liste de produits</h1>
    <ul>
      <?php foreach ($products as $key => $value) {
        echo
        "<li>"
          . $value["name"] . " - "  . $value["price"] . " " . "euros
        </li>";
      ?>
      <form class='formPublication' action='./actions/addPanierProduct.php' method='post'>
      <button type='submit' name='button'>Add</button>
      <?php } ?>
      </li>
    </ul>
  </body>
</html>
