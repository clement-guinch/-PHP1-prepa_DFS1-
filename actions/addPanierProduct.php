<?php

session_start();

require_once('../db.php');
$user = getOneUser($_SESSION['email'], $_SESSION['password']);
header('Location: /panier.php');die;
