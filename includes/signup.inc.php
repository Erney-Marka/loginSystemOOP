<?php

//isset($_POST['submit'])
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // htmlspecialchars($_POST[''], ENT_QUOTES, 'UTF-8');
    // собрать данные
    $uid = htmlspecialchars($_POST['uid'], ENT_QUOTES, 'UTF-8');
    $pwd = htmlspecialchars($_POST['pwd'], ENT_QUOTES, 'UTF-8');
    $pwdRepeate = htmlspecialchars($_POST['pwdRepeate'], ENT_QUOTES, 'UTF-8');
    $email = htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8');

    require_once "../classes/dbh.classes.php";
    require_once "../classes/signup.classes.php";
    require_once "../classes/signup-contr.classes.php";

    // создать экземпляр класса контроллера регистрации
    $signup = new SignupContr($uid, $pwd, $pwdRepeate, $email);

    // запуск обработчика ошибок и регистрация
    $signup->signupUser();

    $userId = $signup->fetchUserId($uid);

    // создать экземпляр профиля
    require_once "../classes/profileinfo.classes.php";
    require_once "../classes/profileinfo-contr.classes.php";

    $profileInfo = new ProfileInfoContr($userId, $uid);
    $profileInfo->defaultProfileInfo();

    // вернуть на главную
    header('location: ../index.php?error=none');
}