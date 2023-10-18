<?php
require_once "header.php";
?>

<section class="background__picture">
    <div class="section__container">
        <div class="section__wrapper">
            <img src="img/small.jpg" alt="" class="small__image">
            <p class="line paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        </div>
        <div class="section__wrapper">
            <h2 class="title">We make professional gear</h2>
            <button class="btn__section">FIND OUR GEAR HERE</button>
        </div>
    </div>
</section>

<section class="section__form">
    <div class="form__signup line">
        <form action="includes/signup.inc.php" method="post">
            <div class="signup">
                <label class="title_signup">SIGN UP</label>
                <p class="small__signup">Don't hane an account yet? Sign up here!</p>
            </div>
            <div class="signup">
                <input type="text" name="uid" class="input" placeholder="Username" id="username">
            </div>
            <div class="signup">
                <input type="password" name="pwd" class="input" placeholder="Password" id="password">
            </div>
            <div class="signup">
                <input type="password" name="pwdRepeate" class="input" placeholder="Repeate Password" id="passwordRepeate">
            </div>
            <div class="signup">
                <input type="text" name="email" class="input" placeholder="E-mail" id="email">
            </div>
            <div class="signup"><button type="submit" name="submit" class="btn__section">SIGN UP</button></div>
        </form>
    </div>
    <div class="form__login">
        <form action="includes/login.inc.php" method="post">
            <div class="login">
                <label class="title_login">LOGIN</label>
                <p class="small">Don't hane an account yet? Sign up here!</p>
            </div>
            <div class="login">
                <input type="text" name="uid" class="input" placeholder="Username" id="uid">
            </div>
            <div class="login">
                <input type="password" name="pwd" class="input" placeholder="Password" id="pwd">
            </div>
            <div class="login"><button type="submit" name="submit" class="btn__section">LOGIN</button></div>
        </form>
    </div>
</section>

<section>
    <div class="block"></div>
</section>

</body>

</html>