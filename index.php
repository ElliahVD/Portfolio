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
    <title>Amandine Delaire, developpeuse web</title>
</head>

<body id="page-top" onload="translate('en','lng-tag')">
<div class="body__containeur" >
<!--HEADER -->
<?php include_once 'partials/header.php' ?>

<!--HOME -->
<?php include_once 'partials/home.php' ?>

<!-- ABOUT -->
<?php include_once 'partials/about.php' ?>

<!-- SKILLS -->
<?php include_once 'partials/skills.php' ?>

<!--PORTFOLIO -->
<section class="portfolio section" id="portfolio">
    <h2 class="section-title">Portfolio</h2>

    <div class="portfolio__container bd-grid">
        <div class="portfolio__img">
            <img src="assets/1.jpg" alt=""/>

            <div class="portfolio__link">
                <a href="figma_project.php" class="portfolio__link-name" lng-tag="first"></a>
            </div>
        </div>
        <div class="portfolio__img">
            <img src="assets/2.jpg" alt=""/>

            <div class="portfolio__link">
                <a href="#" class="portfolio__link-name" lng-tag="more"></a>
            </div>
        </div>
        <div class="portfolio__img">
            <img src="assets/3.jpg" alt=""/>
            <div class="portfolio__link">
                <a href="#" class="portfolio__link-name" lng-tag="more"></a>
            </div>
        </div>
<!--        <div class="portfolio__img">-->
<!--            <img src="assets/4.jpg" alt=""/>-->
<!---->
<!--            <div class="portfolio__link">-->
<!--                <a href="#" class="portfolio__link-name" lng-tag="more"></a>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="portfolio__img">-->
<!--            <img src="assets/5.jpg" alt=""/>-->
<!---->
<!--            <div class="portfolio__link">-->
<!--                <a href="#" class="portfolio__link-name" lng-tag="more"></a>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="portfolio__img">-->
<!--            <img src="assets/6.jpg" alt=""/>-->
<!---->
<!--            <div class="portfolio__link">-->
<!--                <a href="#" class="portfolio__link-name" lng-tag="more"></a>-->
<!--            </div>-->
<!--        </div>-->
    </div>
</section>

<!-- CONTACT -->
<?php include_once 'partials/contact.php' ?>

<!-- FOOTER -->
<?php include_once 'partials/footer.php' ?>
</div>
</body>
</html>
