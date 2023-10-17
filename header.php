<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/main.css">
    <title>Document</title>
</head>

<body>
    <header>
        <nav>
            <div class="container">
                <div class="wrapper__right">
                    <ul class="navbar">
                        <li><a href="#" class="brand">LOGIN SYSTEM</a></li>
                        <li><a href="index.php">HOME</a></li>
                        <li><a href="#">PRODUCTS</a></li>
                        <li><a href="#">CURRENT SALES</a></li>
                        <li><a href="#">MEMBER+</a></li>
                    </ul>
                </div>
                <div class="wrapper__left">
                    <ul class="navbar">

                        <?php if (isset($_SESSION['userid'])) : ?>
                            <li><a href="profile.php"><?php echo $_SESSION['useruid']; ?></a></li>
                            <li><a href="includes/logout.inc.php"><button type="submit" class="btn__login">LOGOUT</button></a></li>
                        <?php else : ?>
                            <li><a href="#">SIGN UP</a></li>
                            <li><a href="#"><button type="submit" class="btn__login">LOGIN</button></li>
                        <?php endif; ?>

                    </ul>
                </div>
            </div>
            </div>
        </nav>
    </header>