<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/main.css">
    <title>Document</title>
</head>

<body>
    <nav>
        <div class="container">
            <div class="wrapper__right">
                <ul class="navbar">
                    <li><a href="#" class="brand">LOGIN SYSTEM</a></li>
                    <li><a href="#">HOME</a></li>
                    <li><a href="#">PRODUCTS</a></li>
                    <li><a href="#">CURRENT SALES</a></li>
                    <li><a href="#">MEMBER+</a></li>
                </ul>
            </div>
            <div class="wrapper__left">
                <ul class="navbar">
                    <li><a href="#">SIGN UP</a></li>
                    <li><button type="submit" class="btn">LOGIN</button></li>
                </ul>
            </div>
        </div>

        </div>
    </nav>

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
                    <input type="text" name="uid" class="input" id="inputUsername" placeholder="Username">
                </div>
                <div class="signup">
                    <input type="password" name="pwd" class="input" id="inputPassword" placeholder="Password">
                </div>
                <div class="signup">
                    <input type="password" name="pwdRepeate" class="input" id="inputPassword" placeholder="Repeate Password">
                </div>
                <div class="signup">
                    <input type="text" name="email" class="input" id="inputEmail" placeholder="E-mail">
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
                    <input type="text" name="uid" class="input" id="inputUsername" placeholder="Username">
                </div>
                <div class="login">
                    <input type="password" name="pwd" class="input" id="inputPassword" placeholder="Password">
                </div>
                <div class="login"><button type="submit" name="submit" class="btn__section">LOGIN</button></div>
            </form>
        </div>
    </section>

</body>

</html>