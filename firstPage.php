<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
            crossorigin="anonymous"
    />
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="firstPage.css">
    <title>Amandine Delaire Projet1</title>
</head>
<body>

<!-- HEADER -->

<header class="l-header">
    <nav class="nav bd-grid">
        <div>
            <a href="#" class="nav__name">Amandine Delaire</a>
        </div>

        <div class="divNavMenu" id="nav-menu">
            <ul class="nav__list">
                <li class="nav__item">
                    <!--  active => la barre qui ce déplace avec le JS -->
                    <a href="index.php" class="nav__link active">Accueil</a>
                </li>
                <li class="nav__item">
                    <a href="index.php" class="nav__link">A propos de moi</a>
                </li>
                <li class="nav__item">
                    <a href="index.php" class="nav__link">Compétences</a>
                </li>
                <li class="nav__item">
                    <a href="index.php" class="nav__link">Portfolio</a>
                </li>
                <li class="nav__item">
                    <a href="index.php" class="nav__link">Contact</a>
                </li>
            </ul>
        </div>
        <div class="nav__toggle" id="nav-toggle">
            <i class="bx bx-menu"></i>
        </div>
    </nav>
</header>

<!--- First Project -->
<div class="container figma bd-grid">


    <section class="Projet1 section" id="projet1">
        <h2 class="section-title">Projet Figma: refonte du site Player's Bar</h2>
        <br>
        <h4> De la maquette vers la construction du site <br>
        <br>Création de logo et de planche de style</h4>
        <br>
        <h5>Zoning et Wareframe</h5>
        <br>
        <img src="assets/zoning_projet1.PNG" alt="">
        <br>
        <h5>Début de la maquette</h5>
        <br>
        <img src="assets/home_projet1.PNG" alt="">
        <br>
        <h5>Formulaire de contact, plan d'accès, et bien d'autres encore!</h5>
        <br>
        <img src="assets/formulaire_projet1.PNG" alt="">
        <br>
        <h5>Version Mobile</h5>
        <br>
        <img src="assets/responsive.PNG" alt="">
        <br>
    </section>
</div>
<!-- FOOTER -->
<footer class="footer section">
    <div class="footer__container bd-grid">
        <div class="footer__data">
            <p class="footer__text">
                Salut! Ici Amandine Delaire et ceci est mon portfolio!
            </p>
        </div>

        <div class="footer__data">
            <h2 class="footer__title">Explorez</h2>
            <ul>
                <li><a href="#home" class="footer__link">accueil</a></li>
                <li><a href="#about" class="footer__link">A propos</a></li>
                <li><a href="#skills" class="footer__link">Compétences</a></li>
                <li><a href="#portfolio" class="footer__link">Portfolio</a></li>
                <li><a href="#Contact" class="footer__link">Contact</a></li>
            </ul>
        </div>

        <div class="footer__data">
            <h2 class="footer__title">Suivez-moi!</h2>
            <a href="#" class="footer__social">
                <i class="linkedIn">
                </i>
            </a>
            <a href="#" class="footer__social">
                <i class="github">
                </i>
            </a>
        </div>
    </div>
</footer>

<script src="js/home.js"></script>
</body>
</html>