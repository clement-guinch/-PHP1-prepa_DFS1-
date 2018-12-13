<?php

require_once('../db.php');
insertUser($_POST['name'], $_POST['mail'], $_POST['password']);
header('Location: /home.php');die;
