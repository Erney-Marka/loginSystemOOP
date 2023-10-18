<?php
require_once "header.php";
require_once "classes/dbh.classes.php";
require_once "classes/profileinfo.classes.php";
require_once "classes/profileinfo-view.classes.php";

$profileInfo = new ProfileInfoView();
?>

<section class="background__picture">
    <div class="profilesettings__container">

        <div class="hull__block"></div>

        <form action="includes/profileinfo.inc.php" method="post" class="profilesettings__form">

            <div class="form__settings">
                <label for="" class="white__text title__formsetting">PROFILE SETTINGS</label>
            </div>

            <div class="form__settings">
                <label for="" class="label__settings white__text">Change your about section here!</label>
                <textarea name="about" class="textarea__settings" id="" rows="10" cols="200" placeholder="Profile about section..."><?php $profileInfo->fetchAbout($_SESSION['userid']); ?></textarea>
            </div>

            <div class="form__settings">
                <label for="" class="label__settings white__text">Change your profile page intro here!</label>
                <input type="text" name="title" class="input__settings" placeholder="Profile title..." value="<?php $profileInfo->fetchTitle($_SESSION['userid']);?>">
                <textarea name="introtext" class="textarea__settings" id="" rows="10" cols="200" placeholder="Profile introduction..."><?php $profileInfo->fetchText($_SESSION['userid']); ?></textarea>
            </div>

            <div class="form__settings">
                <button type="submit" name="submit" class="btn__settings white__text">SAVE</button>
            </div>

        </form>

        <div class="hull__block"></div>

    </div>
</section>
<section>
    <div class="block"></div>
</section>
</body>

</html>