<?php
    include "generalFunctions.php";
    CheckUserLoginState();
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        LifeBet.PL | <?php echo GetWWWIndexWindowTitle(); ?>
    </title>
    <link rel="stylesheet" href="./assets/css/styles_1.0.php" media="screen">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/ef828acaaa.js" crossorigin="anonymous"></script>
</head>
<body>
    <div id="web-container">
        <nav class="px-5 py-4 w-100 text-light w-100">
            <div id="logo">
                <h4 id="logo-main">
                    LIFEBET.PL
                </h4>
                <h6 id="logo-subtext">
                    <?php
                        echo GetWWWIndexWindowTitle();
                    ?>
                </h6>
            </div>
            <div id="nav-social">
                <a href="//fb.com/" id="fb" target="_blank">
                    <i class="fa-brands fa-facebook-f"></i>
                </a>
                <a href="//m.me/" id="mess" target="_blank">
                    <i class="fa-brands fa-facebook-messenger"></i>
                </a>
                <a href="mailto:kontakt@lifebet.pl" id="mail">
                    <i class="fa-solid fa-envelope"></i>
                </a>
            </div>
        </nav>
        <section id="login-box">
            <h2>
                <i class="fa-sharp fa-solid fa-shield"></i>
            </h2>
            <h6>
                LOGOWANIE
            </h6>
            <hr width="100%" style="border: 2px solid #dcdcdc;border-radius:2px;">
             <!-- TODO CM a-href -->
            <a href="//fb.com/" class="shadow-sm">
                <i class="fa-brands fa-facebook-f"></i>
                Facebook
            </a>
            <a href="//fb.com/" class="shadow-sm">
                <i class="fa-brands fa-google"></i>
                Google
            </a>
        </section>
        <footer class="position-absolute bottom-0 start-0 end-0 p-5 fs-6 text-light w-100 text-center">
            Wszelkie prawa zastrzeżone <i class="fa-solid fa-copyright"></i> LifeBet.PL 2023
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>