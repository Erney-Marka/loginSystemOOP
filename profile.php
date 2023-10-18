<?php
require_once "header.php";
require_once "classes/dbh.classes.php";
require_once "classes/profileinfo.classes.php";
require_once "classes/profileinfo-view.classes.php";

$profileInfo = new ProfileInfoView();
?>

<section class="background__picture">
    <div class="profile__container">
        <div class="profile__wrapper">
            <div class="left">
                <div class="profile__img">
                    <h3 class="profile__title white__text">
                        <?php
                        echo $_SESSION['useruid'];
                        ?>
                    </h3>
                    <a href="profilesettings.php" class="profile__btn">PROFILE SETTINGS</a>
                </div>
                <div class="profile__about">
                    <h3 class="white__text">ABOUT</h3>
                    <p class="white__text">
                        <?php
                        $profileInfo->fetchAbout($_SESSION['userid']);
                        ?>
                    </p>
                    <h3 class="white__text"><a href="#">FOLLOWERS</a></h3>
                    <h3 class="white__text"><a href="#">FOLLOWING</a></h3>
                </div>
            </div>
            <div class="right">
                <div class="profile__info">
                    <h3 class="info__title white__text">
                        <?php
                        $profileInfo->fetchTitle($_SESSION['userid']);
                        ?>
                    </h3>
                    <p class="info_paragraph white__text">
                        <?php
                        $profileInfo->fetchText($_SESSION['userid']);
                        ?>
                    </p>
                </div>
                <div class="profile__posts">
                    <h2 class="posts__title">POSTS</h2>
                    <div class="post post__line">
                        <h3 class="post__title">IT IS A BUSY DY IN TOUN</h3>
                        <p class="post__text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facilis doloremque cum aliquid eos, qui et corporis quos sed, quia eum, iste ducimus excepturi cumque animi ad beatae reiciendis dicta voluptate! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cumque assumenda est officia quas sed repudiandae dolorum alias! Veniam facere molestiae error? Dignissimos, incidunt? Incidunt, ullam cupiditate? Ab pariatur incidunt reiciendis?</p>
                        <p class="post__date">16:08 - 12/05/2022</p>
                    </div>
                    <div class="post post__line">
                        <h3 class="post__title">IT IS A BUSY DY IN TOUN</h3>
                        <p class="post__text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facilis doloremque cum aliquid eos, qui et corporis quos sed, quia eum, iste ducimus excepturi cumque animi ad beatae reiciendis dicta voluptate! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cumque assumenda est officia quas sed repudiandae dolorum alias! Veniam facere molestiae error? Dignissimos, incidunt? Incidunt, ullam cupiditate? Ab pariatur incidunt reiciendis?</p>
                        <p class="post__date">16:08 - 12/05/2022</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="block"></div>
</section>

</body>

</html>