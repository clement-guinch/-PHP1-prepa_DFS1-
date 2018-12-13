<?php
function getAllProducts(){
  $connec = new PDO("mysql:dbname=amazon", 'root', '0000');
  $connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $request = $connec->prepare("SELECT name, price FROM products;");
  $request->execute();
  return $request->fetchAll(PDO::FETCH_ASSOC);
}
function getOneUser($mail, $password) {
  $connec = new PDO('mysql:dbname=amazon', 'root', '0000');
  $connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $request = $connec->prepare("SELECT id, name FROM users WHERE mail = :mail AND password = :password;");
  $request->execute([
    ":mail" => $mail,
    ":password" => $password,
  ]);
  return $request->fetch(PDO::FETCH_ASSOC);
}

function productsPanier() {
  $connec = new PDO("mysql:dbname=amazon", 'root', '0000');
  $connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $request = $connec->prepare("SELECT products.name, price FROM products INNER JOIN users ON products.user_id = users.id;");
  $request->execute();
  return $request->fetchAll(PDO::FETCH_ASSOC);
}
function insertUser($name, $mail, $password){
  $connec = new PDO("mysql:dbname=amazon", 'root', '0000');
  $connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $request = $connec->prepare("INSERT INTO users(name, mail,) VALUES (:name, :mail, :password);");

  $request->execute([
    ":name" => $name,
    ":mail" => $mail,
    ":password" => $password,
  ]);
}
