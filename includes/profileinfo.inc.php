<?php

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $id = $_SESSION['userid'];
    $uid = $_SESSION['useruid'];

    $about = htmlspecialchars($_POST['about'], ENT_QUOTES, 'UTF-8');
    $introTitle = htmlspecialchars($_POST['title'], ENT_QUOTES, 'UTF-8');
    $introText = htmlspecialchars($_POST['introtext'], ENT_QUOTES, 'UTF-8');

    require_once "../classes/dbh.classes.php";
    require_once "../classes/profileinfo.classes.php";
    require_once "../classes/profileinfo-contr.classes.php";

    $profileInfo = new ProfileInfoContr($id, $uid);
    
    $profileInfo->updateProfileInfo($about, $introTitle, $introText);

    header('location: ../profile.php?error=none');
}