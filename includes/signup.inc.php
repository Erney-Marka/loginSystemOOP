<?php

if (isset($_POST['submit'])) {

    // собрать данные
    $uid = $_POST['uid'];
    $pwd = $_POST['pwd'];
    $pwdRepeate = $_POST['pwdRepeate'];
    $email = $_POST['email'];

    require_once "../classes/signup.classes.php";
    require_once "../classes/signup-contr.classes.php";

    // создать экземпляр класса контроллера регистрации
    // $signup = new SignupContr($uid, $pwd, $pwdRepeate, $email);

    // запуск обработчика ошибок и регистрация

    // вернуть на главную
}