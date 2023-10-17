<?php

//isset($_POST['submit'])
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $uid = htmlspecialchars($_POST['uid'], ENT_QUOTES, 'UTF-8');
    $pwd = htmlspecialchars($_POST['pwd'], ENT_QUOTES, 'UTF-8');

    require_once "../classes/dbh.classes.php";
    require_once "../classes/login.classes.php";
    require_once "../classes/login-contr.classes.php";

    $login = new LoginContr($uid, $pwd);

    $login->loginUser();

    header('location: ../index.php?error=none');
}